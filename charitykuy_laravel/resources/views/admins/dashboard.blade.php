@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="sidebar text-dark nav nav-tabs flex-column">
    <a id="nav-main-tab" class="nav-item{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('dashboard.main') }}" aria-controls="nav-main" aria-selected="true"><i
            class="fa fa-tachometer" aria-hidden="false"></i>&nbsp; Main</a>

    <a id="nav-donations-tab" class="nav-item{{ request()->segment(2) == 'donations' ? ' active' : '' }}" href="{{ route('dashboard.donations') }}" aria-controls="nav-donations"
        aria-selected="true"><i class="fas fa-hand-holding-heart"></i>&nbsp; Donations</a>

    <a id="nav-transactions-tab" class="nav-item{{ request()->segment(2) == 'transactions' ? ' active' : '' }}" href="{{ route('dashboard.transactions') }}" aria-controls="nav-transactions"
        aria-selected="true" clas><i class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp; Transactions</a>

    <a id="nav-users-tab" class="nav-item{{ request()->segment(2) == 'users' ? ' active' : '' }}" href="{{ route('dashboard.users') }}" aria-controls="nav-users" aria-selected="true"><i
            class="fa fa-users" aria-hidden="true"></i>&nbsp; Users</a>
</div>

@yield('content_dsh')
@stop