@extends('layouts.prof')

@section('ava')
    <img src="https://sun9-86.userapi.com/impf/9aw3yqHezzRDVuzRzUjt82X392uilFoMsjX8PQ/ksc0TMcG1z0.jpg?size=640x640&quality=96&sign=a81f085956577d544f116610f90eb443&type=album" style="z-index: 1"  class="rounded border" height="205" width="205">
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
