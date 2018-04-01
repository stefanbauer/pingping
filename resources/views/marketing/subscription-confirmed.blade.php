@extends('layouts.marketing')

@section('content')
    @include('layouts.marketing.partials.navigation')

    <div class="w-full max-w-lg mx-auto pb-10">
        <div class="bg-white shadow p-10 text-center">
            <h1 class="text-black text-3xl font-bold mb-4 leading-none">Subscription confirmed</h1>
            <p class="text-grey-darker text-xl tracking-wide mb-6">
                Boom! You're officially confirmed and on the list now.
            </p>
            <a class="no-underline text-primary hover:text-primary" href="{{ route('homepage') }}">Back to the homepage</a>
        </div>
    </div>
@stop
