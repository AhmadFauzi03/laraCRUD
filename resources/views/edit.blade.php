@include('header')
<div class="container">
    <h1>Edit Buku</h1>
    <div class="card uper">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('buku.update', $buku->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                <label for="Judul">Judul</label>
                <input type="text" class="form-control" name="Judul" value={{ $buku->Judul }} />
                </div>
                <div class="form-group">
                <label for="Penerbit">Penerbit</label>
                <input type="text" class="form-control" name="Penerbit" value={{ $buku->Penerbit }} />
                </div>
                <div class="form-group">
                <label for="Tahun_Terbit">Tahun Terbit</label>
                <input type="text" class="form-control" name="Tahun_Terbit" value={{ $buku->Tahun_Terbit }} />
                </div>
                <div class="form-group">
                <label for="Pengarang">Pengarang</label>
                <input type="text" class="form-control" name="Pengarang" value={{ $buku->Pengarang }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@include('footer')
