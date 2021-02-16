@extends('layouts.app')

@section('title', 'MATA KULIAH')

@section('content')

<form action="/kontraks" method="POST">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">MATA KULIAH</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="matakuliah_id" aria-describedby="emailHelp" value="{{ old('matakuliah_id') }}">
    @error('matakuliah_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">SKS</label>
    <input type="text" class="form-control" name="sks" id="emailHelp" value="{{ old('sks') }}">
    @error('sks')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
