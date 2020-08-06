@extends('layouts.app');
@section('content')
<v-app>
  <div style="height: 100%; position: relative; top: -1.7em; z-index: 1;">
      <v-card elevation=6 fluid style="background-color: #f5f6f7; height: 5em; z-index: 1">
          <v-card-title>Articles</v-card-title>
      </v-card>
  
<v-card style="width: 20em; height: 100%">
    @foreach ($articles as $article)
        <v-card style="width: 15em; height: 15em; right: -12%; top: 1em" class="mb-5" href="{{Route('articles.show', $article->slug)}}">
            <v-card-title>{{$article->title}}</v-card-title>
            <v-card-subtitle>Posted {{\Carbon\Carbon::parse($article->updated_at)->format('d/m/Y')}}</v-card-subtitle>
            
            <v-card-actions>
            <v-btn text color="primary" href="{{Route('articles.show', $article->slug)}}" style="top: 6em">Read more</v-btn>
            </v-card-actions>
            
        </v-card>
    @endforeach
</div>
</v-card>
@if(Auth::guest())
<v-btn style="position: absolute; z-index: 1; right: 1em; top: -0.5em" rounded large color="primary" href="{{route('login')}}">Create article</v-btn>
@else
<v-btn style="position: absolute; z-index: 1; right: 1em; top: -0.5em" rounded large color="primary" href="{{route('articles.create')}}">Create article</v-btn>
@endif
</v-app>
@endsection