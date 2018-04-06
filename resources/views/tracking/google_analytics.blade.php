<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('pingping.google_analytics.tracking_id') }}"></script>
<script>
    let trackingId = '{{ config('pingping.google_analytics.tracking_id') }}';
    window.dataLayer = window.dataLayer || [];

    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', trackingId, { 'anonymize_ip': {{ config('pingping.google_analytics.anonymize_ip') ? 'true' : 'false' }} });
</script>
