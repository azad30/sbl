<div class="form-group {{ $errors->has('cu_id') ? 'has-error' : ''}}">
    {!! Form::label('cu_id', 'Cu Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('branch_id') ? 'has-error' : ''}}">
    {!! Form::label('branch_id', 'Branch Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('branch_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('branch_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pay_method') ? 'has-error' : ''}}">
    {!! Form::label('pay_method', 'Pay Method', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('pay_method', ['petrol', 'octane', 'diesel'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('pay_method', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('grand_total') ? 'has-error' : ''}}">
    {!! Form::label('grand_total', 'Grand Total', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('grand_total', null, ['class' => 'form-control']) !!}
        {!! $errors->first('grand_total', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('discount') ? 'has-error' : ''}}">
    {!! Form::label('discount', 'Discount', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('discount', null, ['class' => 'form-control']) !!}
        {!! $errors->first('discount', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('net_pay') ? 'has-error' : ''}}">
    {!! Form::label('net_pay', 'Net Pay', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('net_pay', null, ['class' => 'form-control']) !!}
        {!! $errors->first('net_pay', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('due') ? 'has-error' : ''}}">
    {!! Form::label('due', 'Due', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('due', null, ['class' => 'form-control']) !!}
        {!! $errors->first('due', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
