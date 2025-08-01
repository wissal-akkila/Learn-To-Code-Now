@extends('layouts.app') {{-- أو admin-layout إذا كانت صفحات إدارية --}}
@section('title', 'Privacy Policy')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold">Privacy Policy</h2>
    <p>At Learn to Code Now, we respect your privacy and are committed to protecting your personal information.</p>

    <h5 class="fw-bold text-light">What We Collect</h5>
    <p>We may collect your name, email address, and usage data when you interact with our platform.</p>

    <h5 class="fw-bold text-light">How We Use Your Data</h5>
    <p>Your data helps us improve our courses, provide support, and personalize your learning experience.</p>

    <h5 class="fw-bold text-light">Data Security</h5>
    <p>We take security seriously and implement appropriate measures to safeguard your information.</p>

    <h5 class="fw-bold text-light">Contact Us</h5>
    <p>If you have any questions about this Privacy Policy, contact us at <a href="mailto:learntocodenow29@gmail.com">contact@learntocodenow29@gmail.com</a>.</p>
</div>
@endsection