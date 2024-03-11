@extends('layouts/master')

@section('content')
    <h1>Forum page</h1>
    <a class="btn btn-primary" href="{{ route('threads.create') }}" role="button">Create Thread</a>
    <div class="container">
        <div class="card border-dark mt-3" style="width: 20rem;">
            <ul class="list-group list-group-flush">
                @foreach ($threads as $thread)
                    <li class="list-group-item">
                        <a href="#" class="link-body-emphasis link-offset-2 link-underline-opacity-0 link-underline-opacity-75-hover">{{ $thread->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
