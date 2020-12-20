@extends('admins.dashboard', ['title' => 'Dashboard'])

@section('content_dsh')
<div class="custom pt-5 pl-5 ml-5">
    <div class="row justify-content-center px-5 text-center" style="margin-left: 5.8em">
        <a class="col-md-3 pt-1" style="text-decoration: none" href="{{ route('dashboard.donations') }}">
            <div class="card bg-secondary text-light" style="background: linear-gradient(to bottom,#1F1C2C, #928DAB);">
                <div class="card-head text-right pr-4 pt-2">
                    <i class="fas fa-hands-helping fa-4x" style="color:#928DAB"></i>
                </div>
                <div class="card-head h4 pt-2" style="z-index : 2;
                position: absolute; margin-left:56px">Total Donations</div>
                <div class="card-body h3 font-weight-bold py-3">{{ count($menus) }}</div>
            </div>
        </a>
        <a class="col-md-3 pt-1" style="text-decoration: none" href="{{ route('dashboard.transactions') }}">
            <div class="card text-light" style="background: linear-gradient(to bottom, #16222A, #3A6073);">
                <div class="card-head text-right pr-4 pt-2">
                    <i class="fas fa-mail-bulk fa-4x" style="color:#3A6073"></i>
                </div>
                <div class="card-head h4 pt-2" style="z-index : 2;
                position: absolute; margin-left:42px">Total Transactions</div>
                <div class="card-body h3 font-weight-bold py-3">{{ count($transactions) }}</div>
            </div>
        </a>
        <a class="col-md-3 pt-1" style="text-decoration: none" href="{{ route('dashboard.users') }}">
            <div class="card bg-secondary text-light" style="background: linear-gradient(to bottom, #3f4c6b,#A8CABA);">
                <div class="card-head text-right pr-4 pt-2">
                    <i class="fas fa-user-friends fa-4x" style="color:#a8cabadb"></i>
                </div>
                <div class="card-head h4 pt-2" style="z-index : 2;
                position: absolute; margin-left:84px">Total Users</div>
                <div class="card-body h3 font-weight-bold py-3">{{ count($users) }}</div>
            </div>
        </a>
        <div class="col-md-3 pt-1">
            <div class="card text-light" style="background: linear-gradient(to bottom, #232526, #414345);">
                @php $num_iter = 0 @endphp
                @foreach($menus as $mn)
                @php $num_iter += $mn->jumlah @endphp
                @endforeach
                <div class="card-head text-right pr-4 pt-2">
                    <i class="fas fa-coins fa-4x" style="color:#4c4e51"></i>
                </div>
                <div class="card-head h4 pt-2 pl-5" style="z-index : 2;
                position: absolute;">Donations Funds</div>
                <div class="card-body h3 font-weight-bold py-3">Rp {{ number_format($num_iter, 0, '', '.') }}</div>
            </div>
        </div>
    </div>
</div>
@stop