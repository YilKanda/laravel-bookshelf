@extends('layouts.app')

@section('title', 'Authors')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Authors</h1>

            <ul>
                @foreach ($authors as $author)
                    <li>{{ $author->name }}</li>
                @endforeach
            </ul>

        </div>
    </div>
</div>
@endsection
