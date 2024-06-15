<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật brands: {{ $brand->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h1>Cập nhật brands: {{ $brand->name }}</h1>
        
        <form action="{{ route('brands.update', $brand) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{ $brand->name }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Image</label>
              <input type="file" class="form-control" name="image" id="image">
              <img width="150px" src="{{ asset($brand->image) }}" alt="">

            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-danger" href="{{ route('brands.index') }}">Quay về trang chủ</a>

          </form>
    </div>

</body>
</html>