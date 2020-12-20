@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="sidebar text-dark nav nav-tabs flex-column" id="myTab" role="tablist">
    <a id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false"
        class="nav-item active"><i class="fa fa-tachometer" aria-hidden="false"></i>&nbsp; Main</a>
    <a id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
        aria-selected="false" class="nav-item"><i class="fas fa-hand-holding-heart"></i>&nbsp; Donations</a>
    <a href="#" class="nav-item"><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp; Transactions</a>
    <a id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact"
        aria-selected="false" class="nav-item"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Users</a>
</div>

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="custom pt-5 pl-5 ml-5">
            <div class="row justify-content-center px-5" style="margin-left: 5.8em">
                <div class="col-md-3">
                    <div class="card bg-dark"><div class="card-body">sdsdsd</div></div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark"><div class="card-body">sdsdsd</div></div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark"><div class="card-body">sdsdsd</div></div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark"><div class="card-body">sdsdsd</div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>


{{-- <div class="card bg-dark"></div> --}}
@stop