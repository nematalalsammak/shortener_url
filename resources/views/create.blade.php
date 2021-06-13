<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group mb-3">
    <label for="">Url:</label>
    <input type="text" name="url_text" value="" class="form-control">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">save</button>
</div>
</form>

</div> 
</body>
</html>