<x-default-layout>

    {{-- First Section Starts --}}
    <div class="card shadow-sm guard-header">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-lg-6 col-md-4 col-12">
                    <div class="title">{{ __('messages.Manage_Subscription') }}</div>
                </div>
                <div class="col-lg-6 col-md-4 col-12 text-end">
                    <a href="{{ route('superadmin.subscription.add') }}" class="btn btn-primary inverse">+ Add
                        {{ __('messages.Subscription') }}</a>
                </div>
                <div class="col-lg-6 col-md-6 col-12 text-end">
                    {{-- Breadcrumbs (Start) --}}
                    <ul class="breadcrumb">
                        <li><a href="{{ route('superadmin.subscription.all') }}">{{ __('messages.Subscription') }}</a>
                        </li>
                        <li><i class="fas fa-chevron-right"></i></li>
                        <li class="active"><a
                                href="{{ route('superadmin.subscription.all') }}">{{ __('messages.Manage_Subscription') }}</a>
                        </li>
                    </ul>
                    {{-- Breadcrumbs (End) --}}
                </div>
            </div>
        </div>
    </div>
    {{-- First Section Ends --}}

    <div class="card card-flush shadow-sm mt-5">
        <div class="card-body">
            {{-- SearchBar, Filter, Export Starts --}}
            <div class="flex-grow-1">
                <div class="d-flex flex-stack flex-wrap">
                    <div class="col-md-4">
                        {{-- Search Keyword Start --}}
                        {{-- <input type="text" class="form-control" placeholder="Search by name..."> --}}
                        {{-- Search Keyword End --}}
                    </div>
                    <div class="">
                        {{-- Filter button Start --}}
                        {{-- <button id="filterButton" type="button" class="btn btn-theame me-3 dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            Filter
                        </button>
                        <div id="filterDropdown" class="dropdown-menu filter_dropdown">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="dropdown-item">
                                        <label for="columns">Columns:</label>
                                        <select id="columns" class="form-control">
                                            <option value="">Select Filter</option>
                                            <option value="Language">Language </option>
                                            <option value="Total Keywords">Total Keywords</option>
                                            <option value="Translated Keywords">Translated Keywords</option>
                                            <option value="Status">Status</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dropdown-item">
                                        <label for="operator">Operator:</label>
                                        <select id="operator" class="form-control">
                                            <option value="equal">Select Filter</option>
                                            <option value="equal">Contains</option>
                                            <option value="equal">Equal</option>
                                            <option value="equal">Starts with</option>
                                            <option value="notEqual">Ends with</option>
                                            <option value="greaterThan">Is empty</option>
                                            <option value="lessThan">Is not empty</option>
                                            <option value="lessThan">Is any of</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dropdown-item">
                                        <label for="value">Value:</label>
                                        <input type="text" id="value" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- Filter button End --}}

                        {{-- Export button Start --}}
                        {{-- <button id="aman" type="button" class="btn btn-theame" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span
                                    class="path2"></span></i>
                            Export Report
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 fw-semibold w-200px p-3"
                            data-kt-menu="true">
                            <div class="menu-item"><a href="#" class="menu-link" data-kt-export="csv">Export as
                                    CSV</a></div>
                            <div class="menu-item"><a href="#" class="menu-link" data-kt-export="pdf">Export as
                                    PDF</a></div>
                        </div> --}}
                        {{-- Export button End --}}

                    </div>
                </div>

            </div>
            {{-- SearchBar, Filter, Export  Ends --}}
            {{-- Table Starts --}}
            <div class="mt-5">
                <table class="table table-striped border rounded gy-5 gs-7" id="table-data"
                    style="width:100%">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="headCheckbox"
                                        onchange="toggleAllCheckboxes()">
                                    <label class="form-check-label text-white" for="headCheckbox">{{ __('table.All') }}</label>
                                </div>
                            </th>
                            <th>{{ __('table.s_no') }}</th>
                            <th>{{ __('table.Icon') }}</th>
                            <th>{{ __('table.Title') }}</th>
                            <th>{{ __('table.Type') }}</th>
                            <th>{{ __('table.Monthly_Price') }}</th>
                            <th>{{ __('table.Yearly_Price') }}</th>
                            <th>{{ __('table.Trial_Days') }}</th>
                            <th>{{ __('table.Creation_Date_&_Time') }}</th>
                            <th>{{ __('table.Status') }}</th>
                            <th>{{ __('table.Action') }}</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subscriptions as $key => $data)
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input body-checkbox" type="checkbox" value=""
                                            id="checkbox1">
                                        <label class="form-check-label" for="checkbox1">
                                        </label>
                                    </div>
                                </td>
                                <th>{{ ++$key }}</th>
                                <td>
                                    <img src="{{ asset('/uploads/subscription/' . $data->avatar) }}"
                                        class="image_table" alt="user">
                                </td>
                                <td>{{ $data->subscription_title }}</td>
                                <td>{{ $data->trial_type === '1' ? 'Free' : 'Paid' }}</td>
                                <td>{{ !empty($data->monthly_price) ? '$' . $data->monthly_price : 'N/A' }}</td>
                                <td>{{ !empty($data->yearly_price) ? '$' . $data->yearly_price : 'N/A' }}</td>
                                <td>{{ !empty($data->trial_days) ? $data->trial_days : 'N/A' }}</td>
                                {{-- <td>{{ $data->created_by }}</td> --}}
                                <td>{{ date('d/m/Y, H:i A ', strtotime($data->created_at)) }}</td>
                                <td>

                                    <div class="form-check form-switch">
                                        <input class="form-check-input checkbox" type="checkbox" role="switch"
                                            onclick="update_status('{{ $data->id }}',this)" id="status"
                                            value="{{ $data->status }}"
                                            {{ $data->status === '1' ? 'checked="true"' : '' }} />
                                        <label class="form-check-label" for="status">
                                            {{ $data->status === '1' ? 'Active' : 'Inactive' }}</label>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('superadmin.subscription.edit', $data->id) }}"
                                        class="btn btn-sm btn-active-icon-primary btn-text-primary">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        onclick="deletedData('{{ $data->id }}','{{ route('superadmin.subscription.delete') }}')"
                                        class="btn btn-sm btn-active-icon-danger btn-text-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">{{ __('table.No_record_found') }}</td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
            {{-- Table Ends --}}

        </div>
    </div>




{{-- All Checkbox --}}
<script>
    function toggleAllCheckboxes() {
        var headCheckbox = document.getElementById("headCheckbox");
        var checkboxes = document.querySelectorAll(".body-checkbox");
        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].checked = headCheckbox.checked;
        }
    }
</script>


</x-default-layout>

{{-- Status Updated --}}
<script>
    function update_status(id, e) {
        var status = $(e).is(':checked') ? 1 : 0;
        $.ajax({
            url: "{{ route('superadmin.subscription.status') }}",
            method: 'post',
            data: {
                _token: "{{ csrf_token() }}",
                'id': id,
                'status': status
            },
            success: function(data) {
                toastr.success('success', 'Success! Status Updated');
                toggleSwitch();
            }
        });
    }
</script>
{{-- Toggle Active Inactive --}}
<script>
    function toggleSwitch() {
        var checkboxes = document.querySelectorAll(".checkbox");
        for (var i = 0; i < checkboxes.length; i++) {
            var checkbox = checkboxes[i];
            var label = checkbox.nextElementSibling;

            if (checkbox.checked) {
                label.textContent = "Active";
            } else {
                label.textContent = "Inactive";
            }
        }
    }
</script>
