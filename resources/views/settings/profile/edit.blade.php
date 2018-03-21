@extends('layouts.application')

@section('sidebar')
    @include ('settings.partials.sidebar')
@stop

@section('content')
    <div class="bg-white rounded shadow border-t-4 border-primary">
        <div class="flex justify-between items-center px-8 py-4 border-b">
            <div class="text-lg text-black uppercase font-bold tracking-widest">
                My Profile
            </div>
        </div>

        <div class="px-8 py-8 bg-grey-lightest rounded-b">
            ...
        </div>
    </div>
@stop
