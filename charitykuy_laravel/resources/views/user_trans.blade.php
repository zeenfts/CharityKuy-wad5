@extends('layouts.app', ['title' => 'Transaksi' ])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <h3>users</h3> --}}
        <div class="row pt-4">
            <table class="table text-center table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tgl Transaksi</th>
                        <th scope="col">Donasi</th>
                        <th scope="col">Pembayaran</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($transactions) }} --}}
                    @foreach ($transactions as $trsc)
                    @if($trsc->user_id == auth()->user()->id)
                    <tr>
                        @if($trsc->status == 'Menunggu konfirmasi')
                        @php $color_status = 'text-warning' @endphp
                        @elseif($trsc->status == 'Terverifikasi')
                        @php $color_status = 'text-success' @endphp
                        @else
                        @php $color_status = 'text-danger' @endphp
                        @endif
                        <th scope="row"><i class="fa fa-circle {{ $color_status }}" aria-hidden="true"></i></th>
                        <td>{{ $trsc->updated_at }}</td>
                        <td>{{ $trsc->trans_from->title }}</td>
                        <td>{{ $trsc->pembayaran }}</td>
                        <td>Rp {{ number_format($trsc->money, 0, '', '.') }}</td>
                        <td>{{ $trsc->status }}</td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop