<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang danh sach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <h1>Danh muc</h1>
        <a class="nav-link" href="{{ route('categories.create') }}">
            Them moi
        </a>
        @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a class="nav-link" href="{{ route('categories.show', $item) }}">
                            Show
                        </a>
                        <a class="nav-link" href="{{ route('categories.edit', $item) }}">
                            Edit
                        </a>
                        <form action="{{ route('categories.destroy',$item) }}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" onclick="return confirm('Ban co xoa khong???')">Delete</button>

                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{ $data->links() }}
    </div>

</body>

</html>