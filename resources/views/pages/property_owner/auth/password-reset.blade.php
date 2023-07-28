<x-auth-layout>
    <form action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="email" value="{{ $email }}">
        <div class="row justify-content-center align-items-center">
            {{-- <div class="col-lg-12">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
            </div> --}}
            <div class="col-lg-6 col-md-7 col-12">
                <div class="auth-form">
                    <h1 class="title mb-12">Reset your Password </h1>
                    <div class="form-group mb-6">
                        <label class="mb-2 form-label" for="password">New Password:</label>
                        <input type="password" class="form-control mb-2" name="password" id="password">
                    </div>
                    <div class="form-group mb-6">
                        <label class="mb-2 form-label" for="password_confirmation">Confirm New Password:</label>
                        <input type="password" class="form-control mb-2" name="password_confirmation" id="password_confirmation">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-10">
                        <div>
                            <a href="{{ route('property_owner.login') }}" class="link text-decoration-underline h5">
                                <i class="fas fa-arrow-left me-2"></i>Back</a>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Save password</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-12">
                <figure class="d-lg-block d-md-block d-none">
                    <img src="{{ asset('assets/images/auth/cuate.svg') }}" alt="register-illustration"
                        class="auth-illustration">
                </figure>
            </div>
        </div>
    </form>
</x-auth-layout>
