<div class="w-1/2 px-8 flex">
    <div>
        @include($icon, ['class' => 'w-24'])
    </div>
    <div class="flex-1 text-lg pl-10">
        <div class="text-black font-bold text-xl mb-4">{{ $title }}</div>
        <p class="text-grey-darker">
            {{ $description }}
        </p>
    </div>
</div>
