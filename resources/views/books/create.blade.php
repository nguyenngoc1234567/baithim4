<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<div class="container">

    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">name</label>
            <input type="text" name="name" class="form-control">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label class="form-label">isbn</label>
            <input type="text" name="isbn" class="form-control">
        </div>
        @error('isbn')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label class="form-label">tacgia</label>
            <input type="text" name="tacgia"  class="form-control">
        </div>
        @error('tacgia')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="mb-3">
        <select name="author" id="">
            <option name="author">Hồ Chí Minh </option>
            <option name="author">Dương Thụy</option>
            <option name="author">Ngọc Nguyễn </option>
        </select>
    </div>
        @error('tacgia')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror



        <div class="mb-3">
            <label class="form-label">theloai</label>
            <input type="text" name="theloai" class="form-control">
        </div>
        @error('theloai')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label class="form-label">sotrang</label>
            <input type="text" name="sotrang" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">namsanxuat</label>
            <input type="text" name="namsanxuat" class="form-control">
        </div>
        @error('namsanxuat')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('books.index') }}" class="btn btn-success">Back</a>
    </form>
</div>

</body>

</html>
