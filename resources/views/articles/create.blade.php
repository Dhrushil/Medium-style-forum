@extends('layouts.mde')

@section('content')


<h3 class="text-center text-3xl font-semibold">New Article</h3>

<form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <label class="label" for="online">
        Publish?
      </label>
      
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight " id="online" name="online">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select>
    <v-text-field outlined name="title" id="title" label="Title">{{old ('title')}}</v-text-field>
    <input type="text" name="title" id="title">
   
      
     
  </div>
  <div>
    <h2>Summary</h2>
  <textarea name="summary" id="summary">{{ old('summary')}}</textarea>
  <h2>Body</h2>
  <textarea name="body" id="body">{{ old('body')}}</textarea>
  
  </div>
  
  @if(!Auth::guest())
<div class="w-full text-right pa-3 mb-6">
    <input class="btn btn-green my-4" type="submit" value="Save article">
  </div>
  @endif
</form>
@if(Auth::guest())
<div class="w-full text-right pa-3 mb-6">
<a href="/login" style="font-size: larger;">login</a>
</div>
@endif

  {{-- Import CSS and JS for SimpleMDE editor --}}
  <link rel="stylesheet" href="https://unpkg.com/easymde/dist/easymde.min.css">
  <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
  
  <script>
        // Initialise editors
        var bodyEditor = new EasyMDE({element: document.getElementById("body")});
        var summaryEditor = new EasyMDE({element: document.getElementById("summary")});

  </script>

@endsection