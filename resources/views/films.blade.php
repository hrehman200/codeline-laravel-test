@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Films</div>

                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<script type="text/javascript">
    jQuery(function() {
        jQuery.ajax({
            type: "GET",
            url: "/films/get",
            success: function (response) {
                console.log(response);
            }
        });
    });
</script>
