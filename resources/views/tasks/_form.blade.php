<!-- /resources/views/tasks/partials/_form.blade.php -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}<br />
    {!! Form::text('name') !!}
</div>
 
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}<br />
    {!! Form::text('slug') !!}
</div>
 
<div class="form-group">
    {!! Form::label('completed', 'Completed:') !!}
    {!! Form::checkbox('completed') !!}
</div>
 
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}<br />
    {!! Form::textarea('description') !!}
</div>
 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>