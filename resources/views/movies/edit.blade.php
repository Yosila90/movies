<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">      
            <h1>Form Edit</h1>
            <form action="{{ route("update", $movieGenres->id) }}" method="post">
        @csrf
        
        <div class="mb-3">
          <label for="movieGenres">Jenis Movie</label>
          <select class="custom-select d-block w-100 form-control" id="movieGenre" name="movie_genre_id">
            @foreach($movie as $movieGenre)
            <option value="{{$movieGenre->id}}" {{$movieGenre->id == $movieGenres->movie_genre_id ? "selected" : ""}}>{{$movieGenre->name}}</option>
            @endforeach
          </select>
            
         </div>

        <div class="mb-3">
          <label for="name" class="form-label">Nama Movie</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $movieGenres->name }}">
         </div>
         <div class="mb-3">
         <label for="year" class="form-label">Tahun</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $movieGenres->year }}">
        </div>
        
        <button class="btn btn-primary" type="submit">Ubah</button>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>