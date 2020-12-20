@extends('admins.dashboard', ['title' => 'Transactions'])

@section('content_dsh')
<div class="custom pt-5 pl-5 ml-5">
    <div class="row justify-content-center px-5" style="margin-left: 5.8em">
        {{-- <h3>users</h3> --}}
        <div class="row pt-4">
            <table class="table text-center table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tgl Transaksi</th>
                        <th scope="col">Donasi</th>
                        <th scope="col">User</th>
                        <th scope="col">Pembayaran</th>
                        <th scope="col">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($transactions) }} --}}
                    @foreach ($transactions as $trsc)
                    <tr>
                        @if($trsc->status == 'Menunggu konfirmasi')
                        @php $color_status = 'text-warning' @endphp
                        @elseif($trsc->status == 'Terkonfirmasi')
                        @php $color_status = 'text-success' @endphp
                        @else
                        @php $color_status = 'text-danger' @endphp
                        @endif
                        <th scope="row"><i class="fa fa-circle {{ $color_status }}" aria-hidden="true"></i></th>
                        <td>{{ $trsc->updated_at }}</td>
                        <td>{{ $trsc->title }}</td>
                        <td>{{ $trsc->name }}</td>
                        <td>{{ $trsc->pembayaran }}</td>
                        <td>Rp {{ number_format($trsc->money, 0, '', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop