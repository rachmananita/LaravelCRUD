@include('header')
<div class="container">
<div class="row">'
  <div class="col-md-6">

    <form method="POST" action="{{ url('/edit', array($buku->id))}}">
      {{csrf_field()}}
  <fieldset>
    <legend>Buku Baru</legend>
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
      {{$error}}
    </div>
    @endforeach
    @endif
    <div class="form-group">
      <label for="exampleInputEmail1">Judul Buku</label>
      <input type="text" value="<?php echo $buku->judul; ?>" class="form-control" name="judul" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Penerbit</label>
      <input type="text" value="<?php echo $buku->penerbit; ?>" class="form-control" name="penerbit" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tahun Terbit</label>
      <input type="text" value="<?php echo $buku->tahun_terbit; ?>" class="form-control" name="tahun_terbit" placeholder="">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Pengarang</label>
      <input type="text" value="<?php echo $buku->pengarang; ?>" class="form-control" name="pengarang" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary" value="">Update</button>
    <a href="{{ url('/') }}" class="btn btn-secondary">Back</a>
  </fieldset>
</form>

  </div>

</div>
</div>
@include('footer')
