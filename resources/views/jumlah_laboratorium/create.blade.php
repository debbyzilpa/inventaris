@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data Laboratorium</h1>
    <form action="{{ route('jumlah_laboratorium.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Hari</label>
            <input type="text" name="hari" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tgl" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Mapel</label>
            <input type="text" name="mapel" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Guru</label>
            <input type="text" name="guru" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
