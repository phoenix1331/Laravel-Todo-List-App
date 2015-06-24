<!-- /resources/views/tasks/create.blade.php -->
@extends('app')
 
@section('content')
    <h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Create Task for Project "{{ $project->name }}"</h2>
 <div class="form-create">
    {!! Form::model(new App\Tasks, ['route' => ['projects.tasks.store', $project->slug], 'class'=>'']) !!}
        @include('tasks/_form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
 </div>
     <p class="create">
        {!! link_to_route('projects.show', 'Cancel', $project->slug) !!} | {!! link_to_route('projects.index', 'Back to Projects') !!} 
    </p>
@endsection
 
