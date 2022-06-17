@extends('Layout.app')
@section('title', 'Gossiper/Register')
@section('maincontent')
    <div class="flex justify-center">
        <div class="container_form">
            <form action=" {{ route('Register') }}" method="post">
            @csrf
                <div class="input_container">
                    <label for="username" class="">fullName</label>
                    <input type="text" name="fullName" id="fullName" placeholder="Enter your username" value="{{ old('fullName') }}">
                    @error('fullName')
                        <div class="txt-red" style="color: red">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input_container">
                    <label for="email" class="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="txt-red" style="color: red">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input_container">
                    <label for="password" class="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" value="">
                    @error('password')
                        <div class="txt-red" style="color: red">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input_container">
                    <label for="password" class="">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                    placeholder="Retype password" value="">
                    @error('password')
                        <div class="txt-red" style="color: red">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input_container">
                    <button> Register </button>
                </div>
                <div>
                    <a href="{{ route('login') }}"> Already Registered? <span style="color: brown;">Sign In</span></a>
                </div>
            </form>
        </div>
    </div>

@endsection