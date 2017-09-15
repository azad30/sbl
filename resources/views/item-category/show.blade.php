@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">ItemCategory {{ $itemcategory->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/itemcategories/item-category') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/itemcategories/item-category/' . $itemcategory->id . '/edit') }}" title="Edit ItemCategory"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['itemcategories/itemcategory', $itemcategory->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete ItemCategory',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $itemcategory->id }}</td>
                                    </tr>
                                    <tr><th> Item Category Name </th><td> {{ $itemcategory->item_category_name }} </td></tr><tr><th> Created By </th><td> {{ $itemcategory->created_by }} </td></tr><tr><th> Updated By </th><td> {{ $itemcategory->updated_by }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
