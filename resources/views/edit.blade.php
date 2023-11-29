<!-- resources/views/barang/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Barang</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('barang.update', $barang->KodeBarang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="NamaBarang">Nama Barang</label>
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" value="{{ $barang->NamaBarang }}" required>
        </div>
        <div class="form-group">
            <label for="Satuan">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" value="{{ $barang->Satuan }}" required>
        </div>
        <div class="form-group">
            <label for="HargaSatuan">Harga Satuan</label>
            <input type="number" class="form-control" id="HargaSatuan" name="HargaSatuan" value="{{ $barang->HargaSatuan }}" required>
        </div>
        <div class="form-group">
            <label for="Stok">Stok</label>
            <input type="number" class="form-control" id="Stok" name="Stok" value="{{ $barang->Stok }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
