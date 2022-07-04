@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Message!</strong>{{ session('status') }} .
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      @endif
                <div class="card-header">Verify Token
                <a href="/" class="btn btn-secondary float-end btn-lg">Back</a>
            </div>
                <div class="card-body">
                    <form action="{{ route('verify.token.match') }}" method="post">
                        @csrf
                    <div class="form-group">
                        <label for="my-input">Enter OTP <span class="text-danger">*</span></label>
                        <input id="my-input" class="form-control"  type="text" name="token_match">
                        @error('token_match')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                        <button type="submit" class="btn btn-primary mt-2 float-end btn-lg">Submit Otp</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.alert').alert()
</script>
@endsection
