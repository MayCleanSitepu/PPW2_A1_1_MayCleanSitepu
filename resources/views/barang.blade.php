@extends('layouts.app')

@include('header')

@section('content')
<h1>Data Barang</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_barang as $brg)
            <tr>
                <td>{{ $brg->id }}</td>
                <td>{{ $brg->nama }}</td>
                <td>{{ $brg->jumlah }}</td>
                <td>{{ $brg->harga }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection



