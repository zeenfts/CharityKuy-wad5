@extends('layouts.app', ['title' => $item->title ])
{{-- @section('title', $item->title) --}}

@section('content')
<div class="container">
    @include('layouts.carous')

    <div class="row mt-4">
        <div class="col-md-12 pt-3">
            <div class="row justify-content-between px-2">
                <h1>DESKRIPSI</h1>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('menus.edit', $item) }}" class="btn btn-success w-100">Edit</a>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ ''}}" method="POST" class="form-inline"
                            onsubmit="return confirm('Yakin hapus donasi? \n\n>> {{ $item->title }} <<');">
                            @csrf @method('delete')
                            <button class="btn btn-danger" type="submit">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <P>{{ $item->deskripsi }}</P>
            <!-- Button trigger modal -->
            {{-- {{ dd($item) }} --}}
            <div class="row-md-auto text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    {{ ($item->tipe == 'donasi') ? 'Start donation' : 'Start '.$item->title }}
                </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
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
                    <h5>Mandiri</h5>
                    <p><a href="#" role="button" class="btn btn-primary" title="Popover title"
                            data-content="Popover body content is set in this attribute.">Lanjutkan Pembayaran</a></p>
                    <hr>
                    <h5>BCA</h5>
                    <p><a href="#" role="button" class="btn btn-primary" title="Popover title"
                            data-content="Popover body content is set in this attribute.">Lanjutkan Pembayaran</a></p>
                    <hr>
                    <h5>LinkAja</h5>
                    <p><a href="#" role="button" class="btn btn-primary" title="Popover title"
                            data-content="Popover body content is set in this attribute.">Lanjutkan Pembayaran</a></p>
                    <hr>
                    <h5>OVO</h5>
                    <p><a href="#" role="button" class="btn btn-primary" title="Popover title"
                            data-content="Popover body content is set in this attribute.">Lanjutkan Pembayaran</a></p>
                    <hr>
                    <h5>Dana</h5>
                    <p><a href="#" role="button" class="btn btn-primary" title="Popover title"
                            data-content="Popover body content is set in this attribute.">Lanjutkan Pembayaran</a></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop