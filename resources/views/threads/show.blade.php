@extends('layouts/master')

@section('content')
    <h1>Show thread page</h1>
    <form action="{{ route('threads.destroy', $thread->id) }}" method="post">
        @csrf
        @method('delete')
        <div class="container">
            <a class="btn btn-primary mb-3" href="{{ route('forum') }}" role="button">Back</a>
            <a class="btn btn-primary mb-3" href="{{ route('threads.edit', $thread) }}" role="button">Edit</a>
            <button type="submit" class="btn btn-danger mb-3">Delete</button>
            <div class="card" style="width:20rem">
                <div class="card-body">
                    <h5>#{{ $thread->id }} {{ $thread->title }}</h5>
                    <p>{{ $thread->content }}</p>  
                </div>
                <div class="card-footer">
                    Created {{ $thread->created_at }}
                </div>
            </div>
        </div>
    </form>
@endsection
