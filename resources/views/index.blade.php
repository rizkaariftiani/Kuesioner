@extends('master')
@section('konten')
<!-- Features Section -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Page 1</div>
                <div class="card-body">
                <form method="POST" action="#" enctype="multipart/form-data">
                @csrf
                 <div class="form-group">
                    <div class="col-md-12">
                       <label>Pertanyaan 1</label>
                       <div class="form-check">
                       <label class="form-check-label"></div>
                       <input type="radio" name="" id="">
                       </label>
                        </div>
                      </div>
                   </div>
                    
                  <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                  {{__('Simpan')}}
                  </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection