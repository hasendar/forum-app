@extends('layouts/master')

@section('content')
    <h1>Show thread page</h1>
    <div class="container">
        <div class="card" style="width:20rem">
            <div class="card-body">
                <h5>{{ $thread->title }}</h5>
                <p>{{ $thread->content }}</p>
            </div>
        </div>
    </div>
@endsection
