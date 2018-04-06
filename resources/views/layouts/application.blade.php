@extends('layouts.skeleton')

@section('pageTitle', 'PingPing')
@section('bodyClasses', 'bg-primary-lightest text-base text-grey-darkest font-normal relative')

@section('body')
    <div class="min-h-screen flex flex-col">
        @include('layouts.application.partials.navigation')

        <main class="flex-1">
            <div class="w-full max-w-screen mx-auto px-4 flex py-10">
                @hasSection('sidebar')
                <nav class="hidden lg:block lg:w-1/6 mr-6">
                    @yield('sidebar')
                </nav>
                @endif

                <div class="flex-1">
                    @yield('content')
                </div>
            </div>
        </main>

        @include('layouts.application.partials.footer')
    </div>
@stop
