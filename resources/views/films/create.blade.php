@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Film</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">

                                @if (Session::has('message'))
                                    <div class="flash alert-info">
                                        <p>{{ Session::get('message') }}</p>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class='flash alert-danger'>
                                        @foreach ( $errors->all() as $error )
                                            <p>{{ $error }}</p>
                                        @endforeach
                                    </div>
                                @endif

                                @section('content')
                                    {!! Form::model(new App\Films, ['route' => ['films.store'], 'files'=>true]) !!}
                                    @include('films/_form', ['submit_text' => 'Create Film'])
                                    {!! Form::close() !!}
                                @endsection
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
