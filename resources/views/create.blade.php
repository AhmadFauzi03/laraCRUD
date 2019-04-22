@include('header')
<div class="container">
    <h1>Tambah Buku</h1>
    <form action="{{ route('buku.store') }}" method="post">
    {{ csrf_field() }}
        <span>Judul Buku</span><br>
        <input type="text" name="Judul" required="required"> <br/>
        <br>
        <span>Penerbit</span><br>
        <input type="text" name="Penerbit" required="required"> <br/>
        <br>
        <span>Tahun Terbit</span><br>
        <input type="text" name="Tahun_Terbit" required="required"> <br/>
        <br>
        <span>Pengarang</span> <br>
        <input type="text" name="Pengarang" required="required"> <br/><br/>
        <input type="submit" class="btn btn-primary" value="Simpan Data">
        <a href="/" class="btn btn-outline-danger"> Kembali</a><br/>
    </form>
</div>
@include('footer')