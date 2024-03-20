@extends('layout.app')
{{-- Customize layout section --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit')
{{-- Content body: main page content  --}}
@section('content')
    <div class="">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Kategori baru</h3>
            </div>
            <form method="POST" action="{{ route('updateKategori', ['id' => $kategori->kategori_id]) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="kodeKategori">Kode Kategori</label>
                        <input type="text" class="form-control" id="kodeKategori" name="kodeKategori"
                            value="{{ $kategori->kategori_kode }}" placeholder="Masukkan kode kategori">
                    </div>
                    <div class="form-group">
                        <label for="namaKategori">nama Kategori</label>
                        <input type="text" class="form-control" id="namaKategori"
                            name="namaKategori"value="{{ $kategori->kategori_nama }}" placeholder="Masukkan nama kategori">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
