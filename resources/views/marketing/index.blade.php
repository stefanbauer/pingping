@extends('layouts.marketing')

@section('content')
    <div class="hero border-b">
        @include('layouts.marketing.partials.navigation')

        <div class="w-full max-w-screen mx-auto px-6">
            <div class="py-8 text-center">
                <h1 class="text-black text-3xl font-bold mb-6 leading-none md:text-6xl">Simple Website Monitoring</h1>
                <p class="text-grey-dark mx-auto text-lg max-w-md md:text-2xl">
                    We ping your sites and will notify you when they are down. One year. One price. Free plan available.
                </p>
            </div>

            @if (config('pingping.convertkit.landingpage_id'))
                <div class="text-center py-6 hidden md:block">
                    <p class="text-lg text-black">
                        Sign up for <strong>limited and free</strong> early access when the first private beta is released.
                    </p>
                </div>

                <div class="max-w-md mx-auto mb-8">
                    <div data-ck-version="6">
                        @push('scripts')
                            <script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
                        @endpush
                        <form id="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/{{ config('pingping.convertkit.landingpage_id') }}/subscribe" data-remote="true">
                            <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
                            <input type="hidden" name="id" value="{{ config('pingping.convertkit.landingpage_id') }}" id="landing_page_id">
                            <input type="hidden" name="ck_form_recaptcha" value="" id="ck_form_recaptcha">

                            <div class="flex flex-col md:flex-row">
                                <input class="py-3 px-4 text-md mb-2 flex-grow border rounded md:py-4 md:mb-0 md:rounded-r-none md:text-lg " id="ck_emailField" name="email" type="email" placeholder="Enter your email" required>
                                <button class="bg-primary hover:bg-primary-dark py-3 px-4 font-bold text-white uppercase leading-tight rounded md:rounded-l-none" id="ck_subscribe_button">
                                    I wanna be the first
                                </button>
                            </div>

                            <div class="mt-2 mt-2 text-left text-danger" id="ck_error_msg" style="display: none;">
                                <p>There was an error submitting your subscription. Please try again.</p>
                            </div>

                            <div style="position: absolute !important; left: -999em !important;">
                                <input type="text" name="captcha2_h" class="ck-captcha2-h" id="ck_captcha2_h" placeholder="We use this field to detect spam bots. If you fill this in, you will be marked as a spammer.">
                            </div>
                        </form>

                        <div class="mt-2 mt-2 text-center text-success" id="ck_success_msg" style="display: none;">
                            <p class="font-bold">Wuhuu! Now check your email to confirm your subscription.</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="max-w-2xl mx-auto flex">
                <img class="px-4 self-end" src="{{ asset('images/marketing/mockup.png') }}" />
            </div>
        </div>
    </div>

    <div class="bg-primary-lightest">
        <div class="w-full max-w-2xl mx-auto py-20">
            <div class="text-grey-dark text-sm uppercase text-center font-bold tracking-wider mb-1 md:text-md">Why you should choose PingPing</div>
            <div class="text-black text-2xl text-center font-bold mb-20 md:text-3xl">Things you'll fall in love with</div>

            <div class="flex flex-col md:flex-row">
                <div class="w-full flex flex-col text-center mb-20 px-8 md:flex-row md:text-left md:w-1/2">
                    <div class="mb-4 md:mb-0">
                        @include('marketing.partials.icons.clock', ['class' => 'w-24'])
                    </div>
                    <div class="flex-1 text-lg md:pl-10">
                        <div class="text-black font-bold text-xl mb-4">10 second interval service frequency</div>
                        <p class="text-grey-darker">
                            Unlike other monitoring platforms, you can't only set your frequency to a minimum of 5 minutes,
                            1 Minute or 30 seconds. PingPing lets you set it to a minimum of 10 seconds.
                        </p>
                    </div>
                </div>

                <div class="w-full flex flex-col text-center mb-20 px-8 md:flex-row md:text-left md:w-1/2">
                    <div class="mb-4 md:mb-0">
                        @include('marketing.partials.icons.services', ['class' => 'w-24'])
                    </div>
                    <div class="flex-1 text-lg md:pl-10">
                        <div class="text-black font-bold text-xl mb-4">As many services as you like</div>
                        <p class="text-grey-darker">
                            PingPing encourages you to check as many services as you like, as often as you like.
                            There’s now no longer a need to question which services are worth monitoring.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row">
                <div class="w-full flex flex-col text-center mb-20 px-8 md:flex-row md:text-left md:w-1/2">
                    <div class="mb-4 md:mb-0">
                        @include('marketing.partials.icons.notifications', ['class' => 'w-24'])
                    </div>
                    <div class="flex-1 text-lg md:pl-10">
                        <div class="text-black font-bold text-xl mb-4">Always within reach</div>
                        <p class="text-grey-darker">
                            With a variety of notification channels, such as Slack, HipChat, Email, and SMS, you are always aware
                            of what is happening with your services so you can fix any issues sooner.
                        </p>
                    </div>
                </div>

                <div class="w-full flex flex-col text-center mb-20 px-8 md:flex-row md:text-left md:w-1/2">
                    <div class="mb-4 md:mb-0">
                        @include('marketing.partials.icons.statistics', ['class' => 'w-24'])
                    </div>
                    <div class="flex-1 text-lg md:pl-10">
                        <div class="text-black font-bold text-xl mb-4">Elegantly simple statistics</div>
                        <p class="text-grey-darker">
                            Our world operates on data, and yours can do too.  With our simple statistics pages and reports,
                            you can see at a glance the status of your services.
                        </p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row">
                <div class="w-full flex flex-col text-center mb-20 px-8 md:flex-row md:text-left md:w-1/2 md:mb-0">
                    <div class="mb-4 md:mb-0">
                        @include('marketing.partials.icons.pricing', ['class' => 'w-24'])
                    </div>
                    <div class="flex-1 text-lg md:pl-10">
                        <div class="text-black font-bold text-xl mb-4">A fair fixed price</div>
                        <p class="text-grey-darker">
                            Never get hit with an unexpected bill again. You can get all this monitoring on one simple plan,
                            with one simple price billed annually and with no contract.
                        </p>
                    </div>
                </div>

                <div class="w-full flex flex-col text-center px-8 md:flex-row md:text-left md:w-1/2 md:mb-0">
                    <div class="mb-4 md:mb-0">
                        @include('marketing.partials.icons.support', ['class' => 'w-24'])
                    </div>
                    <div class="flex-1 text-lg md:pl-10">
                        <div class="text-black font-bold text-xl mb-4">Fantastic support and excellent service</div>
                        <p class="text-grey-darker">
                            There’s nothing quite like the peace of mind of knowing that your service is working, but
                            when something isn’t quite right, I am only a few moments away.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
