@extends('layouts.marketing')

@section('content')
    <div class="hero border-b">
        @include('layouts.marketing.partials.navigation')

        <div class="w-full max-w-screen mx-auto">
            <div class="py-8 text-center">
                <h1 class="text-black text-6xl font-bold mb-6 leading-none">Simple Website Monitoring</h1>
                <p class="text-grey-dark mx-auto text-2xl max-w-md">
                    We ping your sites and will notify you when they are down. One year. One price. Free plan available.
                </p>
            </div>

            @if (config('pingping.convertkit.landingpage_id'))
                <div class="text-center py-6">
                    <p class="text-xl text-black">
                        Sign up for <strong>limited and free</strong> early access when the first private beta is released.
                    </p>

                </div>

                <div class="max-w-md mx-auto mb-16">
                    <div data-ck-version="6">
                        @push('scripts')
                            <script src="https://assets.convertkit.com/assets/CKJS4.js?v=21"></script>
                        @endpush
                        <form id="ck_subscribe_form" action="https://app.convertkit.com/landing_pages/{{ config('pingping.convertkit.landingpage_id') }}/subscribe" data-remote="true">
                            <input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
                            <input type="hidden" name="id" value="{{ config('pingping.convertkit.landingpage_id') }}" id="landing_page_id">
                            <input type="hidden" name="ck_form_recaptcha" value="" id="ck_form_recaptcha">

                            <div class="flex">
                                <input class="py-4 px-4 text-lg flex-grow border rounded-l" id="ck_emailField" name="email" type="email" placeholder="Enter your email" required>
                                <button class="bg-primary hover:bg-primary-dark py-3 px-4 font-bold text-white uppercase leading-tight rounded-r" id="ck_subscribe_button">
                                    Give me a free license
                                </button>
                            </div>

                            <div class="mt-2 mt-2 text-left text-danger" id="ck_error_msg" style="display: none;">
                                <p>There was an error submitting your subscription. Please try again.</p>
                            </div>

                            <div style="position: absolute !important; left: -999em !important;">
                                <input type="text" name="captcha2_h" class="ck-captcha2-h" id="ck_captcha2_h" placeholder="We use this field to detect spam bots. If you fill this in, you will be marked as a spammer.">
                            </div>

                            <p class="text-md text-primary mt-2 text-center">
                                The very first 100 subscribers get a <strong>lifetime license for free</strong> as soon as we launch.
                            </p>
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
            <div class="text-grey-dark text-lg uppercase text-center font-bold tracking-wider mb-1">Why you should choose PingPing</div>
            <div class="text-black text-3xl text-center font-bold mb-20">Things you'll fall in love with</div>

            <div class="flex -mx-8 px-8 mb-28">
                @component('marketing.partials.feature')
                    @slot('icon', 'marketing.partials.icons.clock')
                    @slot('title', '10 second interval service frequency')
                    @slot('description')
                        Unlike other monitoring platforms, you can't only set your frequency to a minimum of 5 minutes,
                        1 Minute or 30 seconds. PingPing lets you set it to a minimum of 10 seconds.
                    @endslot
                @endcomponent

                @component('marketing.partials.feature')
                    @slot('icon', 'marketing.partials.icons.services')
                    @slot('title', 'As many services as you like')
                    @slot('description')
                            PingPing encourages you to check as many services as you like, as often as you like.
                            There’s now no longer a need to question which services are worth monitoring.
                    @endslot
                @endcomponent
            </div>

            <div class="flex -mx-8 px-8 mb-28">
                @component('marketing.partials.feature')
                    @slot('icon', 'marketing.partials.icons.notifications')
                    @slot('title', 'Always within reach')
                    @slot('description')
                        With a variety of notification channels, such as Slack, HipChat, Email, and SMS, you are always aware
                        of what is happening with your services so you can fix any issues sooner.
                    @endslot
                @endcomponent

                @component('marketing.partials.feature')
                    @slot('icon', 'marketing.partials.icons.statistics')
                    @slot('title', 'Elegantly simple statistics')
                    @slot('description')
                            Our world operates on data, and yours can do too.  With our simple statistics pages and reports,
                            you can see at a glance the status of your services.
                    @endslot
                @endcomponent
            </div>

            <div class="flex -mx-8 px-8">
                @component('marketing.partials.feature')
                    @slot('icon', 'marketing.partials.icons.pricing')
                    @slot('title', 'A fair fixed price')
                    @slot('description')
                        Never get hit with an unexpected bill again. You can get all this monitoring on one simple plan,
                        with one simple price billed annually and with no contract.
                    @endslot
                @endcomponent

                @component('marketing.partials.feature')
                    @slot('icon', 'marketing.partials.icons.support')
                    @slot('title', 'Fantastic support and excellent service')
                    @slot('description')
                            There’s nothing quite like the peace of mind of knowing that your service is working, but
                            when something isn’t quite right, I am only a few moments away.
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@stop
