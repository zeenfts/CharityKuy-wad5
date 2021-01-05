@extends('layouts.app', ['title' => $item->title ])
{{-- @section('title', $item->title) --}}

@section('content')
<div class="container">
    @error('nominal')
    <div class="row">
        <div class="col">
            <div class="alert alert-danger alert-dismissible fade show">
                {{ __('Gagal berdonasi!!') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    @enderror
    @include('layouts.carous')

    <div class="row mt-4">
        <div class="col-md-12 pt-3">
            <div class="row justify-content-between px-2">
                <a href="" style="text-decoration: none" class="text-dark">
                    <h1>DESKRIPSI</h1>
                </a>
                <div class="row">
                    @if((auth()->user()) and (auth()->user()->id == $item->user_id))
                    <div class="col-md-6 pr-2 pl-1">
                        <a href="{{ route('menus.edit', $item) }}" class="btn btn-success w-100"><i class="fa fa-edit"
                                aria-hidden="true"></i> Edit</a>
                    </div>
                    <div class="col-md-6 pl-0 pr-5">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_del"
                            style="width: 6.5em;">
                            <i class="fa fa-trash-o"></i> Delete
                        </button>
                        {{-- <form action="{{ route('menus.delete', $item) }}" method="POST" class="form-inline"
                        onsubmit="return confirm('Yakin hapus donasi? \n\n>> {{ $item->title }} <<');">
                            @csrf @method('delete')
                            <button class="btn btn-danger" type="submit">
                                Delete
                            </button>
                            </form> --}}

                            <!-- Modal delete confirmation -->
                            <div class="modal fade" id="modal_del" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Yakin hapus donasi?
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $item->title }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Cancel
                                            </button>
                                            <form action="{{ route('menus.delete', $item)}}" method="POST">
                                                @csrf @method('delete')
                                                <button class="btn btn-danger" type="submit">
                                                    <i class="fa fa-trash-o"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    @endif
                </div>
            </div>
            <P>{{ $item->deskripsi }}</P>

            <!-- Button trigger modal -->
            {{-- {{ dd($item) }} --}}
            <div class="row-md-auto text-center">
                <a type="button" class="btn btn-primary" data-toggle={{ (Auth()->user()) ? 'modal' : '' }}
                    data-target="#exampleModal" href={{ !(Auth()->user()) ? route('login') : '#' }}>
                    <i class="fas fa-donate" aria-hidden="true"></i>&nbsp; {{ 'Mulai '.$item->title }}
                </a>
                @if($item->title == 'Zakat' or $item->title == 'Haji dan Umroh' or $item->title == 'Kurban')
                <a type="button" class="btn btn-secondary"
                    href={{ (($item->title != 'Zakat')) ? '' : route('zakat.hitung', $item->id) }}>
                    <i class="{{ ($item->title == 'Zakat') ? 'fas fa-cash-register' : 'fas fa-wallet' }}"
                        aria-hidden="true"></i>&nbsp;
                    {{ ($item->title == 'Zakat') ? 'Hitung ' : 'Tabungan ' }}{{ $item->title }}
                </a>
                @endif
            </div>
        </div>
    </div>

    <!-- Modal Payment -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Metode Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('trans.pay', $item) }}" method="POST">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="form-group row-md-4 text-center">
                                <label for="titlee"
                                    class="col-form-label text-md-right">{{ __('Masukkan nominal') }}</label>
                                <input type="number"
                                    class="form-control pt-1 rounded-pill @error('nominal') is-invalid @enderror"
                                    name="nominal" id='nominal'>
                                @error('nominal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <h5>Bank Dummy</h5>
                        <p><button role="button" class="btn btn-primary" title="Dummy" name="action" value="dummy"
                                data-content="Popover body content is set in this attribute."><i
                                    class="fas fa-coins"></i>
                                Lanjutkan Pembayaran</button></p>
                        <hr>
                        <h5>EzPay</h5>
                        <p><button role="button" class="btn btn-primary" title="EzPay" value="ezpay"
                                data-content="Popover body content is set in this attribute." name="action"><i
                                    class="fas fa-coins"></i>
                                Lanjutkan Pembayaran</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop