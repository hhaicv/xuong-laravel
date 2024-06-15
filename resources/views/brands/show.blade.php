<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Hien thi brands: {{ $brand->name }}</title>
</head>
<body>
    <div class="container">
        <h1>Hien thi danh muc: {{ $brand->name }}</h1>
        <table class="table">
            <tbody>
                @foreach ($brand->toArray() as $colum => $value)
                <tr>
                    <td>{{ ucfirst($colum) }}</td>
                    <td>
                        @if ($colum == 'image')
                        <img width="150px" src="{{ asset($value) }}" alt="">
                        @else
                            {{ $value }}
                        @endif
                    </td>
                    
                </tr>
                
                @endforeach
                
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('brands.index') }}">Quay về trang chủ</a>
       
    </div>
</body>
</html>