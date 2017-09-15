
<div class="form-group {{ $errors->has('company_name') ? 'has-error' : ''}}">
    {!! Form::label('company_name', 'Company Name *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('company_name',$companies, null, ['class' => 'form-control', 'placeholder' => 'Select Company', 'required' => 'required']) !!}
        {!! $errors->first('company_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('branch_name') ? 'has-error' : ''}}">
    {!! Form::label('branch_name', 'Branch Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('branch_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('branch_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('branch_type') ? 'has-error' : ''}}">
    <label for="branch_type" class="col-md-4 control-label">Branch Type:</label>
    <div class="col-md-6">
        <select class="form-control" name="branch_type" id="branch_type">
            <option disabled selected> -- select branch type -- </option>
            <option value="pertrolPump">Petrol Pump</option>
            <option value="bricksField">Bricks Field</option>
            <option value="poultry">Poultry</option>
            <option value="readymateGarments">Readymate Garments</option>         
        </select>
    </div>
</div>


<div class="form-group {{ $errors->has('mobile') ? 'has-error' : ''}}">
    {!! Form::label('mobile', 'Mobile', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('b_mobile', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mobile', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_email', null, ['class' => 'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    {!! Form::label('address', 'Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_address', null, ['class' => 'form-control']) !!}
        {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('country') ? 'has-error' : ''}}">
    {!! Form::label('country', 'Country', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_country', null, ['class' => 'form-control']) !!}
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
    {!! Form::label('telephone', 'Telephone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('b_telephone', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('website') ? 'has-error' : ''}}">
    {!! Form::label('website', 'Website', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_web', null, ['class' => 'form-control']) !!}
        {!! $errors->first('website', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('bank_name') ? 'has-error' : ''}}">
    {!! Form::label('bank_name', 'Bank Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bank_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bank_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('bank_branch_name') ? 'has-error' : ''}}">
    {!! Form::label('bank_branch_name', 'Bank Branch Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bank_branch_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bank_branch_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('branch_ac_no') ? 'has-error' : ''}}">
    {!! Form::label('branch_ac_no', 'Branch Ac No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_acc_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('b_acc_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('branch_sub_ac_no') ? 'has-error' : ''}}">
    {!! Form::label('branch_sub_ac_no', 'Branch Sub Ac No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_sub_acc_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('branch_sub_ac_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('branch_license_no') ? 'has-error' : ''}}">
    {!! Form::label('branch_license_no', 'Branch License No', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_license_no', null, ['class' => 'form-control']) !!}
        {!! $errors->first('branch_license_no', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('branch_description') ? 'has-error' : ''}}">
    {!! Form::label('branch_description', 'Branch Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('b_description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('branch_description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control']) !!}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
