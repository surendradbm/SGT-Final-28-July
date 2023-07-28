<x-auth-layout>
    <form action="{{ route('dashboard.billing_address_check') }}" class="action" method="POST">
        @csrf
        {{-- @php
            $selectPlanCheck = session('select_plan_check');
        @endphp

        @if ($selectPlanCheck)
            <h1>Session Data:</h1>
            <p>Monthly or Yearly: {{ $selectPlanCheck['monthlyOrYearly'] }}</p>
            <p>User ID: {{ $selectPlanCheck['user_id'] }}</p>
            <p>Subscription ID: {{ $selectPlanCheck['subscription_id'] }}</p>
            <p>Monthly: {{ $selectPlanCheck['monthly'] }}</p>
            <p>Yearly: {{ $selectPlanCheck['yearly'] }}</p>
        @else
            <p>No session data found.</p>
        @endif --}}

        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-7 col-12">
                <div class="auth-form">
                    <div class="mb-18">
                        <ul class="form-progress-points">
                            <li>
                                <div class="active">1</div>
                            </li>
                            <li>
                                <div class="active">2</div>
                            </li>
                            <li>
                                <div class="active">3</div>
                            </li>
                            <li>
                                <div class="inactive">4</div>
                            </li>
                        </ul>
                    </div>
                    <h1 class="title mb-12">Billing Address </h1>
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
                                <input type="text" name="postal_code" class="form-control mb-2">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-6">
                        <label for="street" class="mb-2 form-label">Street Address <em>*</em></label>
                        <input type="text" name="street" class="form-control mb-2">
                    </div>

                    <div class="d-flex align-items-center justify-content-between mb-10">
                        <div>
                            <a href="{{ route('property_owner.select_plan') }}"
                                class="link text-decoration-underline h5"><i class="fas fa-arrow-left me-2"></i>Back</a>
                        </div>
                        <div>
                            <button class="btn btn-primary">Next Step <i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-12">
                <figure class="d-lg-block d-md-block d-none">
                    <img src="{{ asset('assets/images/auth/billing-address.png') }}" alt="billing-address"
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
