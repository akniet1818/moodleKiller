@extends('layouts.prof')

@section('ava')
    <img src="https://sun9-87.userapi.com/impf/hXOHdjIZnTrEo3NNuK3aBII4CRy-NSUmTnDEsg/5Qb98pjhNLQ.jpg?size=640x640&quality=96&sign=919edb211f86f8a916b951165364ecd6&type=album" style="z-index: 1"  class="rounded border" height="205" width="205">
@endsection

@section('profile_content')
    <div class="col-6">
        @if(count($information) > 0)
            <ul class="list-group list-group-flush">
                @foreach($information as $key => $info)
                    <li class="list-group-item d-flex">{{$key}}: <span class="mx-1" id="email">{{$info}}</span></li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="col-6">
        @if(count($information1) > 0)
            <ul class="list-group list-group-flush">
                @foreach($information1 as $key => $info)
                    <li class="list-group-item d-flex">{{$key}}: <a href="{{$info}}" class="mx-1"> {{$key}} profile</a></li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
