<x-default-layout>
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
    </style>
    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">Add {{ __('messages.Subscription') }}</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{ route('superadmin.subscription.all') }}" class="btn btn-primary">Back to
                        {{ __('messages.Subscription') }}</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    {{-- Breadcrumbs (Start) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{ route('superadmin.subscription.all') }}">{{ __('messages.Subscription') }}</a>
                        </li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="active"><a href="{{ route('superadmin.subscription.add') }}">Add
                                {{ __('messages.Subscription') }}</a></li>
                    </ul>
                    {{-- Breadcrumbs (End) --}}
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}

    <form action="{{ route('superadmin.subscription.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body py-5">
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-4 col-12">
                        <h4 class="text-dark fw-bold">Create a New Subscription</h4>
                        <span class="text-gray-600">Fill out the necessary details to create the Subscription</span>
                        <div class="float-end">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="status" type="checkbox" value="1"
                                    id="status" onchange="toggleSwitch()" checked>
                                <b><label class="form-check-label text-dark" for="status">Active Status</label></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty" data-kt-image-input="true">
                            <!--begin::Image preview wrapper-->
                            <div class="image-input-wrapper rounded-circle w-130px h-130px"></div>
                            <!--begin::Edit button-->
                            <label class="btn btn-primary btn-sm" data-kt-image-input-action="change"
                                data-bs-dismiss="click"> Change Thumbnail

                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                {{-- <input type="hidden" name="avatar_remove" /> --}}
                            </label>
                            <!--begin::Cancel button-->
                            <span class="" data-kt-image-input-action="cancel" data-bs-dismiss="click">Remove
                                Thumbnail</span>
                        </div>
                        <!--end::Image input-->
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="mb-10">
                        <div class="form-group">
                            <b><label class="required form-label" for="subscription_title">Subscription
                                    Title</label><br></b>
                            <input type="text" class="form-control form-control-solid" name="subscription_title"
                                id="kt_docs_maxlength_basic" aria-describedby="emailHelp"
                                placeholder="Enter subscription title" maxlength="42" required>
                        </div>
                    </div>
                    <div class="mb-10">
                        <div class="form-group">
                            <b><label class="form-label" for="subscription_description">Description
                                    (Optional)</label><br></b>
                            <textarea type="text" class="form-control form-control-solid" name="subscription_description"
                                id="kt_docs_maxlength_textarea" maxlength="120" placeholder="Enter Description" rows="2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body py-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="trial_type" class="required form-label">Free Trial</label><br>
                            <span id="trial_type_help" class="form-text text-muted">Choose whether this
                                subscription type will be Paid or Free Trail Basis</span>
                            <select class="form-select form-select-solid" id="trial_type" name="trial_type"
                                aria-label="Floating label select example" required>
                                <option value="1">Free Subscription</option>
                                <option value="0">Paid Subscription</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6" id="hide_trial_days">
                        <div class="form-group">
                            <label for="trial_days" class="required form-label">Trial Days</label><br>
                            <span id="trial_days_help" class="form-text text-muted">Enter trial days for
                                the
                                subscription</span>
                            <input type="number" class="form-control form-control-solid" name="trial_days"
                                id="trial_days" aria-describedby="emailHelp" placeholder="Enter Trial Days"
                                value="{{ old('trial_days') }}">
                        </div>
                    </div>
                </div>
                <div id="hide_row" style='display:none;'>
                    <div class="mt-5 row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="monthly_price" class="required form-label">Monthly
                                    Price</label><br>
                                <span id="monthly_price_help" class="form-text text-muted">Enter monthly price
                                    days for the
                                    subscription</span>
                                <input type="number" class="form-control form-control-solid" name="monthly_price"
                                    id="monthly_price" aria-describedby="emailHelp" placeholder="Enter Monthly Price"
                                    value="{{ old('monthly_price') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="yearly_price" class="required form-label">Yearly
                                    Price</label><br>
                                <span id="trial_days_help" class="form-text text-muted">Enter yearly price
                                    days for the
                                    subscription</span>
                                <input type="number" class="form-control form-control-solid" name="yearly_price"
                                    id="yearly_price" aria-describedby="emailHelp" placeholder="Enter Yearly Price"
                                    value="{{ old('yearly_price') }}">
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="discounted_monthly_price_type" class="required form-label">Discounted
                                    Monthly
                                    Price</label><br>
                                <div class="form-floating mb-7">
                                    <select class="form-select form-select-solid" id="discounted_monthly_price_type"
                                        name="discounted_monthly_price_type"
                                        aria-label="Floating label select example">
                                        <option value="">Choose</option>
                                        <option value="1">Fixed</option>
                                        <option value="2">Percentage</option>
                                    </select>
                                    <label for="floatingSelect1">Enter Monthly Discounted Type</label>
                                </div>
                                <input type="number" class="form-control form-control-solid"
                                    name="discounted_monthly_price" id="discounted_monthly_price"
                                    aria-describedby="emailHelp" placeholder="Enter Monthly Price Days"
                                    value="{{ old('discounted_monthly_price') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="discounted_yearly_price_type" class="required form-label">Discounted
                                    Yearly
                                    Price</label><br>
                                <div class="form-floating mb-7">
                                    <select class="form-select form-select-solid" id="discounted_yearly_price_type"
                                        aria-label="Floating label select example"
                                        name="discounted_yearly_price_type">
                                        <option value="">Choose</option>
                                        <option value="1">Fixed</option>
                                        <option value="2">Percentage</option>
                                    </select>
                                    <label for="floatingSelect1">Enter Yearly Discounted Type</label>
                                </div>
                                <input type="number" class="form-control form-control-solid"
                                    name="discounted_yearly_price" id="discounted_yearly_price"
                                    aria-describedby="emailHelp" placeholder="Enter Yearly Price Days"
                                    value="{{ old('discounted_yearly_price') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body">
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-4 col-12">
                        <h4 class="text-dark fw-bold">Subscription Features</h4>
                        <span class="text-gray-600">Configure below features as per the subscription type</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label" for="maximum_property">Maximum
                                Property</label><br>
                            <input type="number" class="form-control form-control-solid" name="maximum_property"
                                id="maximum_properties" aria-describedby="emailHelp"
                                placeholder="Enter maximum property" value="{{ old('maximum_property') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="required form-label" for="maximum_shift">Maximum Shift</label><br>
                            <input type="number" class="form-control form-control-solid" name="maximum_shift"
                                id="maximum_shifts" aria-describedby="emailHelp" placeholder="Enter maximum shift"
                                value="{{ old('maximum_shift') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="form-group">
                            <label class="required form-label" for="maximum_checkpoint">Maximum
                                Checkpoint</label><br>
                            <input type="number" class="form-control form-control-solid" name="maximum_checkpoint"
                                id="maximum_checkpoints" aria-describedby="emailHelp"
                                placeholder="Enter maximum checkpoint" value="{{ old('maximum_checkpoint') }}"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="form-group">
                            <label class="required form-label" for="maximum_guards">Maximum Guards</label><br>
                            <input type="number" class="form-control form-control-solid" name="maximum_guards"
                                id="maximum_guards" aria-describedby="emailHelp" placeholder="Enter maximum guards"
                                value="{{ old('maximum_guards') }}" required>
                        </div>
                    </div>
                    <div class="col-md-6  mt-5">
                        <div class="form-group">
                            <label class="required form-label" for="messenger">Messenger</label><br>
                            <select class="form-select form-select-solid" id="messenger" name="messenger"
                                aria-label="Floating label select example" required>
                                <option value="">Choose</option>
                                <option value="1">Enable Messenger Feature</option>
                                <option value="0">Disable Messenger Feature</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-flush shadow-sm mt-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

</x-default-layout>
<script>
    $('#trial_type').on('change', function() {
        $("#hide_trial_days").css('display', (this.value == '') ? 'block' : 'none');
        $("#hide_row").css('display', (this.value == '0') ? 'block' : 'none');
        $("#hide_trial_days").css('display', (this.value == '0') ? 'none' : 'block');
    });
</script>
<script>
    $('#kt_docs_maxlength_basic').maxlength({
        warningClass: "badge badge-warning",
        limitReachedClass: "badge badge-success"
    });
</script>
<script>
    $('#kt_docs_maxlength_textarea').maxlength({
        warningClass: "badge badge-warning",
        limitReachedClass: "badge badge-success"
    });
</script>
<script>
    function toggleSwitch() {
        const checkbox = document.getElementById("status");

        const label = document.querySelector(".form-check-label");

        if (checkbox.checked) {
            label.textContent = "Active Status";
            checkbox.value = "1";
        } else {
            label.textContent = "Inactive Status";
            checkbox.value = "0";
        }
    }
</script>
<script>
    @if (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });
    @endif
</script>
