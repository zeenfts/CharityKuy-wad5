@extends('layouts.app')

@section('content')
<div class="sidebar text-dark flex-column">
    <a id="nav-main-tab" class="nav-item{{ request()->is('dashboard') ? ' active' : '' }}"
        href="{{ route('dashboard.main') }}"><i class="fa fa-tachometer"
            aria-hidden="false"></i>&nbsp; Main</a>

    <a id="nav-donations-tab" class="nav-item{{ request()->segment(2) == 'donations' ? ' active' : '' }}"
        href="{{ route('dashboard.donations') }}"><i
            class="fas fa-hand-holding-heart"></i>&nbsp; Donations</a>

    <a id="nav-transactions-tab" class="nav-item{{ request()->segment(2) == 'transactions' ? ' active' : '' }}"
        href="{{ route('dashboard.transactions') }}"><i
            class="fa fa-shopping-bag" aria-hidden="true"></i>&nbsp; Transactions</a>

    <a id="nav-users-tab" class="nav-item{{ request()->segment(2) == 'users' ? ' active' : '' }}"
        href="{{ route('dashboard.users') }}"><i class="fa fa-users"
            aria-hidden="true"></i>&nbsp; Users</a>
</div>

@yield('content_dsh')
@stop