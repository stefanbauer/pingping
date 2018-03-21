<ul class="list-reset mb-8">
    <div class="pb-3 font-bold uppercase text-black">Settings</div>

    <li>
        <a href="#" class="flex items-center no-underline text-grey-darker group hover:text-black py-2">
            @include('assets.icons.profile', ['class' => 'w-6 h-6 text-primary mr-3 group-hover:text-primary'])
            <span class="font-bold text-black">My Profile</span>
        </a>
    </li>
    <li>
        <a href="#" class="flex items-center no-underline text-grey-darker group hover:text-black py-2">
            @include('assets.icons.security', ['class' => 'w-6 h-6 text-grey-dark mr-3 group-hover:text-primary'])
            <span class="">Security</span>
        </a>
    </li>
    <li>
        <a href="#" class="flex items-center no-underline text-grey-darker group hover:text-black py-2">
            @include('assets.icons.notifications', ['class' => 'w-6 h-6 text-grey-dark mr-3 group-hover:text-primary'])
            <span class="">Notifications</span>
        </a>
    </li>
    <li>
        <a href="#" class="flex items-center no-underline text-grey-darker group hover:text-black py-2">
            @include('assets.icons.api', ['class' => 'w-6 h-6 text-grey-dark mr-3 group-hover:text-primary'])
            <span class="">API Access</span>
        </a>
    </li>
</ul>
