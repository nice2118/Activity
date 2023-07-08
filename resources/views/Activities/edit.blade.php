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
    <form action="{{ route('Activities.update', $Activity->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>AAAAAAA</strong>
                    <input type="text" name="A" value="{{ $Activity->Category_id }}">
                    <input type="text" name="B" value="{{ $Activity->User_id }}">
                    <input type="text" name="name" value="{{ $Activity->Title }}">
                    @error('name')
                        <p>{{ $message }}ggggg</p>
                    @enderror
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <strong>AAAAAAA2</strong>
                    <input type="text" name="name2" value="{{ $Activity->Description }}">
                    @error('name2')
                        <p>{{ $message }}ddd</p>
                    @enderror
                </div>
            </div>
            <button type="submit">dd</button>
        </div>
    </form>
</body>

</html>
