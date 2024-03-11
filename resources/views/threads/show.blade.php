@extends('layouts/master')

@section('content')
    <h1>Show thread page</h1>
    <div class="container">
        <a class="btn btn-primary mb-3" href="{{ route('forum') }}" role="button">Back</a>
        <a class="btn btn-primary mb-3" href="{{ route('threads.edit', $thread) }}" role="button">Edit</a>
        <div class="card" style="width:20rem">
            <div class="card-body">
                <h5>{{ $thread->title }}</h5>
                <p>{{ $thread->content }}</p>
            </div>
        </div>
    </div>
@endsection
