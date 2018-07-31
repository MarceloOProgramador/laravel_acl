@extends('layouts.app')

@section('content')
<div class="container">
    
    <h2>{{$post->tilte}}</h2>
    <p>
        {{$post->description}}
    </p>
    <blockquote>
        Autor: {{$post->getUser->name}}
    </blockquote>
</div>
@endsection
