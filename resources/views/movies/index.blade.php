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
        <!-- <div class ="list-group"> -->
          <!-- <a href="/" class="list-group-movie list-group-movie-action active" aria-current="true">Daftar Movie</a> -->

        <!-- </div> -->
        <div class="col-8"> 
      <a href="{{ route("create") }}" class="btn btn-primary">Tambah Movie</a>    
        <h1>Daftar Movie</h1>
        <table class="table">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Tahun</th>
               
                
                
                
            </tr>
            @foreach($movieGenres as $no => $movie)
            <tr>
                <td>{{$no + 1}}</td>
                <td>{{$movie->name}}</td>
               
                <td>{{$movie->year}}</td>
                
               
                <td>
                  <a href="{{ route("edit", $movie->id) }}" class="btn btn-warning">Ubah</a>
                  <form action="{{ route("destroy", $movie->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Hapus</button>
                  </form>
                </td>
            </tr>
            @endforeach
        </table>
       
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>