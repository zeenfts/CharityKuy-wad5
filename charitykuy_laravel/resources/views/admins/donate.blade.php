@extends('admins.dashboard', ['title' => 'Donations'])

@section('content_dsh')
<div class="custom pt-5 pl-5 ml-5">
    <div class="d-flex justify-content-center pt-1">
        <div>
            {{ $menus->links() }}
        </div>
    </div>

    <div class="row justify-content-center px-5" style="margin-left: 5.8em">
        {{-- <h3>users</h3> --}}
        <div class="row pt-0">
            <table class="table text-center table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Title</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Tipe</th>
                        <th scope="col">Pemilik Program</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $dns)
                    <tr>
                        {{-- <th scope="row"></th> --}}
                        <td>{{ $dns->title }}</td>
                        <td>{{ $dns->deskripsi }}</td>
                        <td>{{ $dns->gambar }}</td>
                        <td>Rp {{ number_format($dns->jumlah, 0, '', '.') }}</td>
                        <td>{{ $dns->progress }}</td>
                        <td>{{ $dns->tipe }}</td>
                        <td>{{ $dns->create_by->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop