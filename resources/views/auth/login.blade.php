@extends('layouts.skeleton')

@section('pageTitle', 'PingPing - Login')
@section('bodyClasses', 'bg-primary-lightest text-base text-grey-darkest font-normal relative')

@section('body')
    <div class="h-2 bg-primary"></div>
    <div class="container p-8">
        <div class="mx-auto max-w-sm">
            <div class="py-10 text-center">
                <a href="{{ route('homepage') }}">
                    @include('logo', ['style' => 'max-width: 12rem;'])
                </a>
            </div>

            <div class="bg-white rounded shadow">
                <div class="border-b border-grey-lighter py-8 font-bold text-black text-center text-xl tracking-widest uppercase">
                    Welcome back!
                </div>

                <form action="/login" method="post" class="bg-grey-lightest px-10 py-10">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <input class="rounded border border-grey-lighter {{ $errors->first('email') ? 'border-danger' : '' }} w-full p-3" name="email" type="text" placeholder="E-Mail">
                        @if ($errors->first('email'))
                            <p class="text-danger text-sm mt-1">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <input class="rounded border border-grey-lighter {{ $errors->first('password') ? 'border-danger' : '' }} w-full p-3" name="password" type="password" placeholder="**************">
                        @if ($errors->first('password'))
                            <p class="text-danger text-sm mt-1">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="flex">
                        <button type="submit" class="rounded bg-primary hover:bg-primary-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
                            Login
                        </button>
                    </div>
                </form>

                <div class="border-t border-grey-lighter px-10 py-6">
                    <div class="flex justify-between">
                        <a href="#" class="font-bold text-primary hover:text-primary-dark no-underline">Don't have an account?</a>
                        <a href="#" class="text-grey-darkest hover:text-black no-underline">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
