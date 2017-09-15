@extends('../layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit BranchInfo #{{ $branchinfo->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url('/branches/branch-info') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($branchinfo, [
                            'method' => 'PATCH',
                            'url' => ['/branches/branch-info', $branchinfo->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('branch-info.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
