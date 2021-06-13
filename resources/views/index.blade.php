<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Shorten Url</title>
</head>

<body>
    <div class="container">
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Url_Text</th>
                        <th>Code</th>
                        <th>User id</th>
                        <th>Number of click</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($urls as $url)
                    <tr>
                        <td>{{ $url->id }} </td>
                        <td>{{ $url->url_text }}</td>
                        <td><a href="{{ route('shorten.link', $url->code )}}" target="_blank">{{ $url->code }}</a></td>
                        <td>{{ $url->user_id }}</td>
                        <td>{{ $url->count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>