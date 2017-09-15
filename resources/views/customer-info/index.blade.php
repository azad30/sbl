@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Customerinfo</div>
                    <div class="panel-body">
                        <a href="{{ url('/costomers/customer-info/create') }}" class="btn btn-success btn-sm" title="Add New CustomerInfo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <!-- {!! Form::open(['method' => 'GET', 'url' => '/costomers/customer-info', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!} -->

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Branch Name</th><th>Cu Type</th><th>Customer Code</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customerinfo as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->branch->branch_name }}</td><td>{{ $item->cu_type }}</td><td>{{ $item->customer_code }}</td>
                                        <td>
                                            <a href="{{ url('/costomers/customer-info/' . $item->id) }}" title="View CustomerInfo"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/costomers/customer-info/' . $item->id . '/edit') }}" title="Edit CustomerInfo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/costomers/customer-info', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete CustomerInfo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $customerinfo->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
