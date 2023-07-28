<?php

$index = strpos($email, '@');
$username = substr($email, 0, $index);

$domain = substr($email, $index);

$maskedUsername = substr($username, 0, 2) . str_repeat('*', strlen($username) - 3);

$maskedEmail = $maskedUsername . $domain;
?>
<x-auth-layout>
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6 col-md-7 col-12">
            <div class="auth-form">
                <h1 class="title mb-2">Verify your email</h1>
                <p class="text-dark mb-12">Hey! A link to set your password has been sent to email
                    <b><?php echo $maskedEmail; ?></b> with the subject “create new password”</p>
            </div>
        </div>
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/email-landing.svg') }}" alt="add-phone-illustration"
                    class="auth-illustration">
            </figure>
        </div>
    </div>
</x-auth-layout>