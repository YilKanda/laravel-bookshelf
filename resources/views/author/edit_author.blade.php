@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>{{ $title }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('authors.update', [$author->id]) }}">
                <div class="form-group">
                    <label class="control-label" for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $author->name) }}" >
                </div>

                <div class="form-group">
                    <label class="control-label" for="biography">Biography</label>
                    <textarea class="form-control" id="biography" name="biography" rows="7">{{ old('biography', $author->biography) }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-default" href="{{ $cancelUrl }}">Cancel</a>
                {{ csrf_field() }}
            </form>

        </div>
    </div>
</div>
@endsection
