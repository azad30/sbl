@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">ItemInfo {{ $iteminfo->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/iteminfos/item-infos') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/iteminfos/item-infos/' . $iteminfo->id . '/edit') }}" title="Edit ItemInfo"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['iteminfos/iteminfos', $iteminfo->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete ItemInfo',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $iteminfo->id }}</td>
                                    </tr>
                                    <tr><th> Category </th><td> {{ $iteminfo->category->item_category_name }} </td></tr>
                                    <tr><th> Quantity</th><td> {{ $iteminfo->item_qty }} </td></tr>
                                    <tr><th> Unit</th><td> {{ $iteminfo->unit->unit_name}} </td></tr>
                                    <tr><th> Item Name </th><td> {{ $iteminfo->item_name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
