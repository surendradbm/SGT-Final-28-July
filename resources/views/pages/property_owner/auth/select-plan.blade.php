<x-auth-layout>
    <div class="row justify-center mb-18">
        <div class="col-lg-6 col-md-7 col-12">
            <form action="{{ route('property_owner.select_plan_check') }}" id="select_plan" method="POST">
                @csrf
                <form id="select_plan">
                    <div class="plan-selection-div">
                        <div class="mb-12">
                            <ul class="form-progress-points">
                                <li>
                                    <div class="active">1</div>
                                </li>
                                <li>
                                    <div class="active">2</div>
                                </li>
                                <li>
                                    <div class="inactive">3</div>
                                </li>
                                <li>
                                    <div class="inactive">4</div>
                                </li>
                            </ul>
                        </div>
                        <h1 class="title mb-12">Select a Plan {{ @$hello }}</h1>
                        <div class="d-flex align-items-center justify-content-start plan-duration-selector">
                            <p class="mb-0 me-3">Annualy</p>
                            <label class="switch">
                                <input type="checkbox" class="plan-duration-checkbox" value="1">
                                <span class="slider"></span>
                            </label>
                            <p class="mb-0 ms-3">Monthly</p>
                        </div>
                        <div>
                            <br>
                            @foreach ($subscriptions as $index => $subscription)
                                <div class="plan-card active"
                                    onclick="add_lence(this,'{{ $subscription->id }}','{{ $subscription->monthly_price }}','{{ $subscription->yearly_price }}');">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="d-flex align-items-center justify-content-start mb-5">
                                                <img src="{{ asset('assets/images/plans/silver.png') }}"
                                                    alt="silver-plan" class="plan-icon">
                                                <h1 class="plan-title">{{ $subscription->subscription_title }}</h1>
                                            </div>
                                            <div class="mb-5">
                                                <p class="plan-description">
                                                    {{ $subscription->subscription_description }}
                                                </p>
                                            </div>
                                            <div>
                                                <div class="plan-price">
                                                    <span>${{ $subscription->yearly_price }}</span>
                                                    <span>/mo</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1"></div>
                                        <div class="col-5">
                                            <div>
                                                <h1 class="plan-feature-title">WHAT’S INCLUDED</h1>
                                                <ul class="plan-feature-list">
                                                    <li>
                                                        <span><i class="fas fa-check"></i></span>
                                                        <span>{{ $subscription->maximum_property }} Properties</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fas fa-check"></i></span>
                                                        <span>{{ $subscription->maximum_shift }} Shift</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fas fa-check"></i></span>
                                                        <span>{{ $subscription->maximum_checkpoint }}
                                                            Checkpoints</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="fas fa-check"></i></span>
                                                        <span>{{ $subscription->maximum_guards }} Guards</span>
                                                    </li>
                                                    <li>
                                                        @if ($subscription->messenger == '0')
                                                            <span><i class="fas fa-times"></i></span>
                                                            <span>Messenger</span>
                                                        @else
                                                            <span><i class="fas fa-check"></i></span>
                                                            <span>Messenger</span>
                                                        @endif

                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        <div class="d-flex align-items-center justify-content-between mb-10">
                            <div>
                                <a href="{{ route('dashboard.company_details') }}"
                                    class="link text-decoration-underline h5"><i
                                        class="fas fa-arrow-left me-2"></i>Back</a>
                            </div>
                            <div>
                                <input type="hidden" id="monthly_or_yearly" name="monthly_or_yearly" value="0">
                                <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                                <input type="hidden" name="subscription_id" id="subscription_id" value="">
                                <input type="hidden" name="monthly" id="monthly" value="">
                                <input type="hidden" name="yearly" id="yearly" value="">
                                <button type="submit" class="btn btn-primary">Next Step </button>
                            </div>
                        </div>

                    </div>
                </form>
        </div>
        <div class="col-lg-6 col-md-5 col-12">
            <figure class="d-lg-block d-md-block d-none">
                <img src="{{ asset('assets/images/auth/select-plan.png') }}" alt="register-illustration"
                    class="img-fluid">
            </figure>
        </div>
    </div>
    <div class="row justify-content-center mb-12">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="text-center mb-10">
                <h1 class="plan-table-title mb-8">Pick a plan that works best for you</h1>
                <p class="plan-table-description">Stay cool, we have a 48-hour money back guarantee!</p>
            </div>
            <div class="plan-table-div">
                <table class="table w-full table-striped plan-table m-0">
                    <tbody>
                        <tr>
                            <td class="type-column">
                                <div>
                                    TYPE
                                </div>
                            </td>
                            <td class="info-column">
                                <div>
                                    <span>Silver</span>
                                    <span>$8/Month</span>
                                </div>
                            </td>
                            <td class="info-column">
                                <div>
                                    <span>Silver</span>
                                    <span>$8/Month</span>
                                </div>
                            </td>
                            <td class="info-column">
                                <div>
                                    <span>Silver</span>
                                    <span>$8/Month</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>14-days free trial</td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>No user limit</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Product Support</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Email Support</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column">
                                <span class="message">Save up to 10%</span>
                            </td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Integrations</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Removal of Front branding</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column">
                                <span class="message">Save up to 10%</span>
                            </td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Active maintenance & support</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>
                        <tr>
                            <td>Data storage for 365 days</td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-times-circle"></i></td>
                            <td class="info-column"><i class="fas fa-check-circle"></i></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            const checkbox = $('.plan-duration-checkbox');
            checkbox.on('change', function() {
                const value = this.checked ? 1 : 0;
                $('#monthly_or_yearly').val(value);
                console.log('Selected value:', value);
            });
        });
    </script>
    <script>
        function updatePlanPrice(isMonthly) {
            const planCards = document.querySelectorAll('.plan-card');
            const monthlyPrices = [
                @foreach ($subscriptions as $subscription)
                    {{ $subscription->monthly_price }},
                @endforeach
            ];
            const yearlyPrices = [
                @foreach ($subscriptions as $subscription)
                    {{ $subscription->yearly_price }},
                @endforeach
            ];

            planCards.forEach((card, index) => {
                const planPriceDiv = card.querySelector('.plan-price');
                const price = isMonthly ? monthlyPrices[index] : yearlyPrices[index];
                const duration = isMonthly ? '/mo' : '/mo';
                planPriceDiv.innerHTML = `
                    <span>$${price}</span>
                    <span>${duration}</span>
                `;
            });
        }

        const planDurationCheckbox = document.querySelector('.plan-duration-checkbox');
        planDurationCheckbox.addEventListener('change', function() {
            updatePlanPrice(planDurationCheckbox.checked);
        });

        function add_lence(element, id, monthly, yearly) {
            $('#subscription_id').val(id);

            $('#monthly').val(monthly);
            $('#yearly').val(yearly);
            $('.plan-card').removeClass('active');
            $(element).addClass('active');
        }
    </script>
</x-auth-layout>
