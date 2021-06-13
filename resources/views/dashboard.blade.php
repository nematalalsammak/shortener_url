<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
    
</x-app-layout>
