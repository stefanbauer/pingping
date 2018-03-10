<h1>Services</h1>

<table>
    <tr>
        <td>Alias</td>
        <td>URL</td>
    </tr>
    @foreach ($services as $service)
        <tr>
            <td>{{ $service->alias }}</td>
            <td>{{ $service->url }}</td>
        </tr>
    @endforeach
</table>
