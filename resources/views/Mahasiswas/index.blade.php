@extends('layouts.app')

@section('title','ABSENSI MAHASISWA')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus fa-sm text-white-50"></i>
              TAMBAH DATA MAHASISWA
            </button> 
          </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">NAMA MAHASISWA</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">NO TELEPON</th>
      <th scope="col">EMAIL</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mahasiswas as $mahasiswa)
  <tr>
    <td>{{$mahasiswa->nama_mahasiswa}}</td>
    <td>{{$mahasiswa->alamat}}</td>
    <td>{{$mahasiswa->no_tlp}}</td>
    <td>{{$mahasiswa->email}}</td>
    <td><a href="/mahasiswas/{{$mahasiswa->id}}/edit"><button type="button" class="btn btn-outline-primary">Edit</a></button></td>
    <form action="/mahasiswas/{{ $mahasiswa->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-danger">Delete</button></td>
    </form>
    @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/mahasiswas" method="POST">

          @csrf

      <div class="modal-body">
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">alamat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
          </div>
          <div class="modal-body">
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">No Telepon</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="no_tlp" name="no_tlp">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">email</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="email" name="email">
            </div>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Input</button>
      </div>
    </form>
    </div>
  </div>
</div>

    {{ $mahasiswas -> links() }}
    </div>
@endsection

