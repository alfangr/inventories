@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-between" style="display: flex; align-items:center;">
                    <h5 class="mb-0">{{ __('Data Transaksi') }}</h5>
                    <a href="{{ route('transactions.create') }}" class="btn btn-primary">Tambah</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Barang</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $key => $item)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $item->has_user->name }}</td>
                                <td>{{ $item->has_barang->nama }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>
                                    <div class="d-flex">
                                        <!-- <button type="button" class="btn btn-warning mr-3">Edit</button> -->
                                        <form action="{{ route('transactions.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
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
@endsection
