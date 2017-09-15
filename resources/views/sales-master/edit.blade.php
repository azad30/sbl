@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit SalesMaster #{{ $salesmaster->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/salesmasters/sales-master') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($salesmaster, [
                            'method' => 'PATCH',
                            'url' => ['/salesmasters/sales-master', $salesmaster->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('sales-master.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
