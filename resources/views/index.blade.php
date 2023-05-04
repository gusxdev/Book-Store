@extends('template')
@section('konten')
<div class="card">
    <div class="card-header">
        <div class="card-title">DATA BUKU UNIBOOKSTORE</div>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id Buku</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama Buku</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Penerbit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($index as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->id_buku}}</td>
                    <td>{{$item->kategori}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->stok}}</td>
                    <td>{{$item->nama_penerbit}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection