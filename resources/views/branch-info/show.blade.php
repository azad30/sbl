@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">BranchInfo {{ $branchinfo->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/branches/branch-info') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/branches/branch-info/' . $branchinfo->id . '/edit') }}" title="Edit BranchInfo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['branches/branch-info', $branchinfo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete BranchInfo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $branchinfo->id }}</td>
                                    </tr>
                                    <tr><th> Company Name </th><td> {{ $branchinfo->company->company_name }} </td></tr><tr><th> Branch Name </th><td> {{ $branchinfo->branch_name }} </td></tr><tr><th> Image </th><td> <img src="{{ url('uploads/branch_images/'.$branchinfo->image) }}" style="width:120px; height:120px;" alt="missing" /> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
