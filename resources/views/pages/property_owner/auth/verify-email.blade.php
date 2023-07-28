<x-auth-layout>
    <form action="{{ route('property_owner.verify_email_check') }}" class="action" method="POST">
        @csrf
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-7 col-12">
                <div class="auth-form">
                    <h1 class="title mb-12">Verify Email </h1>
                    <input type="hidden" name="otp" value="{{ $otp }}">
                    <input type="hidden" name="otp_created_at" value="{{ $otp_created_at }}">
                    <input type="hidden" name="otp_expired_at" value="{{ $otp_expired_at }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <div class="form-group mb-6">
                        <label for="email" class="mb-2 form-label">Enter verification code send to your entered email
                            address</label>
                        <input type="tel" name="code" class="form-control mb-2" value="{{ old('code') }}"" />
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-10">
                        <div>
                            <button id="resendOtpButton"  class="btn btn-sm btn-primary">Re-Send Code</button>
                        </div>
                        <div>
                            <button class="btn btn-primary">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-12">
                <figure class="d-lg-block d-md-block d-none">
                    <img src="{{ asset('assets/images/auth/verify-email.png') }}" alt="register-illustration"
                        class="auth-illustration">
                </figure>
            </div>
        </div>
    </form>

</x-auth-layout>
<script>
    $(document).ready(function() {
        $("#resendOtpButton").on("click", function() {
            $.ajax({
                type: "POST",
                url: "{{ route('property_owner.resend_otp') }}",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message,
                        confirmButtonText: 'OK'
                    });
                },
                error: function(error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: error.responseJSON.message,
                        confirmButtonText: 'OK'
                    });
                }
            });
        });

        @if (session('error'))
            let errorMessage = '{{ session('error') }}';
            @if ($errors->has('code'))
                errorMessage += '<br><br><b>Invalid Verification Code: {{ $errors->first('code') }}';
            @endif
            Swal.fire({
                icon: 'error',
                title: 'Error',
                html: errorMessage,
                confirmButtonText: 'OK'
            });
        @elseif (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                confirmButtonText: 'OK'
            }).then(() => {
                window.location.href = '{{ route('dashboard.company_details') }}';
            });
        @elseif (session('suc'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('suc') }}',
                confirmButtonText: 'OK'
            });
        @endif
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
