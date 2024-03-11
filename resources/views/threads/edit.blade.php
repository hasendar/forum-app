@extends('layouts/master')

@section('content')
    <h1>Edit thread page</h1>
    <div class="container">
        <form action="{{ route('threads.update', $thread->id) }}" method="post" id="create-thread" style="width: 20rem;">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Thread title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $thread->title }}" placeholder="Enter title...">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Thread content</label>
                <textarea class="form-control" name="content" id="content" placeholder="Enter Content..." style="height: 10rem">{{ $thread->content }}</textarea>
            </div>
            <a class="btn btn-primary" href="{{ route('threads.show', $thread->id) }}" role="button">Back</a>
            <button type="submit" class="btn btn-primary">Update thread</button>
        </form>
    </div>
@endsection
