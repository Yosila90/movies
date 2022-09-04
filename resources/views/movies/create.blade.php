@extends('layouts.app')

@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
              <div class="p-5">
                  <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Tambah Movie</h1>
                  </div>
                  <form class="user" action="{{ route('store') }}" method="POST">
                    @csrf
                      <div class="form-group">
                              <input type="text" name="name" class="form-control form-control-user" id="name"
                                  placeholder="Name">
                          </div>
                          <div class="form-group">
                            <input type="number" name="year" class="form-control form-control-user" id="year"
                                placeholder="Tahun">
                        </div>
                          <div class="form-group">
                            <select class="form-control" name="movie_genre_id" id="movieGenre">
                                <option selected value="">Select Genre</option>
                                @foreach ($movieGenres as $no => $movieGenre)
                                <option value="{{$movieGenre->id}}">{{$movieGenre->name}}</option>                                                                 
                                @endforeach
        
                            </select>

                          </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block">
                          Uploud
                      </button>
                      <hr>
                      
                  </form>
                  <hr>
                  <div class="text-center">
                      <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                      <a class="small" href="login.html">Already have an account? Login!</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection