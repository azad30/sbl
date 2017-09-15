<!-- <div class="form-group {{ $errors->has('branch_name') ? 'has-error' : ''}}">
    {!! Form::label('branch_name', 'Branch Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('branch_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('branch_name', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->
<div class="form-group {{ $errors->has('branch_name') ? 'has-error' : ''}}">
    {!! Form::label('branch_name', 'Branch Name *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('branch_name',$branches, null, ['class' => 'form-control', 'placeholder' => 'Select Branch', 'required' => 'required']) !!}
        {!! $errors->first('branch_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- <div class="form-group {{ $errors->has('cu_type') ? 'has-error' : ''}}">
    {!! Form::label('cu_type', 'Cu Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('cu_type', ['Party', 'Govt', 'Local'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_type', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->

<div class="form-group {{ $errors->has('cu_type') ? 'has-error' : ''}}">
    <label for="cu_type" class="col-md-4 control-label">Customer Type:</label>
    <div class="col-md-6">
        <select class="form-control" name="cu_type" id="cu_type">
            <option disabled selected> -- select company type -- </option>
            <option value="party">Party</option>
            <option value="local">Local</option>
            <option value="govt">Govt</option>       
        </select>
    </div>
</div>
<div class="form-group {{ $errors->has('customer_code') ? 'has-error' : ''}}">
    {!! Form::label('customer_code', 'Customer Code', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('customer_code', null, ['class' => 'form-control']) !!}
        {!! $errors->first('customer_code', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_name') ? 'has-error' : ''}}">
    {!! Form::label('cu_name', 'Cu Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_mobile') ? 'has-error' : ''}}">
    {!! Form::label('cu_mobile', 'Cu Mobile', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('cu_mobile', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_mobile', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_email') ? 'has-error' : ''}}">
    {!! Form::label('cu_email', 'Cu Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_address') ? 'has-error' : ''}}">
    {!! Form::label('cu_address', 'Cu Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_country') ? 'has-error' : ''}}">
    {!! Form::label('cu_country', 'Cu Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_country', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_country', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_telephone') ? 'has-error' : ''}}">
    {!! Form::label('cu_telephone', 'Cu Telephone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('cu_telephone', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_telephone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_ac_no') ? 'has-error' : ''}}">
    {!! Form::label('cu_ac_no', 'Cu Ac No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_ac_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_ac_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_credit_limit') ? 'has-error' : ''}}">
    {!! Form::label('cu_credit_limit', 'Cu Credit Limit', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_credit_limit', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_credit_limit', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_discount_rate_p') ? 'has-error' : ''}}">
    {!! Form::label('cu_discount_rate_p', 'Cu Discount Rate P', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_discount_rate_p', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_discount_rate_p', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_discount_rate_d') ? 'has-error' : ''}}">
    {!! Form::label('cu_discount_rate_d', 'Cu Discount Rate D', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_discount_rate_d', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_discount_rate_d', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_discount_rate_o') ? 'has-error' : ''}}">
    {!! Form::label('cu_discount_rate_o', 'Cu Discount Rate O', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_discount_rate_o', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_discount_rate_o', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_discount_rate_g') ? 'has-error' : ''}}">
    {!! Form::label('cu_discount_rate_g', 'Cu Discount Rate G', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_discount_rate_g', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_discount_rate_g', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_ac_no') ? 'has-error' : ''}}">
    {!! Form::label('cu_ac_no', 'Cu Ac No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_ac_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_ac_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_bank_name') ? 'has-error' : ''}}">
    {!! Form::label('cu_bank_name', 'Cu Bank Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_bank_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_bank_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_bank_branch_name') ? 'has-error' : ''}}">
    {!! Form::label('cu_bank_branch_name', 'Cu Bank Branch Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_bank_branch_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_bank_branch_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cu_description') ? 'has-error' : ''}}">
    {!! Form::label('cu_description', 'Cu Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cu_description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cu_description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('reference_name') ? 'has-error' : ''}}">
    {!! Form::label('reference_name', 'Reference Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('reference_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('reference_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('status', ['active', 'inactive', 'good', 'bad'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-md-4 control-label">Status:</label>
    <div class="col-md-6">
        <select class="form-control" name="status" id="status">
            <option disabled selected> -- select status type -- </option>
            <option value="active">active</option>
            <option value="inactive">inactive</option>
            <option value="good">good</option>
            <option value="bad">bad</option>        
        </select>
    </div>
</div>
<div class="form-group {{ $errors->has('created_by') ? 'has-error' : ''}}">
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
