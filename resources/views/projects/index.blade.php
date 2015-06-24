<!-- /resources/views/projects/index.blade.php -->
@extends('app')
 
@section('content')
    <h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Projects</h2>
 
	@if ( !$projects->count() )
        You have no projects
    @else
        <ul>
           @foreach( $projects as $project )
                <li class="entry">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                         
                            ({{$project->tasksCount()}} tasks)
    
                        <div id="btn-group">
                            {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                         </div>
                    {!! Form::close() !!}
                </li>
            @endforeach 
        </ul>
    @endif
    <p class="create">
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>
		
   </div>

</div> <!-- /container -->
@endsection