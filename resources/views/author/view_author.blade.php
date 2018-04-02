@extends('layouts.app')

@section('title', $author->name)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>{{ $author->name }}</h1>

            <p>{{ $author->biography}}</p>
            <div>
                <a href="{{ route('authors.edit', [$author->id]) }}">Edit</a>
            </div>

        </div>
    </div>
</div>
@endsection
