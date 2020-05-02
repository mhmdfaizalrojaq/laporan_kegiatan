




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<form action="{{route('storejadwal')}}" method="post">
	@csrf
  <div class="pull-left">
     <h2>Tambahkan Jadwal Anda</h2>
 
  
<div class="container">
<div class="mt-5">
	<div class="card">
  <div class="card-body">
    <form>
  <div class="form-group">
    <label for="kode_jadwal">Kode Jadwal</label>
    <input type="text" class="form-control" kode_jadwal="" name="kode_jadwal">
  </div>
  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" kode_jadwal="" name="tanggal">
  </div>
  <div class="form-group">
    <label for="jam_mulai">Jam Mulai</label>
    <input type="time" class="form-control" kode_jadwal="" name="jam_mulai">
  </div>
  <div class="form-group">
    <label for="jam_berakhir">Jam Berakhir</label>
    <input type="time" class="form-control" kode_jadwal="" name="jam_berakhir">
  </div>
  <div class="form-group">
    <label for="aktivitas">Aktivitas</label>
    <input type="text" class="form-control" kode_jadwal="" name="aktivitas">
  </div>
  <div class="form-group">
    <label for="kode_mapel">Kode Mapel</label>
    <input type="text" class="form-control" kode_jadwal="" name="kode_mapel">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="back" href="http://127.0.0.1:8000/ruang" class="btn btn-primary">Back</a>
</form>

  </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </form>