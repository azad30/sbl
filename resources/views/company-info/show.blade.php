@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">CompanyInfo {{ $companyinfo->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/companies/company-info') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/companies/company-info/' . $companyinfo->id . '/edit') }}" title="Edit CompanyInfo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['companies/company-info', $companyinfo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete CompanyInfo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $companyinfo->id }}</td>
                                    </tr>
                                    <tr><th> Company Name </th><td> {{ $companyinfo->company_name }} </td></tr>
                                    <tr><th> Company Type </th><td> {{ $companyinfo->company_type }} </td></tr>
                                    <tr><th> Mobile </th><td> {{ $companyinfo->mobile }} </td></tr>
                                    <tr><th> Company Type </th><td> {{ $companyinfo->company_type }} </td></tr>
                                    <tr><th> Mobile </th><td> {{ $companyinfo->mobile }} </td></tr>
                                    <tr><th> Email </th><td> {{ $companyinfo->email }} </td></tr>
                                    <tr><th> Address </th><td> {{ $companyinfo->address }} </td></tr>
                                    <tr><th> Country </th><td> {{ $companyinfo->country }} </td></tr>
                                    <tr><th> Telephone </th><td> {{ $companyinfo->telephone }} </td></tr>
                                    <tr><th> Website </th><td> {{ $companyinfo->website }} </td></tr>
                                    <tr><th> Primary_company_ac_no </th><td> {{ $companyinfo->primary_company_ac_no }} </td></tr>
                                    <tr><th> Bank Name </th><td> {{ $companyinfo->bank_name }} </td></tr>
                                    <tr><th> Branch Name </th><td> {{ $companyinfo->branch_name }} </td></tr>
                                    <tr><th> Company_sub_acc_no </th><td> {{ $companyinfo->company_sub_ac_no }} </td></tr>
                                    <tr><th> Company_license_no </th><td> {{ $companyinfo->company_license_no }} </td></tr>
                                    <tr><th> Company Description </th><td> {{ $companyinfo->company_description }} </td></tr>
                                    <tr><th> Image </th><td><img src="{{ url('uploads/company_images/'.$companyinfo->image) }}" style="width:120px; height:120px;" alt="missing" /></td></tr>
                                    <tr><th> Created By </th><td> {{ $companyinfo->created_by }} </td></tr>
                                    <tr><th> Updated By </th><td> {{ $companyinfo->updated_by }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
