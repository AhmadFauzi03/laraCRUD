@include('header')
<div class="container">
  <table class="table table-hover">
  <thead>
    <tr class="text-center">
      <th scope="col">ID</th>
      <th scope="col">JUDUL</th>
      <th scope="col">PENERBIT</th>
      <th scope="col">TAHUN TERBIT</th>
      <th scope="col">PENGARANG</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    @if(count($buku) > 0)
      @foreach($buku->all() as $buku)

      <tr class="table-light text-center">
        <td>{{ $buku->id }}</td>
        <td>{{ $buku->judul }}</td>
        <td>{{ $buku->penerbit }}</td>
        <td>{{ $buku->tahun_terbit }}</td>
        <td>{{ $buku->pengarang }}</td>
        <td>
        <div class="d-flex justify-content-center">
        <a href="{{ url("/view/{$buku->id}") }}" class="btn btn-outline-warning">view</a>
        <a href="{{ route('buku.edit',$buku->id)}}" class="btn btn-outline-info">UPDATE</a>
         <form action="{{ route('buku.destroy', $buku->id)}}" method="post">
          @csrf
          @method('DELETE')
         <button class="btn btn-outline-danger" type="submit">Delete</button>
         </form>
          </div>
          </td>
          </tr>
         @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@include('footer')