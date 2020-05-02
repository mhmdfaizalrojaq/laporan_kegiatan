




<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
<form action="{{route('storepembuktian')}}" method="post">
	@csrf
  <div class="pull-left">
     <h2>Mari Laporan</h2>
 
  
<div class="container">
<div class="mt-5">
	<div class="card">
  <div class="card-body">
    <form>
    <div class="form-group">
    <label for="kode_laporan"> kode_laporan</label>
    <input type="text" class="form-control" kode_laporan="" name="kode_laporan">
  </div>
  <div class="form-group">
    <strong> Kode Jadwal:</strong>
    <select name="kode_jadwal" class="form-control">
      @foreach($jadwal as $data)
    <option value="{{ $data->aktivitas}}">{{$data->aktivitas}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="waktu_pelaporan">Waktu Pelaporan</label>
    <input type="time" class="form-control" waktu_pelaporan="" name="waktu_pelaporan">
  </div>

  <div class="form-group">
    <strong> Status:</strong>
    <select name="status" class="form-control">
      @foreach($status as $data)
    <option value="{{ $data->status}}">{{$data->status}}</option>
    @endforeach
    </select>
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