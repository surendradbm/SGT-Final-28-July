<x-default-layout>

{{-- First Section Starts --}}
<div class="card shadow-sm guard-header">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-lg-6 col-md-4 col-12">
                <div class="title">Language Manager</div>
            </div>
            <div class="col-lg-6 col-md-4 col-12 text-end">
                <a href="javascript:void(0);" class="btn btn-primary inverse" data-bs-toggle="modal" data-bs-target="#add_language_modal">+ Add Language</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12 mb-3">
                <figure class="info-card card">
                    <div class="card-body p-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M15.2834 18.684L12.3455 15.672L12.3802 15.636C14.3397 13.3765 15.8037 10.7031 16.6713 7.8H20.0602V5.4H11.9639V3H9.6506V5.4H3V7.8H14.4737C13.6988 10.104 12.4728 12.3 10.8072 14.22C9.73157 12.984 8.84096 11.628 8.13542 10.2H5.82217C6.66651 12.156 7.82313 14.004 9.26892 15.672L3.38169 21.696L5.0241 23.4L10.8072 17.4L14.4043 21.132L15.2834 18.684ZM21.7952 12.6H19.4819L14.2771 27H16.5904L17.8858 23.4H23.3798L24.6867 27H27L21.7952 12.6ZM18.7648 21L20.6386 15.804L22.5123 21H18.7648Z" fill="#244B8A"/>
                            </svg>
                            <label>Total<br>Languages</label>
                        </div>
                        <div>
                            <h2 class="count">5</h2>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-3">
                <figure class="info-card card">
                    <div class="card-body p-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M20.508 9.696L12.6 17.604L8.292 13.308L6.6 15L12.6 21L22.2 11.4L20.508 9.696ZM15 3C8.376 3 3 8.376 3 15C3 21.624 8.376 27 15 27C21.624 27 27 21.624 27 15C27 8.376 21.624 3 15 3ZM15 24.6C9.696 24.6 5.4 20.304 5.4 15C5.4 9.696 9.696 5.4 15 5.4C20.304 5.4 24.6 9.696 24.6 15C24.6 20.304 20.304 24.6 15 24.6Z" fill="#244B8A"/>
                            </svg>
                            <label>Active <br>Languages</label>
                        </div>
                        <div>
                            <h2 class="count">5</h2>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-3">
                <figure class="info-card card">
                    <div class="card-body p-4">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M15 3C8.4 3 3 8.4 3 15C3 21.6 8.4 27 15 27C21.6 27 27 21.6 27 15C27 8.4 21.6 3 15 3ZM5.4 15C5.4 9.72 9.72 5.4 15 5.4C17.16 5.4 19.2 6.12 20.88 7.44L7.44 20.88C6.12 19.2 5.4 17.16 5.4 15ZM15 24.6C12.84 24.6 10.8 23.88 9.12 22.56L22.56 9.12C23.88 10.8 24.6 12.84 24.6 15C24.6 20.28 20.28 24.6 15 24.6Z" fill="#244B8A"/>
                            </svg>
                            <label>Inactive <br>Languages</label>
                        </div>
                        <div>
                            <h2 class="count">0</h2>
                        </div>
                    </div>
                </figure>
            </div>

        </div>
    </div>
</div>
{{-- First Section Ends --}}

<div class="card card-flush shadow-sm mt-5">
    <div class="card-body py-5">
        <div class="row mt-5">
            <div class="col-12 mb-6">
                <div class="form-group">
                    <h4 class="text-dark">Translation</h4>
                    <span class="text-gray-600">Language: <i class="text-primary fs-6 fw-bold">Spanish</i></span>
                </div>
            </div>
        </div>

        {{-- Table Starts --}}
        <div class="table-responsive mt-5">
            <table class="table table-hover table-rounded border gy-5 gs-7" id="dataTable">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="headCheckbox"
                                    onchange="toggleAllCheckboxes()">
                                <label class="form-check-label" for="headCheckbox">
                                </label>
                            </div>
                        </th>
                        <th>S.No.</th>
                        <th>Type</th>
                        <th>Modules</th>
                        <th>Progress</th>
                        <th>Total Keywords</th>
                        <th>Translated Keywords</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox" value=""
                                    id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                </label>
                            </div>
                        </td>
                        <td>1</td>
                        <td>Guard Application</td>
                        <td>Properties</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 70%;"
                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>
                        </td>
                        <td>7458</td>
                        <td>7458</td>
                        <td>
                            <a href="{{ route('superadmin.language.keywords') }}" class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox" value=""
                                    id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                </label>
                            </div>
                        </td>
                        <td>2</td>
                        <td>Guard Application</td>
                        <td>Login & Forgot Password</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 40%;"
                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                            </div>
                        </td>
                        <td>7458</td>
                        <td>7458</td>
                        <td>
                            <a href="{{ route('superadmin.language.keywords') }}" class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox" value=""
                                    id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                </label>
                            </div>
                        </td>
                        <td>3</td>
                        <td>Guard Application</td>
                        <td>Home screen</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </td>
                        <td>7458</td>
                        <td>7458</td>
                        <td>
                            <a href="{{ route('superadmin.language.keywords') }}" class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox" value=""
                                    id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                </label>
                            </div>
                        </td>
                        <td>4</td>
                        <td>Guard Application</td>
                        <td>Shift</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;"
                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                        </td>
                        <td>7458</td>
                        <td>7458</td>
                        <td>
                            <a href="{{ route('superadmin.language.keywords') }}" class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input body-checkbox" type="checkbox" value=""
                                    id="checkbox1">
                                <label class="form-check-label" for="checkbox1">
                                </label>
                            </div>
                        </td>
                        <td>5</td>
                        <td>Guard Application</td>
                        <td>Timesheet</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 94%;"
                                    aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">94%</div>
                            </div>
                        </td>
                        <td>7458</td>
                        <td>7458</td>
                        <td>
                            <a href="{{ route('superadmin.language.keywords') }}" class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        {{-- Table Ends --}}
    </div>
</div>

{{-- Add Language Modal --}}
<div class="modal fade" id="add_language_modal" tabindex="-1" aria-labelledby="add-language-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ManageConfirmationModalLabel">Add Language</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!--begin::Image input-->
                            <div class="image-input image-input-empty" data-kt-image-input="true">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-80px h-80px"></div>
                                <!--begin::Edit button-->
                                <label class="btn btn-primary btn-sm" data-kt-image-input-action="change" data-bs-dismiss="click"> Upload Icon

                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg, .svg" />
                                    <input type="hidden" name="avatar_remove" />
                                </label>
                                <!--begin::Cancel button-->
                                <span class="" data-kt-image-input-action="cancel" data-bs-dismiss="click">Remove Icon</span>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="required form-label">Language Name</label><br>
                                <input type="text" class="form-control form-control-solid" name="name" id="name" placeholder="Enter Language Name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary ms-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


{{-- Checkbox --}}
<script>
    function toggleAllCheckboxes() {
        var headCheckbox = document.getElementById("headCheckbox");
        // var checkboxes = document.querySelectorAll("tbody input[type='checkbox']");
        var checkboxes = document.querySelectorAll(".body-checkbox");

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = headCheckbox.checked;
        }
    }
</script>
{{-- Checkbox Ends --}}

</x-default-layout>
