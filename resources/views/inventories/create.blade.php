@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{ __('Tambah Data Inventori') }}</h5>
                </div>

                <div class="card-body">
                    <form action="{{ route('inventories.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nama</label>
                            <input type="text" name="nama" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Harga</label>
                            <input type="text" name="harga" class="form-control" id="formGroupExampleInput2" placeholder="Harga Barang">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Stok</label>
                            <input type="text" name="stok" class="form-control" id="formGroupExampleInput2" placeholder="Stok Barang">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
