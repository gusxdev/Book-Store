@extends('template')
@section('konten')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="card-title">Edit Data Penerbit</h3>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('penerbit.update', $edit['id']) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jd">Id Penerbit</label>
                                        <input value="{{$edit->id_penerbit}}" type="text" name="id_penerbit" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jd">Nama Penerbit</label>
                                        <input value="{{$edit->nama_penerbit}}" type="text" name="nama_penerbit" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Telepon</label>
                                                <input value="{{$edit->telepon}}" type="text" name="telepon" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jd">Kota</label>
                                                <input value="{{$edit->kota}}" type="text" name="kota" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="jd">Alamat</label>
                                                <input value="{{$edit->alamat}}" type="text" name="alamat" class="form-control">
                                            </div>
                                        </div>
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