@extends('layouts.application')

@section('content')
    <div class="bg-white rounded shadow border-t-4 border-primary">
        <div class="flex justify-between items-center px-8 py-4 border-b">
            <div class="text-lg text-black uppercase font-bold tracking-widest">
                Services
            </div>
        </div>

        <div class="px-8 py-8 bg-grey-lightest rounded-b">
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
        </div>
    </div>
@stop
