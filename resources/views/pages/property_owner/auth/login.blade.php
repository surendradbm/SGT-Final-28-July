<x-auth-layout>
    <div class="row align-items-center justify-center">
        {{-- Form Div (Start) --}}
        <div class="col-lg-6 col-md-6 col-12">
            <form class="auth-form" action="{{ route('property_owner.loginCheck') }}" method="POST">
                @csrf
                <h1 class="title mb-12">Welcome back! </h1>

                <div class="form-group mb-6">
                    <label class="mb-2 form-label" for="exampleInputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                        aria-describedby="emailHelp" placeholder="Enter Email" value="propertyowner@sgt.com" required>
                </div>
                <div class="form-group mb-10">
                    <label for="password" class="mb-2 form-label">Password</label>
                    <input type="password" class="form-control mb-2" name="password" value="Demo@123" id="password"
                        required>
                    <i class="fas fa-eye" id="togglePassword"
                        style="margin-right: 20px;float: right;margin-top: -33px;cursor: pointer;"></i>
                </div>

                <div class="form-group mb-10">
                    <label for="userType" class="mb-2 form-label" userType</label>
                        <input type="userType" class="form-control mb-2" name="userType" value="1" hidden
                            requiredF>
                </div>

                <div class="d-flex align-items-center justify-content-between mb-10">
                    <div>
                        <a href="{{ route('property_owner.forgetPassword') }}"
                            class="link text-decoration-underline h5">Forgot Password?</a>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </div>

                <div class="opacity-50 mb-10">
                    <hr class="opacity-25">
                </div>

                <div>
                    <p>Don’t you have an account? <a href="{{ route('property_owner.signUp') }}" class="link">Sign
                            Up</a></p>
                </div>

            </form>
        </div>
        {{-- Form Div (Start) --}}

        {{-- Illustration Div (Start) --}}
        <div class="col-lg-6 col-md-6 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/login.png') }}" alt="login-illustration"
                    class="auth-illustration">
            </figure>
        </div>
        {{-- Illustration Div (End) --}}

    </div>
</x-auth-layout>
<script>
    @if (session('error'))
        let errorMessage = '{{ session('error') }}';
        @if ($errors->has('email'))
            errorMessage += '<br><br><b>Email: {{ $errors->first('email') }}';
        @endif
        @if ($errors->has('password'))
            errorMessage += '<br><br>Password: {{ $errors->first('password') }}';
        @endif

        Swal.fire({
            icon: 'error',
            title: 'Error',
            html: errorMessage,
            confirmButtonText: 'OK'
        });
    @endif
</script>
<script>
    $(document).ready(function() {
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    });
</script>
