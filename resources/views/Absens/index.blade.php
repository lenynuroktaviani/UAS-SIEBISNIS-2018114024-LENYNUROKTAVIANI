@extends('layouts.app')

@section('title','ABSENSI MAHASISWA')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-plus fa-sm text-white-50"></i>
              Tambah Absen
            </button> 
          </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">WAKTU ABSENSI</th>
      <th scope="col">MAHASISWA</th>
      <th scope="col">MATAKULIAH</th>
      <th scope="col">KETERANGAN</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach ($absens as $absen)
  <tr>
    <td>{{$absen->waktu_absen}}</td>
    <td>{{$absen->mahasiswa_id}}</td>
    <td>{{$absen->matakuliah_id}}</td>
    <td>{{$absen->keterangan}}</td>
    
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
      <form action="/absens" method="POST">

          @csrf

          <div class="modal-body">
          <div class="row mb-3">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Waktu Absen</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="waktu_absen" name="waktu_absen">
            </div>
          </div>

      <div class="modal-body">
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Mahasiswa</label>
            <div class="col-sm-9">
              <select class="form-control" id="mahasiswa_id"
                    name="mahasiswa_id">
          <option value="Leny Nur Oktaviani">Leny Nur Oktaviani</option>
          <option value="Dinda Afni">Dinda Afni</option>
          <option value="Lala Nurjanah">Lala Nurjanah</option>
          <option value="Cindy Cintya">Cindy Cintya</option>
          <option value="Diana Kusuma Dewi">Diana Kusuma Dewi</option>
          <option value="Dita Destriani">Dita Destriani</option>
          <option value="Adriel Alfa">Adriel Alfa</option>
          <option value="Nabila Narjis">Nabila Narjis</option>
          <option value="Dita Anggraeni">Dita Anggraeni</option>
          <option value="Erika Anjani">Erika Anjani</option>
          <option value="Fitria">Fitria</option>
          <option value="Ashri Azizah">Ashri Azizah</option>
          <option value="Selvi Feliyanti">Selvi Feliyanti</option>
          <option value="Laras Maudy">Laras Maudy</option>
          <option value="Rulli Herlina">Rulli Herlina</option>
          <option value="Hendra Wijaya">Hendra Wijaya</option>
          <option value="Putri Endang">Putri Endang</option>
          </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">Matakuliah</label>
            <div class="col-sm-9">
            <select class="form-control" id="matakuliah_id"
                    name="matakuliah_id">
          <option value="Pemrograman Internet Lanjut">Pemrograman Internet Lanjut</option>
          <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
          <option value="Egoverment">Egoverment</option>
          <option value="Student Exchange (Fotografi)">Student Exchange (Fotografi)</option>
          <option value="Manajemen Sistem Informasi">Manajemen Sistem Informasi</option>
          <option value="Student Exchange (Pemrograman Android)">Student Exchange (Pemrograman Android)</option>
          <option value="Audit Sistem Informasi">Audit Sistem Informasi</option>
          <option value="Jaringan Komputer">Jaringan Komputer</option>
          </select>
            </div>
          </div>

          <div class="row mb-3">
            <label for="inputPassword3" class="col-sm-3 col-form-label">KETERANGAN</label>
            <div class="col-sm-9">
            <select class="form-control" id="keterangan"
                    name="keterangan">
          <option value="HADIR">HADIR</option>
          <option value="TIDAK HADIR">TIDAK HADIR</option>
          </select>
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


<div>
{{ $absens -> links() }}

    </div>
@endsection


