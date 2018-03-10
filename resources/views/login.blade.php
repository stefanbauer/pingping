<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter text-base text-grey-darkest font-normal relative">
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

                <form class="bg-grey-lightest px-10 py-10">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <input class="border w-full p-3" name="email" type="text" placeholder="E-Mail">
                    </div>
                    <div class="mb-6">
                        <input class="border w-full p-3" name="password" type="password" placeholder="**************">
                    </div>
                    <div class="flex">
                        <button class="bg-primary hover:bg-primary-dark w-full p-4 text-sm text-white uppercase font-bold tracking-wider">
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
</body>
</html>
