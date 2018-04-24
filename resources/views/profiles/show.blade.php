@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <h1 class="display-3">
                {{ $profileUser->name }}
            </h1>

        </div>
        <hr>
        @foreach ($activities as $date => $activity)
            <h3>{{$date}}</h3>
            @foreach ($activity as $record)
                @include ("profiles.activities.{$record->type}", ['activity' => $record])
            @endforeach
        @endforeach

{{--        {{ $threads->Links() }}--}}

    </div>





@endsection