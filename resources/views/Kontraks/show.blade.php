@extends('layouts.app')

@section('title','ABSENSI MAHASISWA')

@section('content')
<div class="card">
<div class="cardbody">
<h3>Mahasiswa :{{ $kontraks['mahasiswa_id'] }} </h3>
<h3>Semester :{{ $kontraks['semester_id'] }} </h3>
 </div>
</div>
@endsection
