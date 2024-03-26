@extends('layouts.app')

@section("content")
<h1>{{$task->title}}</h1>
<p> id is :{{$task->id}}</p>

<div>
    @if($task->long_description)
   <p>{{$task->long_description}}</p>
    @endif
</div>
@endsection

