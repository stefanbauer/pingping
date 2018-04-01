@extends('layouts.marketing')

@section('content')
    @include('layouts.marketing.partials.navigation')

    <div class="w-full max-w-lg mx-auto pb-10">
        <div class="bg-white shadow p-10 legal">
            <h1 class="text-black text-3xl font-bold mb-10 leading-none">Imprint / Legal Disclosure</h1>

            <p class="mb-4">Information in accordance with section 5 TMG</p>

            <address class="mb-6">
                <div>Stefan Bauer</div>
                <div>Bajuwarenhof 31</div>
                <div>85459 Berglern</div>
                <div class="mb-4">Germany</div>
                <div>VAT ID: DE302145002</div>
            </address>

            <div class="mb-10">
                <h2>Contact</h2>
                <div>Telephone: +49 151 22635655</div>
                <div>E-Mail: <a class="no-underline text-primary hover:text-primary-dark" href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#109;&#97;&#105;&#108;&#64;&#112;&#105;&#110;&#103;&#112;&#105;&#110;&#103;&#46;&#105;&#111;">&#109;&#97;&#105;&#108;&#64;&#112;&#105;&#110;&#103;&#112;&#105;&#110;&#103;&#46;&#105;&#111;</a></div>
                <div>Website: <a class="no-underline text-primary hover:text-primary-dark" href="https://pingping.io">https://pingping.io</a></div>
            </div>

            <div class="mb-10">
                <h2>Disclaimer</h2>
                Accountability for content
                The contents of our pages have been created with the utmost care. However, we cannot guarantee the contents' accuracy, completeness or topicality. According to statutory provisions, we are furthermore responsible for our own content on these web pages. In this context, please note that we are accordingly not obliged to monitor merely the transmitted or saved information of third parties, or investigate circumstances pointing to illegal activity. Our obligations to remove or block the use of information under generally applicable laws remain unaffected by this as per §§ 8 to 10 of the Telemedia Act (TMG).
            </div>

            <div class="mb-10">
                <h2>Accountability for links</h2>
                Responsibility for the content of external links (to web pages of third parties) lies solely with the operators of the linked pages. No violations were evident to us at the time of linking. Should any legal infringement become known to us, we will remove the respective link immediately.
            </div>

            <div>
                <h2>Copyright</h2>
                Our web pages and their contents are subject to German copyright law. Unless expressly permitted by law (§ 44a et seq. of the copyright law), every form of utilizing, reproducing or processing works subject to copyright protection on our web pages requires the prior consent of the respective owner of the rights. Individual reproductions of a work are allowed only for private use, so must not serve either directly or indirectly for earnings. Unauthorized utilization of copyrighted works is punishable (§ 106 of the copyright law).
            </div>
        </div>
    </div>
@stop
