<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row mb-10">
            <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Enter Url:</label>
                    <input type="text" name="url_text" value="" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">save</button>
                </div>
            </form>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Url Link</th>
                        <th>Code</th>
                        <th>Number of Clicks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($urls as $url)
                    <tr>
                        <td>{{ $url->id }} </td>
                        <td>{{ $url->url_text }}</td>
                        <td><a href="{{ route('shorten.link', $url->code )}}" target="_blank">{{ $url->code }}</a></td>
                        <td>{{ $url->count }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>