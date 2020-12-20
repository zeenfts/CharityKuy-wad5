@extends('admins.dashboard', ['title' => 'Dashboard'])

@section('content_dsh')
<div class="custom pt-5 pl-5 ml-5">
    <div class="row justify-content-center px-5 text-center" style="margin-left: 5.8em">
        <div class="col-md-3">
            <div class="card bg-dark text-light">
                <div class="card-body">{{ count($menus) }}</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-dark text-light">
                <div class="card-body">{{ count($transactions) }}</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-dark text-light">
                <div class="card-body">{{ count($users) }}</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-dark text-light">
                <div class="card-body">sdsdsd</div>
            </div>
        </div>
    </div>
</div>
@stop