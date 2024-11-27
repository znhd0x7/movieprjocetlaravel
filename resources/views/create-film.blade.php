<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


</head>
<body>
    <header>
         <h1>BeeFlix</h1>
    </header>

    <main>
        <form action="{{route('store')}}" method="POST" class="row g-3 needs-validation"  style="margin: 80px" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-control" id="genre" name="genre" aria-label="Default select example">
            <option value="" disabled selected>Pilih Genre</option>
            @foreach ($genre as $genres)
            <option value="{{ $genres->id }}">{{ $genres->name }}</option>
            @endforeach
            </select>
            </div>
        
            

            <div class="mb-2 form-group">
                <label class="form-label">Image</label>
                <input type="file" name="photo" class="form-control">
                    @error('photo')
                        <span class="alert alert-danger">{{ $message }}</span>
                    @enderror
            </div>

            <div class="mb-3 form-group">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title">
                @error('title')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>      

            <div class="mb-3 form-group">
                <label for="description" class="form-label">Description</label>
                <input type="text" name="description" class="form-control input-lg" id="description">
                @error('description')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror

            </div>

            <div class="mb-3 form-group">
                <label for="publish_date" class="form-label">Publish Date</label>
                <input type="date" name="publish_date" class="form-control" id="publish_date">
                @error('publish_date')
                    <span class="alert alert-danger">{{ $message }}</span>
                @enderror
            </div>
            <div>
            <button type="submit" class="btn btn-dark ">Submit</button>
            </div>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
        </form>
    </main>

</body>
</html>
