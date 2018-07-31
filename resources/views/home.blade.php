@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
    <h2>{{$post->tilte}}</h2>
    <p>
        {{$post->description}}
    </p>
    <blockquote>
        Autor: {{$post->getUser->name}}
        <a href="{{route("update-post", $post->id)}}">-Editar</a>
    </blockquote>
    @empty
    <p class="text-warning">
        Nenhum POST cadastrado!
    </p>
    @endforelse
</div>
@endsection
