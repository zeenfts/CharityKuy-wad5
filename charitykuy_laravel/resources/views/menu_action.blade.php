@extends('layouts.app')@section('title', 'Home')

@section('content')
<div class="container">
    @include('layouts.carous')

    <h1>DESKRIPSI</h1>
    <P>Tuliskan tentang deskripsi donasi kemanusiaan</P>
    <br><br><br>
    <!-- Button trigger modal -->
    {{-- {{ dd($item) }} --}}
    <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            {{ ($item->tipe == 'donasi') ? 'Start donation' : 'Start '.$item->title }}
        </button></center>

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