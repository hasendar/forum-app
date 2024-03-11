@extends('layouts/master')

@section('content')
    <h1>Create thread page</h1>
    <div class="container">
        <form action="{{ route('threads.store') }}" method="post" id="create-thread" style="width: 20rem;">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Thread title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" placeholder="Enter title...">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Thread content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Enter Content..." style="height: 10rem">{{ old('content') }}</textarea>
            </div>
            <a class="btn btn-primary" href="{{ route('forum') }}" role="button">Back</a>
            <button type="submit" class="btn btn-primary">Create thread</button>
        </form>
    </div>
@endsection
