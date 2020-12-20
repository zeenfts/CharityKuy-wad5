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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($transactions) }} --}}
                    @foreach ($transactions as $trsc)
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
                        <td>{{ $trsc->title }}</td>
                        <td>{{ $trsc->name }}</td>
                        <td>{{ $trsc->pembayaran }}</td>
                        <td>Rp {{ number_format($trsc->money, 0, '', '.') }}</td>
                        <td>
                            @if($trsc->status == 'Menunggu konfirmasi')
                            <div class="row px-3">
                                <div class="col-md-6 pr-1">
                                    <form action="{{ route('dashboard.confirm', $trsc->id) }}" method="POST" class="form-inline">
                                        @csrf @method('patch')
                                        <input type="hidden" name="money_ver" value={{ $trsc->money }}>
                                        <button class="btn btn-success" type="submit">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <form action="{{ route('dashboard.confirm', $trsc->id) }}" method="POST" class="form-inline"
                                        onsubmit="return confirm('Yakin batalkan donasi ini? \n\n>> {{ $trsc->name }} <<');">
                                        @csrf @method('patch')
                                        <input type="hidden" name="money_non" value={{ $trsc->money }}>
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop