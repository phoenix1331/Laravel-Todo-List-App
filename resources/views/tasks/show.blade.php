@extends('app')
 
@section('content')
    <h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>

        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
        {{ $task->name }}
        @if($task->completed)
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        @else
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        @endif
    </h2>
  <div class="form-create">
    {{ $task->description }}
  </div>
   <p class="create">
		@if ( $task->count() )
			{!! link_to_route('projects.show', 'Back to Tasks', [$project->slug]) !!}
		@else
			{!! link_to_route('projects.index', 'Back to Projects') !!}
		@endif
		| {!! link_to_route('projects.tasks.create', 'Create Task', $project->slug) !!} |
		 {!! link_to_route('projects.tasks.edit', 'Edit Task', [$project->slug, $task->slug]) !!}
    </p>
@endsection