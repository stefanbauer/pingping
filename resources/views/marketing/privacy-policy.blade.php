@extends('layouts.marketing')

@section('pageTitle', 'Privacy Policy')
@section('robots', 'noindex, follow')

@section('content')
    @include('layouts.marketing.partials.navigation')

    <div class="w-full max-w-lg mx-auto pb-10 px-4 md:px-0">
        <div class="bg-white shadow p-10 legal">
            @if (config('pingping.iubenda.privacy_policy_id'))
                <a href="//www.iubenda.com/privacy-policy/{{ config('pingping.iubenda.privacy_policy_id') }}" class="iubenda-white no-brand iub-body-embed iub-legal-only iub-no-markup iubenda-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
            @else
                <h1>Privacy Policy</h1>
                <p>To be done.</p>
            @endif
        </div>
    </div>
@stop
