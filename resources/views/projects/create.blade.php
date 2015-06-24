<!-- /resources/views/projects/create.blade.php -->
@extends('app')
 
@section('content')
    <h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Create Project</h2>
 <div class="form-create">
    {!! Form::model(new App\Project, ['route' => ['projects.store']]) !!}
        @include('projects/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
 </div>
 <p class="create">
        {!! link_to_route('projects.index', 'Back to Projects') !!} 
    </p>
@endsection
 
