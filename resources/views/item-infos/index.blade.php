@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Iteminfos</div>
                    <div class="panel-body">
                        <a href="{{ url('/iteminfos/item-infos/create') }}" class="btn btn-success btn-sm" title="Add New ItemInfo">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                     <!--    {!! Form::open(['method' => 'GET', 'url' => '/iteminfos/item-infos', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Barcode</th><th>Category</th><th>Quantity</th><th>Unit</th><th>Item Name</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($iteminfos as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->barcode }}</td><td>{{ $item->category->item_category_name }}</td><td>{{ $item->item_qty }}</td><td>{{ $item->unit->unit_name }}</td><td>{{ $item->item_name }}</td>
                                        <td>
                                            <a href="{{ url('/iteminfos/item-infos/' . $item->id) }}" title="View ItemInfo"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/iteminfos/item-infos/' . $item->id . '/edit') }}" title="Edit ItemInfo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/iteminfos/item-infos', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete ItemInfo',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $iteminfos->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
