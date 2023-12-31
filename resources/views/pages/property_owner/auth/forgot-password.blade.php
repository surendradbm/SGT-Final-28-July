<x-auth-layout>
    <form action="{{ route('property_owner.forgetPasswordCheck') }}" method="POST">
        @csrf
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-7 col-12">
                <div class="auth-form">
                    <h1 class="title mb-12">Reset your Password</h1>
                    <div class="form-group mb-6">
                        <label for="email" class="mb-2 form-label">Enter registered email address to send the
                            <br>verification link</label>
                        <input type="email" name="email" class="form-control mb-2" value="" required>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-10">
                        <div>
                            <a href="{{ route('property_owner.login') }}" class="link text-decoration-underline h5">
                                <i class="fas fa-arrow-left me-2"></i>Back</a>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Send Reset Link</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-12">
                <figure class="d-lg-block d-md-block d-none">
                    <img src="{{ asset('assets/images/auth/reset-password.png') }}" alt="register-illustration"
                        class="auth-illustration">
                </figure>
            </div>
        </div>
    </form>
</x-auth-layout>
@if (session('alert'))
    <script>
        Swal.fire({
            icon: '{{ session('alert.icon') }}',
            title: '{{ session('alert.title') }}',
            text: '{{ session('alert.text') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif
