<x-auth-layout>
    <form action="{{ route('property_owner.signUpCheck') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-center">
            {{-- Form Div (Start) --}}
            <div class="col-lg-6 col-md-7 col-12">
                <div class="auth-form">
                    <h1 class="title mb-12">Create your Account </h1>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty" data-kt-image-input="true">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper rounded-circle w-130px h-130px"></div>
                                <!--begin::Edit button-->
                                <label class="btn btn-primary btn-sm" data-kt-image-input-action="change"
                                    data-bs-dismiss="click"> Upload Picture

                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    {{-- <input type="hidden" name="avatar_remove" /> --}}
                                </label>
                                <!--begin::Cancel button-->
                                <span class="" data-kt-image-input-action="cancel"
                                    style="transform: translate(95%, 230%)!important;"
                                    data-bs-dismiss="click">Remove</span>
                            </div>
                            <!--end::Image input-->
                        </div>
                    </div>

                    <div class="form-group mb-6">
                        <label for="first_name" class="mb-2 form-label">First Name <em>*</em></label>
                        <input type="text" name="first_name" class="form-control mb-2"
                            value="{{ old('first_name') }}" required>
                    </div>

                    <div class="form-group mb-6">
                        <label for="last_name" class="mb-2 form-label">Last Name <em>*</em></label>
                        <input type="text" name="last_name" class="form-control mb-2" value="{{ old('last_name') }}"
                            required>
                    </div>

                    <div class="form-group mb-6">
                        <label for="email" class="mb-2 form-label">Email Address <em>*</em></label>
                        <input type="email" name="email" class="form-control mb-2" value="{{ old('email') }}"
                            required>
                    </div>

                    <div class="form-group mb-6">
                        <label for="phone" class="mb-2 form-label">Phone Number <em>*</em></label>
                        <input type="tel" name="phone" class="form-control mb-2" value="{{ old('phone') }}"
                            required>
                    </div>

                    <div class="form-group mb-10">
                        <label for="password" class="mb-2 form-label">Password</label>
                        <input type="password" class="form-control mb-2" name="password" id="password" required>
                        <i class="fas fa-eye" id="togglePassword"
                            style="margin-right: 20px;float: right;margin-top: -33px;cursor: pointer;"></i>
                    </div>

                    <div class="form-group mb-10">
                        <label for="password" class="mb-2 form-label">Re-Enter Password</label>
                        <input type="password" class="form-control mb-2" name="password_confirmation" id="re-password"
                            required>
                    </div>

                    <div class="form-group mb-10">
                        <label for="user_type" class="mb-2 form-label" hidden>User Type</label>
                        <input type="" class="form-control mb-2" name="user_type" id="user_type" value="1"
                            required hidden>
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-10">
                        <div>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                required>
                            <label for="" class="form-check-label text-dark ms-2">I agree to the Terms and
                                Conditions</label>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Sign up</button>
                        </div>
                    </div>

                    <div class="opacity-50 mb-10">
                        <hr class="opacity-25">
                    </div>

                    <div>
                        <p>Have an account? <a href="{{ route('property_owner.login') }}" class="link">Sign In</a></p>
                    </div>

                </div>
            </div>
            {{-- Form Div (Start) --}}

            {{-- Illustration Div (Start) --}}
            <div class="col-lg-6 col-md-5 col-12">
                <figure class="d-lg-block d-md-block d-none">
                    <img src="{{ asset('assets/images/auth/register.png') }}" alt="register-illustration"
                        class="auth-illustration">
                </figure>
            </div>
            {{-- Illustration Div (End) --}}
        </div>
    </form>
</x-auth-layout>
<script>
    @if (session('error'))
        let errorMessage = '{{ session('error') }}';
        @if ($errors->has('first_name'))
            errorMessage += '<br><br><b>First Name: {{ $errors->first('first_name') }}';
        @endif
        @if ($errors->has('last_name'))
            errorMessage += '<br><br>Last Name: {{ $errors->first('last_name') }}';
        @endif
        @if ($errors->has('email'))
            errorMessage += '<br><br>Email: {{ $errors->first('email') }}';
        @endif
        @if ($errors->has('phone'))
            errorMessage += '<br><br>Phone No.: {{ $errors->first('phone') }}';
        @endif
        @if ($errors->has('password'))
            errorMessage += '<br><br>Password: {{ $errors->first('password') }}';
        @endif
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
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
<script>
    $(document).ready(function() {
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#re-password');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    });
</script>
