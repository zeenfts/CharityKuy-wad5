@extends('admins.dashboard', ['title' => 'Dashboard'])

@section('content_dsh')
<div class="custom pt-5 pl-5 ml-5">
    <div class="row justify-content-center px-5 text-center" style="margin-left: 5.8em">
        <a class="col-md-3" style="text-decoration: none" href="{{ route('dashboard.donations') }}">
            <div class="card bg-secondary text-light">
                <div class="card-head h4 pt-2">Total Donations</div>
                <div class="card-body h3">{{ count($menus) }}</div>
            </div>
        </a>
        <a class="col-md-3" style="text-decoration: none" href="{{ route('dashboard.transactions') }}">
            <div class="card bg-dark text-light">
                <div class="card-head h4 pt-2">Total Transactions</div>
                <div class="card-body h3">{{ count($transactions) }}</div>
            </div>
        </a>
        <a class="col-md-3" style="text-decoration: none" href="{{ route('dashboard.users') }}">
            <div class="card bg-secondary text-light" style="text-decoration: none">
                <div class="card-head h4 pt-2">Total Users</div>
                <div class="card-body h3">{{ count($users) }}</div>
            </div>
        </a>
        <div class="col-md-3">
            <div class="card bg-dark text-light">
                @php $num_iter = 0 @endphp
                @foreach($menus as $mn)
                @php $num_iter += $mn->jumlah @endphp
                @endforeach
                <div class="card-head h4 pt-2">Donations Funds</div>
                <div class="card-body h3">Rp {{ number_format($num_iter, 0, '', '.') }}</div>
            </div>
        </div>
    </div>
</div>
@stop