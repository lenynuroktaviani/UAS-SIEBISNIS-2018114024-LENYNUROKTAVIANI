@extends('layouts.app')

@section('title','ABSENSI MAHASISWA')

@section('content')
<div class="card">
<div class="cardbody">
<h3>Mahasiswa :{{ $jadwals['jadwal'] }} </h3>
<h3>Semester :{{ $jadwals['matakuliah_id'] }} </h3>
 </div>
</div>
@endsection
