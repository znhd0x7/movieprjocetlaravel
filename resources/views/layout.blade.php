<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            text-align: center; 
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 3rem;
            color: #333;
        }
    </style>
</head>
<body>

    <h1>BeeFlix</h1>
    <div class="container d-flex flex-column justify-content-center align-items-center mt-3">
        <div class="row" style="width: 20rem; gap: 1rem; margin:8px;">
        <img src="{{ asset('storage/image/LOL.png') }}" class="card-img-top" alt="Cinque Terre">
            <a href="{{ route('create') }}" class="btn btn-dark" type="button" >Add New Movies</a>
        </div>

        <div class="row" style="gap: 1rem; margin: 1rem">
        @foreach ($movie as $movies)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $movies->photo) }}" class="card-img-top" style="min-height: 50px" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$movies->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$movies->genre->name}}</h6>
                        <p class="card-text">{{$movies->description}}</p>
                        <h6 class="card-text">{{$movies->publish_date}}</h6>
                        <form action="/deletemovie/{{$movies->id}}" method="POST" onsubmit="return confirm('Apakah Anda yakin mau menghapus movie ini?')">
                            @csrf
                            <button class="btn btn-danger">Delete Film</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $movie->links('pagination::bootstrap-4') }}
    </div>
</body>
</html>