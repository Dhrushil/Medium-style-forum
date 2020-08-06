@extends('layouts.app')

@section('content')
<div class="container mb-12">
    <div class="row justify-content-center">


        <v-card height=30em width=30em>
            <v-card-title class="justify-content-center">Login</v-card-title>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <v-text-field placeholder="E-mail Address" id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></v-text-field>
                <v-text-field placeholder="Password" id="password" type="password" class="mb-8 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></v-text-field>


                <v-btn class="mb-8" color="primary" style="display: block; left:13em" type="submit">{{ __('Login') }}</v-btn>


                @if (Route::has('register'))
                <v-btn text style="display: block; color:green" href="{{route('register')}}">Sign up</v-btn>
                @endif

                @if (Route::has('password.request'))
                <v-btn text style="display: block; color:blue" href="{{route('password.request')}}">Forgot Your Password?</v-btn>
                @endif



                @error('email')
                <v-alert dense type="error" border="left">
                    <strong>{{ $message }}</strong>
                </v-alert>
                @enderror

                @error('password')
                <v-alert dense type="error" border="left">
                    <strong>{{ $message }}</strong>
                </v-alert>
                @enderror

            </form>
        </v-card>
    </div>
    @endsection