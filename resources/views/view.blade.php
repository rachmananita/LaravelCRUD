@include('header')

<div class="container">
  <div class="row">
      <legend>View Data</legend>
      <table class="table table-hover">
      <tr>
        <td>ID</td>
        <td>{{ $buku->id }}</td>
      </tr>
      <tr>
        <td>Judul Buku</td>
        <td>{{ $buku->judul }}</td>
      </tr>
      <tr>
        <td>Penerbit Buku</td>
        <td>{{ $buku->penerbit }}</td>
      </tr>
      <tr>
        <td>Tahun Terbit Buku</td>
        <td>{{ $buku->tahun_terbit }}</td>
      </tr>
      <tr>
        <td>Pengarang</td>
        <td>{{ $buku->pengarang }}</td>
      </tr>
  </table>
<a href="{{ url('/') }}" class="btn btn-primary">Back</a>

    
  </div>
</div>
  
@include('footer')
