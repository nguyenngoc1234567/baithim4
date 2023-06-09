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

    <form action="{{ route('books.update', [$books->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">name</label>
            <input type="text" name="name" value="{{ $books->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">isbn</label>
            <input type="text" name="isbn" value="{{ $books->isbn }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">tacgia</label>
            {{-- <input type="text" name="tacgia" value="{{ $books->tacgia }}" class="form-control"> --}}
            {{-- <select name="tacgia" id="">
                <option name="tacgia">Hồ Chí Minh </option>
            <option name="tacgia">Dương Thụy</option>
            <option name="tacgia">Ngọc Nguyễn </option>
            </select> --}}
            <select name="tacgia" class="form-control">
                <option value="{{ $books->tacgia }}">
                    {{ $books->tacgia }}</option>
                <option value="Hồ Chí Minh ">Hồ Chí Minh </option>
                <option name="Dương Thụy">Dương Thụy</option>
            <option name="Ngọc Nguyễn">Ngọc Nguyễn </option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">theloai</label>
            <input type="text" name="theloai" value="{{ $books->theloai }}" class="form-control">
        </div>


        <div class="mb-3">
            <label class="form-label">sotrang</label>
            <input type="text" name="sotrang" value="{{ $books->sotrang }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">namsanxuat</label>
            <input type="text" name="namsanxuat" value="{{ $books->namsanxuat }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('books.index') }}" class="btn btn-success">Back</a>
    </form>
</div>

</body>

</html>
