<?php

namespace App\Http\Controllers;

use App\Models\vote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $candidatec_vote_count = vote::where('first_person_vote','!=', null)->count();
        $candidated_vote_count = vote::where('second_person_vote','!=', null)->count();
        return view('home',compact('candidatec_vote_count','candidated_vote_count'));
    }
}
