@extends('layouts.app')

@section('content')
<v-card elevation=6 fluid style="background-color: #f5f6f7; height: 5em; z-index: 2">
          <v-card-title>{{$article->title}}</v-card-title>
      </v-card>
<v-card elvation=12 style="background-color:white; width: 15%; height: 100%; float: left; position: absolute;
  top: 0; z-index: 1" >
         <v-list shaped >
             <v-list-item-group v-model="item" color="blue" style="top:8em">
              <v-list-item>
                {{$article->title}}
              </v-list-item>
              
             </v-list-item-group>
         </v-list>
      </v-card>
<div style="top: 4em; position: relative">
    <v-card class="" style="width: 50%; right: -30%">
      <h1 class="text-center ">{{$article->title}}</h1>
      <article>
      {!! $article->body_html !!}
      </article>
      <p class="text-sm text-right leading-5 text-gray-700 mt-3">Posted {{\Carbon\Carbon::parse($article->updated_at)->format('d/m/Y')}}</p>
    </v-card>
</div>
@endsection