@extends('template')
@section('konten')
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="card-title">Edit Data Kategori</h3>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <form action="{{ route('kategori.update', $edit['id']) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="jd">Nama Kategori</label>
                                        <input value="{{$edit->kategori}}" type="text" name="kategori" class="form-control">
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