<x-auth-layout>
    <form action="{{ route('dashboard.company_details_check') }}" class="action" method="POST">
        {{-- {{ auth()->user()->first_name }} --}}
        @csrf
        <div class="row justify-center">
            <div class="col-lg-6 col-md-7 col-12">
                <div class="plan-selection-div">
                    <div class="mb-18">
                        <ul class="form-progress-points">
                            <li>
                                <div class="active">1</div>
                            </li>
                            <li>
                                <div class="inactive">2</div>
                            </li>
                            <li>
                                <div class="inactive">3</div>
                            </li>
                            <li>
                                <div class="inactive">4</div>
                            </li>
                        </ul>
                    </div>
                    <h1 class="title mb-12">Company Details </h1>
                    <div class="form-group mb-6">
                        <label for="company_name" class="mb-2 form-label">Company Name <em>*</em></label>
                        <input type="text" name="company_name" class="form-control mb-2" required />
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group mb-6">
                                <label for="fedral_ein" class="mb-2 form-label">Federal EIN
                                    <span>(Optional)</span></label>
                                <input type="text" name="fedral_ein" class="form-control mb-2" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group mb-6">
                                <label for="bsis_number" class="mb-2 form-label">BSIS Number
                                    <span>(Optional)</span></label>
                                <input type="text" name="bsis_number" class="form-control mb-2" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-6">
                        <label for="country" class="mb-2 form-label">Country <em>*</em></label>
                        <select name="country" id="country-dd" class="form-select" required>
                            <option value="">Select Country</option>
                            @foreach ($countries as $data)
                                <option value="{{ $data->id }}">
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-6">
                        <label for="state" class="mb-2 form-label">State <em>*</em></label>
                        <select name="state" id="state-dd" class="form-select" required>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group mb-6">
                                <label for="city" class="mb-2 form-label">City <em>*</em></label>
                                <select name="city" id="city-dd" class="form-select" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group mb-6">
                                <label for="postal_code" class="mb-2 form-label">Postal Code <em>*</em></label>
                                <input type="text" name="postal_code" class="form-control mb-2" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group mb-6">
                        <div class="form-group mb-6">
                            <label for="street" class="mb-2 form-label">Street Address <em>*</em></label>
                            <input type="text" name="street" class="form-control mb-2" required>
                        </div>

                    </div>
                    <div class="d-flex align-items-center justify-content-end mb-10">
                        <div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-arrow-right ms-2"></i>Next
                                Step </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-12">
                <figure class="d-lg-block d-md-block d-none">
                    <img src="{{ asset('assets/images/auth/company-details.png') }}" alt="register-illustration"
                        class="auth-illustration">
                </figure>
            </div>
        </div>
    </form>
</x-auth-layout>
<script>
    $(document).ready(function() {
        $('#country-dd').on('change', function() {
            var idCountry = this.value;
            $("#state-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-states') }}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(result) {
                    $('#state-dd').html('<option value="">Select State</option>');
                    $.each(result.states, function(key, value) {
                        $("#state-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#city-dd').html('<option value="">Select City</option>');
                }
            });
        });
        $('#state-dd').on('change', function() {
            var idState = this.value;
            $("#city-dd").html('');
            $.ajax({
                url: "{{ url('api/fetch-cities') }}",
                type: "POST",
                data: {
                    state_id: idState,
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(res) {
                    $('#city-dd').html('<option value="">Select City</option>');
                    $.each(res.cities, function(key, value) {
                        $("#city-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>
<script>
    @if (session('error'))
        let errorMessage = '{{ session('error') }}';
        @if ($errors->has('company_name'))
            errorMessage += '<br><br><b>Company Name: {{ $errors->first('company_name') }}';
        @endif
        @if ($errors->has('country'))
            errorMessage += '<br><br>Country: {{ $errors->first('country') }}';
        @endif
        @if ($errors->has('state'))
            errorMessage += '<br><br>State: {{ $errors->first('state') }}';
        @endif
        @if ($errors->has('city'))
            errorMessage += '<br><br>City: {{ $errors->first('city') }}';
        @endif
        @if ($errors->has('postal_code'))
            errorMessage += '<br><br>Postal Code: {{ $errors->first('postal_code') }}';
        @endif
        @if ($errors->has('street'))
            errorMessage += '<br><br>Street: {{ $errors->first('street') }}';
        @endif
        Swal.fire({
            icon: 'error',
            title: 'Error',
            html: errorMessage,
            confirmButtonText: 'OK'
        });
    @endif
</script>
