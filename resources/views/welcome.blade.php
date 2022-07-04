<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

    </head>
    <body>
    <div class="container-fluid">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <form action="{{ route('vote.store') }}"  method="post" onsubmit="return checkCheckBoxes(this);">
                @csrf
                <div class="card">
                    <div class="card-body">
                            <div class="card-header">
                                <h4 class="card-title"><b>Select Yes Or No</b></h4>
                            </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <div class="card" style="width:65%">
                                  <img class="card-img-top" src="https://images.pexels.com/photos/2294492/pexels-photo-2294492.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2
                                  " alt="Card image" style="width:100%">
                                  <div class="card-body">
                                    <h4 class="card-title">A</h4>
                                    <div class="form-check">
                                    <input class="form-check-input select_yes_or_no_1" type="checkbox" value="yes1" name="yes1" id="yes1">
                                    <label class="form-check-label" for="yes1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input select_yes_or_no_1" type="checkbox" value="no1" name="no1" id="no1">
                                        <label class="form-check-label" for="no_a">
                                           No
                                          </label>
                                        </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card" style="width:65%">
                                  <img class="card-img-top" src="https://images.pexels.com/photos/1486064/pexels-photo-1486064.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2
                                  " alt="Card image" style="width:100%">
                                  <div class="card-body">
                                    <h4 class="card-title">B</h4>
                                    <div class="form-check">
                                        <input class="form-check-input select_yes_or_no_2" type="checkbox" value="yes2" name="yes2" id="yes2">
                                        <label class="form-check-label" for="yes2">
                                            Yes
                                          </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input select_yes_or_no_2" type="checkbox" value="no2" name="no2" id="no2">
                                            <label class="form-check-label" for="no2">
                                               No
                                              </label>
                                            </div>
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- Votting person  --}}
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title"><b>Select One person For Vote</b></h4>
                            <div class="alert alert-danger d-none" id="validation_error" role="alert">

                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-2">
                                <div class="card" style="width:65%">
                                  <img class="card-img-top" src="https://images.pexels.com/photos/2294492/pexels-photo-2294492.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2
                                  " alt="Card image" style="width:100%">
                                  <div class="card-body">
                                    <h4 class="card-title">C</h4>
                                    <div class="form-check">
                                        <input class="form-check-input select_person_vote" type="checkbox" value="vote_c" name="vote_c" id="vote_c">
                                        <label class="form-check-label" for="vote_c">
                                            Select For Voting
                                          </label>
                                        </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card" style="width:65%">
                                  <img class="card-img-top" src="https://images.pexels.com/photos/1486064/pexels-photo-1486064.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2
                                  " alt="Card image" style="width:100%">
                                  <div class="card-body">
                                    <h4 class="card-title">D</h4>
                                    <div class="form-check">
                                        <input class="form-check-input select_person_vote" type="checkbox" name="vote_d" value="vote_d" id="vote_d">
                                        <label class="form-check-label" for="vote_d">
                                            Select For Voting
                                          </label>
                                          @error('vote_d')
                                          <small class="form-text text-danger">{{ $message }}</small>
                                          @enderror
                                        </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Enter Basic Details</h5>
                                </div>
                                <div class="card-body">
                                        <div class="form-group">
                                            <label for="full_name">Enter Full Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name">
                                            @error('full_name')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                          <div class="form-group">
                                            <label for="email">Email address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
                                            @error('email')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                          </div>
                                          <div class="form-group">
                                            <label for="Phone">Enter Phone No <span class="text-danger">*</span></label>
                                            <input type="Phone" class="form-control" name="phone" id="Phone"  placeholder="Enter Phone">
                                            @error('phone')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                          </div>
                                          <div class="form-group">
                                            <label for="member_id">Enter Member Id <span class="text-danger">*</span></label>
                                            <input type="member_id" class="form-control" name="member_id" id="member_id"  placeholder="Enter member id">
                                            @error('member_id')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                          </div>
                                          <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    <script>

        // validation Message when submit without vote

        function checkCheckBoxes(theForm) {

        if (theForm.vote_c.checked == false && theForm.vote_d.checked == false)
        {

            $('#validation_error').html('Please Select at Least  one person for vote');
            $('#validation_error').removeClass('d-none');

            return false;
        }

        return true;

    }

// Select  Checkbox  Validation.

     $(document).ready(function(){

        // Select Yes or no
        $('.select_yes_or_no_1').click(function() {
            $('.select_yes_or_no_1').not(this).prop('checked', false);
        });

        $('.select_yes_or_no_2').click(function() {
            $('.select_yes_or_no_2').not(this).prop('checked', false);
        });

        // Select Person for vote

        $('.select_person_vote').click(function() {
            $('.select_person_vote').not(this).prop('checked', false);
        });

    });

</script>
</body>
</html>







