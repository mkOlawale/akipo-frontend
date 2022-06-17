@extends('Layout.app')
@section('title', 'Gossiper/Login')

@section('maincontent')
<div class="flex justify-center">
        <div class="container_form">
            @if(session('status'))
            <div style="color: red; text-align: center; font-weight: bold;">
                {{ session('status') }}
            </div>
            @endif
        <form action="{{ route('login') }}" method="post">
            @csrf
                <div class="input_container">
                    <label for="email" class="">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your Email" value="{{ old('email') }}">
                    @error('email')
                        <div style="color: red">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="input_container">
                    <label for="password" class="">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" value="">
                    @error('password')
                        <div style="color: red">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="flex">
                    <div>
                          <input type="checkbox">
                    </div>
                    <div class="remember_div">
                    <p>Remember me</p>
                    </div>
                  
                </div>
                <div class="input_container">
                    <button>Register</button>
                </div>
                <div>
                    <a href="{{ route('Register') }}"> Haven't register yet! <span style="color: red;">Sign Up</span></a>
                </div>
            </form>
        </div>
    </div>
@endsection()