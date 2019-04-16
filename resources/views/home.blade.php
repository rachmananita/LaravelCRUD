@include('header')

@if(session('info'))
<div class="alert alert-success">
{{session('info')}}
</div>
@endif

  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Judul Buku</th>
        <th scope="col">Tanggal Dibuat</th>
        <th scope="col">Tanggal Diedit</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    @if(count($buku) > 0)
      @foreach($buku->all() as $buku)

    <tbody>
      <tr class="table-default">
        <td>{{ $buku->id }}</td>
        <td>{{ $buku->judul }}</td>
        <td>{{ $buku->created_at }}</td>
        <td>{{ $buku->updated_at }}</td>
        <td>
          <a href="{{ url("/view/{$buku->id}") }}" class="btn btn-primary">View</a>
          <a href="{{ url("/update/{$buku->id}") }}" class="btn btn-warning">Update</a>
          <a href="{{ url("/delete/{$buku->id}") }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    @endif
    </tbody>
  </table>

@include('footer')
