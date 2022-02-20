@extends ('Layout.main')

@section ('container')
<div class="tittle-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
  {{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeHolder="Nama" name="nama">
    <label for="inputname">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputemail" placeHolder="Email" name="email">
    <label for="inputemail" class="form-label">Email</label>
  </div>
  <div class="mb-3 form-check">
    <textarea class="form-control" placeHolder="Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection