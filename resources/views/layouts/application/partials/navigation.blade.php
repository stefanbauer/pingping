<nav class="w-full max-w-screen mx-auto px-4">
    <div class="flex mt-6 py-3 px-2 border-b border-grey">
        <div class="hidden lg:block lg:w-1/6 mr-6">
            <a href="{{ route('services') }}">
                @include('layouts.application.logo', ['class' => 'w-32'])
            </a>
        </div>
        <div class="flex flex-auto justify-between items-center">
            <ul class="list-reset flex pr-4">
                <li>
                    <a href="{{ route('services') }}" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        @include('assets.icons.services', ['class' => 'w-6 h-6 text-primary mr-2 group-hover:text-primary'])
                        <span class="font-bold text-black">Services</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('settings.profile.edit') }}" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        @include('assets.icons.cog', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('billing.credits') }}" class="flex items-center no-underline text-grey-darker group hover:text-black mr-10">
                        @include('assets.icons.billing', ['class' => 'w-6 h-6 text-grey-dark mr-2 group-hover:text-primary'])
                        <span>Billing</span>
                    </a>
                </li>
            </ul>

            <div class="flex items-center">
                <span class="text-primary font-bold border-r border-grey pr-4 mr-4">100 Credits</span>
                <ul class="list-reset flex pr-4">
                    <li>
                        <a href="{{ route('logout') }}" class="flex items-center no-underline text-grey-darker group hover:text-black">
                            <img src="{{ Gravatar::src(auth()->user()->email, 200) }}" class="w-6 h-6 rounded-full mr-2"/>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
