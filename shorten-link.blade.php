<!DOCTYPE html>

<html>

<head>

    <title>url shortener using Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />

</head>

<body>



    <div class="container">

        <h1 class="mb-3">Enter to create url shortener </h1>



        <div class="card">

            <div class="card-header">

                <form method="POST" action="{{ route('shorten.link.post') }}">

                    @csrf

                    <div class="input-group mb-3">

                        <input type="text" name="url_text" class="form-control" placeholder="Enter URL" aria-label="Recipient's username" aria-describedby="basic-addon2">

                        <div class="input-group-append">

                            <button class="btn btn-info" type="submit">Create Shorten Link</button>

                        </div>

                    </div>

                </form>

            </div>

            <div class="card-body">

                @if (Session::has('success'))

                <div class="alert alert-success">

                    <p>{{ Session::get('success') }}</p>

                </div>

                @endif



                <table class="table table-bordered table-sm">

                    <thead>

                        <tr>

                            <th>User_Name</th>

                            <th>Short Link</th>

                            <th>url_link</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($urls as $row)

                        <tr>

                            <td>{{ $row->id }}</td>

                            <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>

                            <td>{{ $row->url_text }}</td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>