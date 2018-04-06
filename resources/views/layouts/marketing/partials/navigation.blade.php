<nav class="w-full max-w-screen mx-auto px-6 py-8">
    <div class="text-center md:flex md:justify-between md:items-center">
        <a href="{{ route('homepage') }}">
            @include('layouts.application.logo', ['class' => 'w-48'])
        </a>
        <div class="hidden md:flex">
            <a href="https://www.twitter.com/pingpingapp" class="font-bold uppercase no-underline text-primary hover:text-primary-dark">Follow
                us on Twitter
            </a>
        </div>
    </div>
</nav>
