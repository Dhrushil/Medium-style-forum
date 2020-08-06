@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VueLearn</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
        <example-component/>
        <div class="links">
                @foreach ($links as $link)
                    <v-card class="mb-5" style="height: 300; width: 300; position:relative" href="{{$link->url}}" > 
                    <v-card-title>
                        {{$link->title}}
                    </v-card-title>
                    <v-card-text>
                        {{$link->description}}
                    </v-card-text>
                </v-card>
                @endforeach
                {{$links->onEachSide(1)->links()}}
            </div>
    
</html>
@endsection