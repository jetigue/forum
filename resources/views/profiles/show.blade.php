@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1>
                {{ $profileUser->name }}
            </h1>
            <h5 class="pl-3">
                Since {{ $profileUser->created_at->diffForHumans() }}
            </h5>

        </div>

        @foreach ($threads as $thread)
            <div class="card mb-4">
                <div class="card-header">
                    <div class="level">
                        <span class="flex">
                            <a href="#">{{ $thread->creator->name }}</a> posted:
                            {{ $thread->title }}
                        </span>

                        <span>{{ $thread->created_at->diffForHumans() }}</span>
                    </div>
                </div>

                <div class="card-body">
                    {{ $thread->body }}
                </div>
            </div>
        @endforeach

        {{ $threads->Links() }}

    </div>





@endsection