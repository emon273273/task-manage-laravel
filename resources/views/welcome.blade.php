<h1><div>Hello this is blade template</div></h1>

<div>
{{-- @if(count($tasks)>0) --}}
@forelse ($tasks as $task)
<div>
    <a href="{{route('tasks.show',['id'=>$task->id])}}">{{$task->title}}</a>
</div>
@empty
<div>there is no data</div>

@endforelse
    


{{-- @else
<div>There is no dats</div> --}}
{{-- @endif --}}
</div>
