<x-default-layout>
    {{-- Remove Arrrow from inout fields --}}
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }

        /* .form-control {
            width: 500px;
        } */
    </style>
    {{-- Remove Arrrow from inout fields --}}
    <div class="row mb-5 mt-5">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                            General Settings</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="#" class="text-muted">Settings</a>
                            </li>
                            <li class="breadcrumb-item text-muted"> > </li>
                            <li class="breadcrumb-item text-bg">General Settings</li>
                            <li class="breadcrumb-item text-muted"> > </li>
                            <li class="breadcrumb-item text-bg text-hover-primary">Payment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row mb-5 mt-5">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-grid">
                                <ul class="nav nav-tabs nav-pills flex-nowrap text-nowrap">
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.setting.general.company_details') }}"
                                            class="nav-link rounded-bottom-0" id="div1"><i
                                                class="bi bi-building-fill xyz fs-2"> </i>Company Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.setting.general.notification') }}"
                                            class="nav-link rounded-bottom-0" id="div2"><i
                                                class="bi bi-bell-fill xyz fs-2"> </i> Notification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.setting.general.payment') }}"
                                            class="nav-link rounded-bottom-0 active" id="div1"><i
                                                class="bi bi-credit-card-fill xyz fs-2"> </i>Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.setting.general.support') }}"
                                            class="nav-link rounded-bottom-0" id="div1"><i
                                                class="bi bi-hand-index-fill xyz fs-2"> </i>Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form>
                <div class="card card-flush shadow-sm">
                    <div class="card-body py-5">
                        <div class="card-body">
                            <label class="form-label" for="maximum_property">
                                <h3><b><u>Payment Settings For Stripe
                                    </b></u></h3>
                            </label><br>
                            <div class="row">
                                <div class="col-md-2 mt-5">
                                    <div class="form-group">
                                        <label class="required form-label" for="maximum_property">Stripe Public Key
                                            :</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-solid"
                                            name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                            placeholder="Enter Stripe Public Key" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 mt-5">
                                    <div class="form-group">
                                        <label class="required form-label" for="maximum_property">Stripe Private Key
                                            :</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-solid"
                                            name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                            placeholder="Enter Stripe Private Key" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 mt-5">
                                    <div class="form-group">
                                        <label class="required form-label" for="maximum_property">API Signature
                                            :</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-solid"
                                            name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                            placeholder="Enter API Signature" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 mt-5">
                                    <div class="form-group">
                                        <label class="required form-label" for="maximum_property">Status
                                            :</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input body-toggle" type="checkbox"
                                                role="switch" id="flexSwitchCheckDefault"
                                                onchange="toggleSwitch()">
                                            {{-- <label class="form-check-label"
                                                for="flexSwitchCheckDefault">Inactive</label> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-flush shadow-sm mt-5">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12 text-end">
                                <a href="#" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn submit_btn">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--end::Tables widget 16-->
</x-default-layout>