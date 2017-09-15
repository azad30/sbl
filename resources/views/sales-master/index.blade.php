@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Salesmaster</div>
                    <div class="panel-body">
                        <a href="{{ url('/salesmasters/sales-master/create') }}" class="btn btn-success btn-sm" title="Add New SalesMaster">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                    <!--     {!! Form::open(['method' => 'GET', 'url' => '/salesmasters/sales-master', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}
 -->
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Cu Id</th><th>Branch Id</th><th>Pay Method</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($salesmaster as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->cu_id }}</td><td>{{ $item->branch_id }}</td><td>{{ $item->pay_method }}</td>
                                        <td>
                                            <a href="{{ url('/salesmasters/sales-master/' . $item->id) }}" title="View SalesMaster"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/salesmasters/sales-master/' . $item->id . '/edit') }}" title="Edit SalesMaster"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/salesmasters/sales-master', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete SalesMaster',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $salesmaster->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
