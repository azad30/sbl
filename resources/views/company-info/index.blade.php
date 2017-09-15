@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Companyinfo</div>
                    <div class="panel-body">
                        <a href="{{ url('/companies/company-info/create') }}" class="btn btn-success btn-sm" title="Add New CompanyInfo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

        <!--                 {!! Form::open(['method' => 'GET', 'url' => '/companies/company-info', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Company Name</th><th>Company Type</th><th>Mobile</th><th>Image</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($companyinfo as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->company_name }}</td><td>{{ $item->company_type }}</td><td>{{ $item->mobile }}</td><td><img src="{{ url('uploads/company_images/'.$item->image) }}" style="width:120px; height:120px;" alt="missing" /></td>
                                        <td>
                                            <a href="{{ url('/companies/company-info/' . $item->id) }}" title="View CompanyInfo"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/companies/company-info/' . $item->id . '/edit') }}" title="Edit CompanyInfo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/companies/company-info', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete CompanyInfo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $companyinfo->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
