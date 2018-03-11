@extends('layouts.skeleton')

@section('pageTitle', 'PingPing - Login')
@section('bodyClasses', 'bg-grey-lighter text-base text-grey-darkest font-normal relative')

@section('body')
    <div class="h-2 bg-primary"></div>
    <div class="container mx-auto p-8">
        <div class="mx-auto max-w-sm">
            <div class="py-10 text-center">
                @include('logo', ['style' => 'max-width: 12rem;'])
            </div>

            <div class="bg-white rounded shadow">
                <div class="border-b py-8 font-bold text-black text-center text-xl tracking-widest uppercase">
                    Welcome back!
                </div>

                <form action="/login" method="post" class="bg-grey-lightest px-10 py-10">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <input class="border {{ $errors->first('email') ? 'border-red' : '' }} w-full p-3" name="email" type="text" placeholder="E-Mail">
                        @if ($errors->first('email'))
                            <p class="text-red text-sm mt-1">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="mb-6">
                        <input class="border {{ $errors->first('password') ? 'border-red' : '' }} w-full p-3" name="password" type="password" placeholder="**************">
                        @if ($errors->first('password'))
                            <p class="text-red text-sm mt-1">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="flex">
                        <button type="submit" class="bg-primary hover:bg-primary-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
                            Login
                        </button>
                    </div>
                </form>

                <div class="border-t px-10 py-6">
                    <div class="flex justify-between">
                        <a href="#" class="font-bold text-primary hover:text-primary-dark no-underline">Don't have an account?</a>
                        <a href="#" class="text-grey-darkest hover:text-black no-underline">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
