@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    Films
                    <a href="{{URL::route('films.create')}}" class="btn btn-primary btn-sm pull-right"> Add</a>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-body">

                    @if (Session::has('message'))
                        <div class="flash alert alert-info">
                            <p>{{ Session::get('message') }}</p>
                        </div>
                    @endif

                    <film-list></film-list>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
