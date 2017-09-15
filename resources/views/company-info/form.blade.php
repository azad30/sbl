<div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
    {!! Form::label('company_name', 'Company Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('company_type') ? 'has-error' : ''}}">
    <label for="company_type" class="col-md-4 control-label">Company Type:</label>
    <div class="col-md-6">
        <select class="form-control" name="company_type" id="company_type">
            <option disabled selected> -- select company type -- </option>
            <option value="group">Group</option>
            <option value="limited">Limited</option>
            <option value="partnerhsip">Partnership</option>       
        </select>
    </div>
</div>
<div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
    {!! Form::label('mobile', 'Mobile', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('mobile', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    {!! Form::label('country', 'Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('country', null, ['class' => 'form-control']) !!}
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
    {!! Form::label('telephone', 'Telephone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('telephone', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('website') ? 'has-error' : ''}}">
    {!! Form::label('website', 'Website', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('website', null, ['class' => 'form-control']) !!}
        {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('primary_company_ac_no') ? 'has-error' : ''}}">
    {!! Form::label('primary_company_ac_no', 'Primary Company Ac No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('primary_company_ac_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('primary_company_ac_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('bank_name') ? 'has-error' : ''}}">
    {!! Form::label('bank_name', 'Bank Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bank_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('branch_name') ? 'has-error' : ''}}">
    {!! Form::label('branch_name', 'Branch Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('branch_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('branch_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('company_sub_ac_no') ? 'has-error' : ''}}">
    {!! Form::label('company_sub_ac_no', 'Company Sub Ac No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_sub_ac_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('company_sub_ac_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('company_license_no') ? 'has-error' : ''}}">
    {!! Form::label('company_license_no', 'Company License No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_license_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('company_license_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('company_description') ? 'has-error' : ''}}">
    {!! Form::label('company_description', 'Company Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('company_description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('company_description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
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
