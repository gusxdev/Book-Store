@extends('template')
@section('konten')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="card-title">Tambah Data Kategori</h3>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jd">Nama Kategori</label>
                                        <input type="text" name="kategori" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <center>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection