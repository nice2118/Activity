<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geme</title>
</head>

<body>
    <a href="{{ route('Activities.create') }}">aaaaa</a>
    <form action="{{ route('Activities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>AAAAAAA</strong>
                    <input type="text" name="A" value="2">
                    <input type="text" name="B" value="1">
                    <input type="text" name="name">
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>AAAAAAA2</strong>
                    <input type="text" name="name2">
                    @error('name2')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit">dd{{ Session::get('AAAA') }}</button>
        </div>
    </form>
    @if ($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif
    <p>cccccccc</p>

    @foreach ($Activities as $Activity)
        <p>{{ $Activity->id }}</p>
        <p>{{ $Activity->Date }}</p>
        <p>{{ $Activity->Title }}</p>
        <p>{{ $Activity->Description }}</p>
        <p>{{ $Activity->Note }}</p>
        <p>{{ $Activity->Image }}</p>
        <form action="{{ route('Activities.destroy', $Activity->id) }}" method="post">
            <a href="{{ route('Activities.edit', $Activity->id) }}">แก้ไข</a>
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    @endforeach

    {!! $Activities->links('pagination::bootstrap-5') !!}
</body>

</html>
