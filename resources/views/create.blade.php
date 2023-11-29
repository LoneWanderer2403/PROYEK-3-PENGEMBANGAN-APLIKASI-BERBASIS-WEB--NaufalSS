<!-- resources/views/barang/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Barang</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="KodeBarang">Kode Barang</label>
            <input type="text" class="form-control" id="KodeBarang" name="KodeBarang" required>
        </div>
        <div class="form-group">
            <label for="NamaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" required>
        </div>
        <div class="form-group">
            <label for="Satuan">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" required>
        </div>
        <div class="form-group">
            <label for="HargaSatuan">Harga Satuan</label>
            <input type="number" class="form-control" id="HargaSatuan" name="HargaSatuan" required>
        </div>
        <div class="form-group">
            <label for="Stok">Stok</label>
            <input type="number" class="form-control" id="Stok" name="Stok" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
