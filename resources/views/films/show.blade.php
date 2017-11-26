@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{$film->name}}</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12" align="center">
                            <img src="{{$film->getPhoto()}}" class="img-thumbnail" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Description</div>
                        <div class="col-md-9">{{$film->description}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Release Date</div>
                        <div class="col-md-9">{{$film->release_date}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Genre</div>
                        <div class="col-md-9">{{$film->country}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Ticket Price</div>
                        <div class="col-md-9">${{$film->ticket_price}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Rating</div>
                        <div class="col-md-3">{{$film->rating}}/5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
