@extends('layouts.app')

@section('title', 'ABSENSI MAHASISWA')

@section('content')

<form action="/kontraks" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">MATA KULIAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="matakuliah_id" aria-describedby="emailHelp" value="{{ old('matakuliah_id') }}">
    @error('matakuliahs_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">MAHASISWA</label>
    <input type="text" class="form-control" name="semesters_id" id="emailHelp" value="{{ old('semesters_id') }}">
    @error('semesters_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
