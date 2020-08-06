@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <v-card height=40em width=30em>
            <v-card-title class="justify-content-center">Register</v-card-title>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <v-text-field placeholder="Username" id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></v-text-field>
                <v-text-field placeholder="E-mail Address" id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"></v-text-field>
                <v-text-field placeholder="Password" id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"></v-text-field>
                <v-text-field placeholder="Confirm Password" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"></v-text-field>


                <v-btn class="mb-8" color="primary" style="display: block; left:13em" type="submit">{{__('Register')}}</v-btn>


                @if (Route::has('login'))
                <v-btn text style="display: block; color:green" href="{{route('login')}}">Login</v-btn>
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
</div>
@endsection