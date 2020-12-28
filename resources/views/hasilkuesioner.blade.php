@extends ('master')
@section('title',' Hasil Kuisioner ')
@section('konten')
        <!-- Blog Post -->
        <div class="container">
        <br>
        <h3>HASIL KUESIONER MATA KULIAH</h3>
        <br>
        <table class="table table-bordered table-striped"> 
     <thead> 
         <tr> 
              <th>No</th>
              <th>Nim</th>  
              <th>Nama</th> 
              <th>Kelas</th>
              <th>No_Abs</th>
              <th>Jawaban Q1</th>
              <th>Jawaban Q2</th>
              <th>Jawaban Q3</th>
              <th>Jawaban Q4</th>
              <th>Jawaban Q5</th>
         </tr> 
     </thead> 
     <tbody> 
     @php $id = 1; @endphp
         @foreach($kuesioner as $a) 
         <tr> 
              <td>{{$id++}}</td> 
              <td>{{$a->nim_mhs}}</td>
              <td>{{$a->nama_mhs}}</td>
              <td>{{$a->kelas}}</td>
              <td>{{$a->no_abs}}</td> 
              <td>{{$a->jwb1}}</td> 
              <td>{{$a->jwb2}}</td> 
              <td>{{$a->jwb3}}</td> 
              <td>{{$a->jwb4}}</td> 
              <td>{{$a->jwb5}}</td> 
         @endforeach 
     </tbody> 
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>