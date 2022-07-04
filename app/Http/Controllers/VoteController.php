<?php

namespace App\Http\Controllers;

use App\Mail\VerifyToken;
use App\Models\VerifyCode;
use App\Models\vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class VoteController extends Controller
{

    public function store(Request $request){

       $request->validate([

        'full_name'  => "required",
        'email'  => "required|email",
        'phone'  => "required|digits:10",
        'member_id' => "required |numeric",

       ]);

    $data = [
        'token' => substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyz"), 0, 8),
      ];

    Mail::send('email.verify_token', $data, function($message) use ($data) {

        $message->to('test@email.com')
        ->subject("Verification Mail");
      });

      $vote = new vote();


      $vote->full_name = $request->full_name;
      $vote->email = $request->email;
      $vote->phone = $request->phone;
      $vote->member_id = $request->member_id;
      $vote->first_person_yes_or_no = $request->yes1;
      $vote->first_person_yes_or_no = $request->no1;
      $vote->second_person_yes_or_no = $request->yes2;
      $vote->second_person_yes_or_no = $request->no2;
      $vote->first_person_vote = $request->vote_c;
      $vote->second_person_vote = $request->vote_d;

      $vote->save();

      $verify = new VerifyCode();
      $verify->email = $request->email;
      $verify->token = $data['token'];
      $verify->save();

      return redirect()->route('vote.verify.token');


    }

    public function verifyTokenPage(){

        return view('verify');


    }

    public function TokenMatch(Request $request){

        $request->validate(
            [

            'token_match' => 'required',

            ],

            [
                'token_match.required' => 'Please Enter Oto First',

            ],
    );



        $token = VerifyCode::where('token',$request->token_match)->first();
        if($token){
            if ($request->token_match == $token->token){
                            $token->is_verify = 1;
                            $token->save();
                     return back()->with('status',"Your Vote is Submited Succesfully");
                }
        }

        else{

            return back()->with('status',"Your Otp Do Not Match To Our Record Try Another");
        }

    }

    public function show($id){

            return view('show');
    }
}
