<div class="form-group {{ $errors->has('barcode') ? 'has-error' : ''}}">
    {!! Form::label('barcode', 'Barcode', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('barcode', null, ['class' => 'form-control']) !!}
        {!! $errors->first('barcode', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('item_name') ? 'has-error' : ''}}">
    {!! Form::label('item_name', 'Item Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('item_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('item_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- <div class="form-group {{ $errors->has('item_category_id') ? 'has-error' : ''}}">
    {!! Form::label('item_category_id', 'Item Category Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('item_category_id', ['Party', 'Govt', 'Local'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('item_category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->
<div class="form-group {{ $errors->has('item_category_id') ? 'has-error' : ''}}">
    {!! Form::label('item_category_id', 'Item Category Name *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('item_category_id',$itemcategories, null, ['class' => 'form-control', 'placeholder' => 'Select Category Item', 'required' => 'required']) !!}
        {!! $errors->first('item_category_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<!-- <div class="form-group {{ $errors->has('item_category_unit') ? 'has-error' : ''}}">
    {!! Form::label('item_category_unit', 'Item Category Unit', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('item_category_unit', ['Party', 'Govt', 'Local'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('item_category_unit', '<p class="help-block">:message</p>') !!}
    </div>
</div> -->
<div class="form-group {{ $errors->has('item_unit') ? 'has-error' : ''}}">
    {!! Form::label('item_unit', 'Item Category Unit *', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('item_unit',$itemunits, null, ['class' => 'form-control', 'placeholder' => 'Select Unit Item', 'required' => 'required']) !!}
        {!! $errors->first('item_unit', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('item_type') ? 'has-error' : ''}}">
    {!! Form::label('item_type', 'Item Type', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('item_type', null, ['class' => 'form-control']) !!}
        {!! $errors->first('item_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('item_qty') ? 'has-error' : ''}}">
    {!! Form::label('item_qty', 'Item Qty', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('item_qty', null, ['class' => 'form-control']) !!}
        {!! $errors->first('item_qty', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('item_price') ? 'has-error' : ''}}">
    {!! Form::label('item_price', 'Item Price', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('item_price', null, ['class' => 'form-control']) !!}
        {!! $errors->first('item_price', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('discount_percent') ? 'has-error' : ''}}">
    {!! Form::label('discount_percent', 'Discount Percent', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('discount_percent', null, ['class' => 'form-control']) !!}
        {!! $errors->first('discount_percent', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('discount_tk') ? 'has-error' : ''}}">
    {!! Form::label('discount_tk', 'Discount Tk', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('discount_tk', null, ['class' => 'form-control']) !!}
        {!! $errors->first('discount_tk', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('vat') ? 'has-error' : ''}}">
    {!! Form::label('vat', 'Vat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('vat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('vat', '<p class="help-block">:message</p>') !!}
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
