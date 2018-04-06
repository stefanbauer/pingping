@extends('layouts.skeleton')

@section('bodyClasses', 'bg-primary-lightest text-base text-grey-darkest font-normal relative')

@section('body')
    <div class="min-h-screen flex flex-col">
        <div class="h-2 bg-primary"></div>

        <main class="flex-1 ">
            @yield('content')
        </main>

        @include('layouts.marketing.partials.footer')
    </div>
@stop
