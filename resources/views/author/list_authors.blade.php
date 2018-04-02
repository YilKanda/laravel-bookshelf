@extends('layouts.app')

@section('title', 'Authors')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Authors</h1>

            <ul>
                @foreach ($authors as $author)
                    <li>
                        <a href="{{ route('authors.view', [$author->id]) }}">
                            {{ $author->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <div>
                <a href="{{ route('authors.create') }}">Create new author</a>
            </div>

        </div>
    </div>
</div>
@endsection
