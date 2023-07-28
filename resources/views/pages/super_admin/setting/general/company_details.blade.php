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
                            <li class="breadcrumb-item text-bg text-hover-primary">Company Details</li>
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
                                            class="nav-link rounded-bottom-0 active" id="div1"><i
                                                class="bi bi-building-fill xyz fs-2"> </i>Company Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.setting.general.notification') }}"
                                            class="nav-link rounded-bottom-0" id="div2"><i
                                                class="bi bi-bell-fill xyz fs-2"> </i> Notification</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('superadmin.setting.general.payment') }}"
                                            class="nav-link rounded-bottom-0" id="div1"><i
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

                    <div class="col-md-12 d-flex flex-stack">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <h5
                                class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                Company Logo</h5>
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            </ul>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <style>
                                .image-input-placeholder {
                                    background-image: url('svg/avatars/blank.svg');
                                }

                                [data-bs-theme="dark"] .image-input-placeholder {
                                    background-image: url('svg/avatars/blank-dark.svg');
                                }
                            </style>
                            <div class="image-input image-input-circle" data-kt-image-input="true"
                                style="background-image: url(/assets/media/svg/avatars/blank.svg)">
                                <!--begin::Edit button-->
                                <label data-bs-dismiss="click">
                                    <span class="btn btn-primary style="color: #244B8A;">Change Logo</span>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="border: 1px solid #a1a5b7; background-image: url(http://127.0.0.1:8000/assets/media/features-logos/yarn.png)">
                                </div>
                                <!--end::Image preview wrapper-->
                                <!--end::Remove button-->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_property">Company
                                        Name</label><br>
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_property" id="maximum_properties" aria-describedby="emailHelp"
                                        placeholder="Enter Company Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_shift">Legal Name</label><br>
                                    <input type="text" class="form-control form-control-solid" name="maximum_shift"
                                        id="maximum_shifts" aria-describedby="emailHelp" placeholder="Enter Legal Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_checkpoint">Company Phone
                                        Number</label><br>
                                    <input type="number" class="form-control form-control-solid"
                                        name="maximum_checkpoint" id="maximum_checkpoints" aria-describedby="emailHelp"
                                        placeholder="Enter Company Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Company
                                        Email</label><br>
                                    <input type="email" class="form-control form-control-solid" name="maximum_guards"
                                        id="maximum_guards" aria-describedby="emailHelp"
                                        placeholder="Enter Company Email" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Company
                                        Address</label><br>
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_guards" id="maximum_guards" aria-describedby="emailHelp"
                                        placeholder="Enter Company Address" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Company
                                        Website</label><br>
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_guards" id="maximum_guards" aria-describedby="emailHelp"
                                        placeholder="Enter Company Website" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Contact
                                        Person</label><br>
                                    <input type="text" class="form-control form-control-solid"
                                        name="maximum_guards" id="maximum_guards" aria-describedby="emailHelp"
                                        placeholder="Enter Contact Person" required>
                                </div>
                            </div>
                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="maximum_guards">Country</label><br>
                                    <select class="form-select form-select-solid" id="messenger" name="messenger"
                                        aria-label="Floating label select example" required>
                                        <option value="">Choose</option>
                                        <option value="">USA</option>
                                        <option value="">INDIA</option>
                                        <option value="">Europe</option>
                                        <option value="">Brazil</option>
                                        <option value="">China</option>
                                        <option value="">Mexico</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6  mt-5">
                                <div class="form-group">
                                    <label class="required form-label" for="messenger">City</label><br>
                                    <select class="form-select form-select-solid" id="messenger" name="messenger"
                                        aria-label="Floating label select example" required>
                                        <option value="">Choose</option>
                                        <option value="">Torento</option>
                                        <option value="">Delhi</option>
                                        <option value="">Shanghai</option>
                                        <option value="">Chesapeake</option>
                                        <option value="">Hampton</option>
                                        <option value="">Norfolk</option>
                                    </select>
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
