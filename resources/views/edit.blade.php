@extends ('layout')
@section ('content')
<div cla ss="card" style="marg2@ipxn;:"> 
<div c lass="card-header">Edit Buku</div> 
<div class="card-body">

<form action="{{ url('buku/' .$buku->id) }}" method="post”> 
{!! csrf_field()!!}
@method("PATCH")
<input type="hidden" name="id" id="id" value="{{$buku->id}}" id="id" />
<label>Judul Buku</label></br>
<input type="text" name="judul_buku" id="judul_buku" value="{{$buku->judul_buku}}" class="form-control"></br>
<label>Tanggal Terbit</label></br>
<input type="date" name="tanggal_terbit" id="tanggal_terbit" value="{{$buku->tanggal_buku}}" class="form-control"></br> 
<label>Nama Penulis</label></br>
<input type="text" name="nama_penulis" id="nama_penulis" value="{{$buku->nama_penuLis}}" class="form-control"></br> 
<label>Jumlah Halaman</label></br>
<input type="number" name="jumlah_halaman" id="jumlah_halaman" value="{{$buku->jumLah_haLaman}}" class="form-control"></br> 
<label>Harga Buku</label></br>
<input type="number" name="harga_buku" id="harga_buku" value="{{$buku->harga_buku}}" class="form-control></br>

<input type="submit" value="Update” class="btn btn-success"> </fo rm> <br>
</div>
@stop
