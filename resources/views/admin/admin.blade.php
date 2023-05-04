@extends('template')
@section('konten')
<div class="card-body">

</div>
<div class="row ml-2 mr-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <center>
                    <a href="{{ route('buku.create') }}">
                        <button class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Tambah Data Buku</button>
                    </a>
                    <a href="{{ route('kategori.create') }}">
                        <button class="btn btn-primary ml-2"><i class="fa fa-plus"></i>&nbsp;Tambah Data Kategori</button>
                    </a>
                    <a href="{{ route('penerbit.create') }}">
                    <button class="btn btn-success ml-2"><i class="fa fa-plus"></i>&nbsp;Tambah Data Penerbit</button>
                    </a>
                </center>
            </div>
            <div class="card-body">
                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                    <li class="nav-item submenu">
                        <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Data Buku</a>
                    </li>
                    <li class="nav-item submenu">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Data Kategori</a>
                    </li>
                    <li class="nav-item submenu">
                        <a class="nav-link active show" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">Data Penerbit</a>
                    </li>
                </ul>
                <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                    <th style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($home as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->id_buku}}</td>
                                    <td>{{$item->kategori}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->harga}}</td>
                                    <td>{{$item->stok}}</td>
                                    <td>{{$item->nama_penerbit}}</td>
                                    <td>
                                        <a href="{{ route('buku.edit', $item->no) }}" style="text-decoration: none; color: white">
                                            <button type="button" class="btn btn-icon btn-round btn-secondary">
                                                <i class="fas fa-edit"></i>
                                        </a>
                                        </button> &nbsp;
                                        <a href="{{ route('buku.delete', $item->no) }}">
                                            <button onclick="return confirm('Yakin data ingin dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->kategori}}</td>
                                    <td>
                                        <a href="{{ route('kategori.edit', $item->id) }}" style="text-decoration: none; color: white">
                                            <button type="button" class="btn btn-icon btn-round btn-secondary">
                                                <i class="fas fa-edit"></i>
                                        </a>
                                        </button> &nbsp;
                                        <a href="{{ route('kategori.delete', $item->id) }}">
                                            <button onclick="return confirm('Yakin data ingin dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade active show" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Id Penerbit</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penerbit as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>   
                                    <td>{{$item->id_penerbit}}</td>
                                    <td>{{$item->nama_penerbit}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->kota}}</td>
                                    <td>{{$item->telepon}}</td>
                                    <td>
                                        <a href="{{ route('penerbit.edit', $item->id) }}" style="text-decoration: none; color: white">
                                            <button type="button" class="btn btn-icon btn-round btn-secondary">
                                                <i class="fas fa-edit"></i>
                                        </a>
                                        </button> &nbsp;
                                        <a href="{{ route('penerbit.delete', $item->id) }}">
                                            <button onclick="return confirm('Yakin data ingin dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection