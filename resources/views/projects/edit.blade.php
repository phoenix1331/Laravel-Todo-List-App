<!-- /resources/views/projects/edit.blade.php -->
@extends('app')
 
@section('content')
    <h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Edit Project</h2>
 <div class="form-create">
    {!! Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
        @include('projects/_form', ['submit_text' => 'Edit Project'])
    {!! Form::close() !!}
</div>
       <p class="create">
        {!! link_to_route('projects.index', 'Back to Projects') !!} 
    </p>
@endsection