<x-auth-layout>
    <div class="row justify-center">
        <div>
            {{-- @php
                $billing_address = session('billing_address');
            @endphp

            @if ($billing_address)
                <h1>Session Data:</h1>
                <p>country: {{ $billing_address['country'] }}</p>
                <p>state: {{ $billing_address['state'] }}</p>
                <p>city: {{ $billing_address['city'] }}</p>
                <p>postal_code: {{ $billing_address['postal_code'] }}</p>
                <p>street: {{ $billing_address['street'] }}</p>
                <p>user_id: {{ $billing_address['user_id'] }}</p>
            @else
                <p>No session data found.</p>
            @endif --}}
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-lg-6 col-md-7 col-12">
            <div class="plan-selection-div">
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
                            <div class="active">4</div>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="form-group mb-6">
                            <label for="coupon_code" class="mb-2 form-label">Enter Coupon Code</label>
                            <input type="text" class="form-control mb-2" name="coupon_code" id="coupon_code">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 text-end">
                        <button class="btn btn-primary">Apply</button>
                    </div>
                    {{-- <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <span class="fs-4 text-bg fw-bold">Remove Coupon</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-end">
                        <button class="btn btn-bg-secondary">Applied</button>
                    </div>
                </div> --}}
                </div>
                <div class="separator my-10"></div>
                <div class="row">
                    <h1 class="title mb-12">Payment Details</h1>
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="d-flex flex-stack">
                            <div class="d-flex">
                                <div class="py-1 me-3">
                                    <img src="{{ asset('assets/images/auth/Group 9.svg') }}" alt="img">
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="fs-4 text-dark fw-bold">{{ $subscription_name }}</span>
                                    <i class="fs-6 fw-semibold text-muted">{{ $plan_name }}</i>
                                </div>
                            </div>

                            <div class="d-flex text-end">
                                <span class="fs-2 text-dark fw-bold">${{ $price }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator my-10"></div>
                <div class="row mb-2">
                    <div class="col-lg-6 col-md-6 col-12">
                        <span class="fs-4 text-dark fw-bold">Subtotal</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-end">
                        <span class="fs-4 text-dark fw-semibold">${{ $price }}</span>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-6 col-md-6 col-12">
                    <span class="fs-6 text-success fw-semibold">Coupon Code Applied*</span>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    <span class="fs-6 text-success fw-semibold">- $5</span>
                </div> --}}
                </div>
                <div class="separator my-10"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <span class="fs-4 text-bg fw-bold">Amount to pay</span>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 text-end">
                        <span class="fs-2 text-dark fw-bold">${{ $price }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/auth/pay-by-card.jpeg') }}" alt="pay-by-card" class="w-200 h-200">
            </figure>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default credit-card-box">
                        <div class="panel-heading display-table">
                            <h3 class="panel-title">Payment Details</h3>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            <form role="form" action="{{ route('stripe.post') }}" method="post"
                                class="require-validation" data-cc-on-file="false"
                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                @csrf
                                <div class='form-row'>
                                    <div class='col-xs-12 form-group'>
                                        <label class='control-label required'><b>Name on Card</b></label> <input
                                            class='form-control' size='4' type='text' name="Customer_name"
                                            value="Aman Prasad" required>
                                    </div>
                                </div>
                                <br>
                                <div class='form-row row'>
                                    <div class='col-xs-12 form-group'>
                                        <label class='control-label required'><b>Card Number</b></label> <input
                                            autocomplete='off' class='form-control card-number' size='20'
                                            type='text' name="card_number" value="4242 4242 4242 4242" required>
                                    </div>
                                </div>
                                <br>
                                <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group cvc '>
                                        <label class='control-label required'><b>CVV</b></label> <input
                                            autocomplete='off' class='form-control card-cvc' placeholder='ex. 311'
                                            size='4' type='text' name="cvv" value="311" required>
                                    </div>
                                </div>
                                <br>
                                <div class='form-row row'>
                                    <div class='col-xs-12 col-md-4 form-group expiration '>
                                        <label class='control-label required'><b>Expiration Month</b></label> <input
                                            class='form-control card-expiry-month' placeholder='MM' size='2'
                                            type='text' name="exp_month" value="12" required>
                                    </div>
                                    <div class='col-xs-12 col-md-4 form-group expiration '>
                                        <label class='control-label required'><b>Expiration Year</b></label> <input
                                            class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                            type='text' name="exp_year" value="2028" required>
                                    </div>
                                </div>
                                <br>
                                <input autocomplete='off' class='form-control card-number' size='20'
                                    type='text' name="payment_amount" value="{{ $price }}" hidden>
                                {{-- <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                        <div class='alert-danger alert'>Please correct the errors and try
                                            again.</div>
                                    </div>
                                </div> --}}
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {

        /*------------------------------------------
        --------------------------------------------
        Stripe Payment Code
        --------------------------------------------
        --------------------------------------------*/

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function(e) {
            var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'
                ].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                /* token contains id, last4, and card type */
                var token = response['id'];

                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
