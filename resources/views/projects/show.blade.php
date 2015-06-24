<!-- /resources/views/projects/show.blade.php -->
@extends('app')
 
@section('content')
   <h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>{{ $project->name }}</h2>
 
    @if ( !$project->tasks->count() )
     <div class="form-create">
        Your project has no tasks.
    </div>
    @else
        <ul>
            @foreach( $project->tasks as $task )
                <li class="entry">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                        @if($task->completed)
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        @else
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        @endif
                        <a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a>
                      
                        <div id="btn-group">
                            {!! link_to_route('projects.tasks.edit', 'Edit', array($project->slug, $task->slug), array('class' => 'btn btn-info')) !!}
 
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        </div>
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p class="create">
        {!! link_to_route('projects.index', 'Back to Projects') !!} |
        {!! link_to_route('projects.tasks.create', 'Create Task', $project->slug) !!}
    </p>

     
@endsection
