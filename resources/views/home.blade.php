@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are normal user.
                </div>
            </div>

        </div> -->
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <a class="btn btn-primary" href="#" role="button">Data Diri</a><br><br>
        <a class="btn btn-primary" href="http://127.0.0.1:8000/jadwal" role="button">Set Jadwal</a><br><br>
        <a class="btn btn-primary" href="#" role="button">isi Data Kagiatan</a><br><br>
        <a class="btn btn-primary" href="http://127.0.0.1:8000/pembuktian" role="button">Laporan kegiatan</a><br>
  </div>
</div>
    </div>
</div>

@endsection