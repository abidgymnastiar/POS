@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary ">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('barang') }}" class="form-horizontal">
                @csrf
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Kategori Barang</label>
                    <div class="col-11">
                        <select class="form-control" id="kategori_id" name="kategori_id" required>
                            <option value="">- Pilih kategori -</option>
                            @foreach ($kategori as $item)
                                <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Barang Kode</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="barang_kode" name="barang_kode"
                            value="{{ old('barang_kode') }}" required>
                        @error('barang_kode')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Nama Barang</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="barang_nama" name="barang_nama"
                            value="{{ old('barang_nama') }}" required>
                        @error('barang_nama')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Harga Beli</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="harga_beli" name="harga_beli"
                            value="{{ old('harga_beli') }}">
                        @error('harga_beli')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Harga Juak</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="harga_jual" name="harga_jual"
                            value="{{ old('harga_jual') }}">
                        @error('harga_jual')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">User</label>
                    <div class="col-11">
                        <select class="form-control" id="user_id" name="user_id" required>
                            <option value="">- Pilih user -</option>
                            @foreach ($user as $item)
                                <option value="{{ $item->user_id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Stok</label>
                    <div class="col-11">
                        <input type="text" class="form-control" id="stok_jumlah" name="stok_jumlah"
                            value="{{ old('stok_jumlah') }}">
                        @error('stok_jumlah')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label"></label>
                    <div class="col-11">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a class="btn btn-sm btn-default ml-1" href="{{ url('barang') }}">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
@endpush
