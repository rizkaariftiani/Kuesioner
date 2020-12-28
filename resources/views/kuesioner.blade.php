@extends('master')
@section('title',' Kuisioner ')
@section('konten')
<!-- Features Section -->
<div class="container">

  <div class="row">

    <font><h1 align="center">Kuesioner Mata Kuliah</h1></font>
    <hr></hr>
    <br/>
    <form action="/createkuesioner" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group row">
        <label for="nim_mhs" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" required="required" name="nim_mhs">
        </div>
      </div>

      <div class="form-group row">
        <label for="nama_mhs" class="col-sm-2 col-form-label">NAMA</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" required="required" name="nama_mhs">
        </div>
      </div>

      <div class="form-group row">
        <label for="kelas" class="col-sm-2 col-form-label">KELAS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" required="required" name="kelas">
        </div>
      </div>

      <div class="form-group row">
        <label for="no_abs" class="col-sm-2 col-form-label">NO ABSEN</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" required="required" name="no_abs">
        </div>
      </div>

      <br>

      <div class="form-group">
        <hr></hr>
        <label for="jwb1">1. Pada Saat Mengajar Dosen Memberi Kuliah Dengan Jelas dan Mudah Dimengerti</label>
        <hr></hr>
        <label>Skala Penilaian</label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="jwb1" value="1">Sangat Tidak Setuju/Tidak Pernah     
        </label>
      </div>

      <div class="form-check">
       <label class="form-check-label">
        <input class="form-check-input" type="radio" name="jwb1" value="2">Tidak Setuju/Jarang
      </label>
    </div>

    <div class="form-check">
     <label class="form-check-label">
       <input class="form-check-input" type="radio" name="jwb1" value="3">Ragu-Ragu/Kadang-Kadang
     </label>
   </div>

   <div class="form-check">
     <label class="form-check-label">
       <input class="form-check-input" type="radio" name="jwb1" value="4">Setuju/Sering
     </label>
   </div>

   <div class="form-check">
     <label class="form-check-label">
       <input class="form-check-input" type="radio" name="jwb1" value="5">Sangat Setuju/Selalu
     </label>
   </div>

   @error('jwb1')

   <span class="text-danger">
     <strong>{{ $message }}</strong>
   </span>
   @enderror
   <br>

   <div class="form-group">
    <hr></hr>
    <label for="jwb2">2. Buku Ajar/ Jobsheet/ Model Praktikum Yang Diberikan Sangat Membantu Dalam Memahami Perkuliahan</label>
    <hr></hr>
    <label>Skala Penilaian</label>
  </div>
  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="radio" name="jwb2" value="1">Sangat Tidak Setuju/Tidak Pernah     
    </label>
  </div>

  <div class="form-check">
   <label class="form-check-label">
    <input class="form-check-input" type="radio" name="jwb2" value="2">Tidak Setuju/Jarang
  </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb2" value="3">Ragu-Ragu/Kadang-Kadang
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb2" value="4">Setuju/Sering
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb2" value="5">Sangat Setuju/Selalu
 </label>
</div>

@error('jwb2')

<span class="text-danger">
 <strong>{{ $message }}</strong>
</span>
@enderror
<br>

<div class="form-group">
  <hr></hr>
  <label for="jwb3">3. Dosen Dapat Membangkitkan Minat Mahasiswa Pada Pokok Materi Mata Kuliah/Praktikum</label>
  <hr></hr>
  <label>Skala Penilaian</label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="jwb3" value="1">Sangat Tidak Setuju/Tidak Pernah     
  </label>
</div>

<div class="form-check">
 <label class="form-check-label">
  <input class="form-check-input" type="radio" name="jwb3" value="2">Tidak Setuju/Jarang
</label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb3" value="3">Ragu-Ragu/Kadang-Kadang
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb3" value="4">Setuju/Sering
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb3" value="5">Sangat Setuju/Selalu
 </label>
</div>

@error('jwb3')

<span class="text-danger">
  <strong>{{ $message }}</strong>
</span>

@enderror
<br>

<div class="form-group">
  <hr></hr>
  <label for="jwb4">4. Dosen Memberikan Buku Ajar / Jobsheet / Modul Praktikum</label>
  <hr></hr>
  <label>Skala Penilaian</label>
</div>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="jwb4" value="1">Sangat Tidak Setuju/Tidak Pernah     
  </label>
</div>

<div class="form-check">
 <label class="form-check-label">
  <input class="form-check-input" type="radio" name="jwb4" value="2">Tidak Setuju/Jarang
</label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb4" value="3">Ragu-Ragu/Kadang-Kadang
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb4" value="4">Setuju/Sering
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb4" value="5">Sangat Setuju/Selalu
 </label>
</div>

@error('jwb4')

<span class="text-danger">
 <strong>{{ $message }}</strong>
</span>

@enderror
<br>

<div class="form-group">
  <hr></hr>
  <label for="jwb5">5. Dosen Memberikan Tanggapan Yang Memuaskan Terhadap Pertanyaan Yang Diajukan Mahasiswa</label>
  <label>Skala Penilaian</label>
</div>
<hr></hr>
<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="radio" name="jwb5" value="1">Sangat Tidak Setuju/Tidak Pernah     
  </label>
</div>
</div>

<div class="form-check">
 <label class="form-check-label">
  <input class="form-check-input" type="radio" name="jwb5" value="2">Tidak Setuju/Jarang
</label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb5" value="3">Ragu-Ragu/Kadang-Kadang
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb5" value="4">Setuju/Sering
 </label>
</div>

<div class="form-check">
 <label class="form-check-label">
   <input class="form-check-input" type="radio" name="jwb5" value="5">Sangat Setuju/Selalu
 </label>
</div>

@error('jwb3')

<span class="text-danger">
 <strong>{{ $message }}</strong>
</span>

@enderror
<br>

<button type="submit" name="add" class="btn btn-primary float-right">Submit Data</button> 
</form>
<br><br>
</div>
</div>
@endsection