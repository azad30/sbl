<div class="form-group {{ $errors->has('unit_name') ? 'has-error' : ''}}">
    {!! Form::label('unit_name', 'Unit Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('unit_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('unit_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
    {!! Form::label('created_by', 'Created By', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('created_by', null, ['class' => 'form-control']) !!}
        {!! $errors->first('created_by', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('updated_by') ? 'has-error' : ''}}">
    {!! Form::label('updated_by', 'Updated By', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('updated_by', null, ['class' => 'form-control']) !!}
        {!! $errors->first('updated_by', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
