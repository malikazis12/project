@extends('layouts.master')
@section('title','Tambah Mahasiswa')
@section('judul','Tambah Mahasiswa')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Jurusan</a></li>
        <li class="breadcrumb-item active">Tambah Mahasiswa</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">


        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <form method="post" action="/mahasiswa/store/">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nim</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Jurusan</label>
                    <select name="jurusans_id" class="form-control" id="">
                        <option value="">-Pilih Jurusan-</option>

                        @foreach ($jur as $item)
                            <option value="">{{$item->jurusans_id}}>{{$item->jurusan}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki" checked>
                      <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan">
                      <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                    </div>
                  </div>
                <div class="mb-3">
                    <label class="form-label">Tempat</label>
                    <input type="text" class="form-control" name="tempat">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Agama</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="agama" id="exampleRadios1" value="islam" checked>
                      <label class="form-check-label" for="exampleRadios1">Islam</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="kristen">
                      <label class="form-check-label" for="exampleRadios2">Kristen</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" id="exampleRadios2" value="hindu">
                        <label class="form-check-label" for="exampleRadios2">Hindu</label>
                      </div>
                  </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
