<nav class="w-full max-w-screen mx-auto px-4 py-8">
    <div class="flex justify-between items-center">
        <a href="{{ route('homepage') }}">
            @include('layouts.application.logo', ['class' => 'w-48'])
        </a>
        <div class="flex items-center">
            <a href="https://www.twitter.com/pingpingapp" class="font-bold uppercase no-underline text-primary hover:text-primary-dark">Follow
                us on Twitter
            </a>
        </div>
    </div>
</nav>
