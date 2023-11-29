<!-- resources/views/barang/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Barang</h1>

        @if(session('success'))
            <div class="alert alert-success">
                <i class="fa fa-check"></i> {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $item)
                    <tr>
                        <td>{{ $item->KodeBarang }}</td>
                        <td>{{ $item->NamaBarang }}</td>
                        <td>{{ $item->Satuan }}</td>
                        <td>{{ number_format($item->HargaSatuan, 0, ',', '.') }}</td>
                        <td>{{ $item->Stok }}</td>
                        <td class="action-buttons">
                            <a href="{{ route('barang.edit', $item->KodeBarang) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('barang.destroy', $item->KodeBarang) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        th, td {
            text-align: center;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
        }

        .action-buttons a, .action-buttons button {
            margin: 0 5px;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
    </style>
@endsection
