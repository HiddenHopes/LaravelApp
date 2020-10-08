@extends('layouts.app')

@section('content')
    <div id="placeholders">
        <h1>Terms and Conditions for <span class="highlight preview_company_name">Company Name</span></h1>
        <h2>Introduction</h2>
        <p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, <span class="highlight preview_website_name">Webiste Name</span> accessible at <span class="highlight preview_website_url">Website.com</span>.</p>
        <p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.</p>
        <p>Minors or people below 18 years old are not allowed to use this Website.</p>
        <h2>Intellectual Property Rights</h2>
        <p>Other than the content you own, under these Terms, <span class="highlight preview_company_name">Company Name</span> and/or its licensors own all the intellectual property rights and materials contained in this Website.</p>
        <p>You are granted limited license only for purposes of viewing the material contained on this Website.</p>
        <p>Certain areas of this Website are restricted from being access by you and <span class="highlight preview_company_name">Company Name</span> may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>
        <h2>Entire Agreement</h2>
        <p>These Terms constitute the entire agreement between <span class="highlight preview_company_name">Company Name</span> and you in relation to your use of this Website, and supersede all prior agreements and understandings.</p>
        <h2>Governing Law &amp; Jurisdiction</h2>
        <p>These Terms will be governed by and interpreted in accordance with the laws of the State of <span class="highlight preview_country">Country</span>, and you submit to the non-exclusive jurisdiction of the state and federal courts located in <span class="highlight preview_country">Country</span> for the resolution of any disputes.</p>
    </div>
    <br>
    <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">

        <input type="checkbox" name="checkbox" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy
        <input type="submit" name="submit" value="submit" />

    </form>
@endsection
