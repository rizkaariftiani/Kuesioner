@extends('master')
@section('konten')
<!-- Features Section -->
              <label>Kuesioner Mata Kuliah</label>
                    <div class="form-group">
                        <label>Pertanyaan 1</label>
                        @foreach($keterangan as $item)
                            <div class="form-check">
                                <label class="form-check-label"></div>
                                    <input type="radio" name="Jawaban Quesioner 1" 
                                    class="form-check-input"value="">{{$item}}
                                    </label>
                                    </div>
                                  @endforeach
                                @error('Jawaban Quesioner 1')
                             <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
             </div>
            <div class="form-group">
        <label>Pertanyaan 2</label>
              <div class="form-check">
                 <label class="form-check-label"></div>
                 <input type="radio" name="Jawaban Quesioner 2" class="form-check-input"value="1">Sangat Tidak Setuju/Tidak Pernah
                      </label>
                    </div>
                  @error('Jawaban Quesioner 1')
                <span class="text-danger">
                    <strong>{{ $message }}</strong>
                       </span>
                        @enderror
                      </div>
                          </div>
                          <button type="submit" name="next" class="btn btn-primary float-right">Next</button> 
                          </form> 
                            </button>
                          </div>
                        </div>
                     </form> 
                   </div>
                </div>
            </div>
        </div>
    </div>
    <br></br><br><br></br>
@endsection