<x-default-layout>
    {{-- Remove Arrrow from inout fields --}}
    <style>
        .wth {
            width: 20%;
        }
    </style>
    {{-- Remove Arrrow from inout fields --}}

    {{-- Top Section Start --}}
    <div class="card shadow-sm mt-5">
        <div class="card-body">
            <div id="kt_app_toolbar_container" class="d-flex flex-stack ">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                    <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                        System Configuration Settings
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="javascript:void(0);"
                                class="text-muted">Settings</a>
                        </li>
                        <li class="breadcrumb-item text-muted"> > </li>
                        <li class="breadcrumb-item text-bg text-hover-primary">System Configuration Settings</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <a href="#" class="btn btn-sm fw-bold btn-primary"> Go Back </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Top Section End --}}


    {{-- Main Start --}}
    <div class="row">
        {{-- Left Section Start --}}
        <div class="col-md-6">
            {{-- Property Owner Configurations Start --}}
            <div class="col-md-12">
                <div class="card shadow-sm mt-5">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Property Owner Configurations</h3>
                    </div>
                    <div class="card-body py-5">
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Customer Registration &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" role="switch"
                                                value="1" id="status" checked onchange="isChecked()">
                                            <label class="form-check-label text-dark fs-5 fw-bold" for="status"
                                                id="statusLabel">Enable</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Property Owner Log In &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status" role="switch"
                                                value="1" id="status" checked onchange="isChecked()">
                                            <label class="form-check-label text-dark fs-5 fw-bold" for="status"
                                                id="statusLabel">Enable</label>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Passwords Length &nbsp;<i class="bi bi-info-circle"></i>
                                        </p>
                                        <div class="row flex-end">
                                            <div class="col-auto">
                                                <label for="min_password_length" class="col-form-label">Min.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="min_password_length" id="min_password_length"
                                                    class="form-control" placeholder="2">
                                            </div>
                                            <div class="col-auto">
                                                <label for="max_password_length" class="col-form-label">Max.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="max_password_length" id="max_password_length"
                                                    class="form-control" placeholder="10">
                                            </div>
                                        </div>

                                    </div>
                                    <hr>
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Property Maximum Images &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <div class="row flex-end">
                                            <div class="col-auto">
                                                <label for="min_password_length" class="col-form-label">Min.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="min_password_length" id="min_password_length"
                                                    class="form-control" placeholder="2">
                                            </div>
                                            <div class="col-auto">
                                                <label for="max_password_length" class="col-form-label">Max.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="max_password_length" id="max_password_length"
                                                    class="form-control" placeholder="10">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Checkpoint Maximum Images &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <div class="row flex-end">
                                            <div class="col-auto">
                                                <label for="min_password_length" class="col-form-label">Min.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="min_password_length" id="min_password_length"
                                                    class="form-control" placeholder="2">
                                            </div>
                                            <div class="col-auto">
                                                <label for="max_password_length" class="col-form-label">Max.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="max_password_length" id="max_password_length"
                                                    class="form-control" placeholder="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12 text-end">
                                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                                            <button type="submit" class="submit_btn">Save Changes</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            {{-- Property Owner Configurations Start Start --}}

            {{-- Cronjob Settings Start --}}
            <div class="col-md-12">
                <div class="card shadow-sm mt-5">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Cronjob Settings</h3>
                    </div>
                    <div class="card-body py-5">
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Active Cronjob &nbsp;<i class="bi bi-info-circle"></i>
                                        </p>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status"
                                                role="switch" value="1" id="status" checked
                                                onchange="isChecked()">
                                            <label class="form-check-label text-dark fs-5 fw-bold" for="status"
                                                id="statusLabel">Enable</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Data Back-up Duration &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <button type="button" class="btn btn-success me-2">Take Backup</button>
                                    </div>
                                    <hr>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">CronJob Link &nbsp;<i class="bi bi-info-circle"></i>
                                        </p>
                                        <div class="row flex-end">
                                            <div class="col-auto">
                                                <input type="text" name="min_password_length" id="min_password_length"
                                                    class="form-control" placeholder="Enter cronjob link">
                                                <span class="form-text text-muted">Last Cronjob Run: 2018-03-07,
                                                    14:55</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12 text-end">
                                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                                            <button type="submit" class="submit_btn">Save Changes</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- Cronjob Settings End --}}

        </div>
        {{-- Left Section End --}}

        {{-- Right Section Start --}}
        <div class="col-md-6">

            {{-- Basic Configurations Start --}}
            <div class="col-md-12">
                <div class="card shadow-sm mt-5">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Basic Configurations</h3>
                    </div>
                    <div class="card-body py-5">
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6 required">Choose Time zone &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                                <select name="timezone" class="wth form-select form-select form-select-solid"
                                                id="subscription_type" aria-label="Floating label select example">
                                                    <option value="">Choose</option>
                                                    <option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
                                                    <option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
                                                    <option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
                                                    <option value="US/Alaska">(GMT-09:00) Alaska</option>
                                                    <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
                                                    <option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
                                                    <option value="US/Arizona">(GMT-07:00) Arizona</option>
                                                    <option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                    <option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
                                                    <option value="America/Managua">(GMT-06:00) Central America</option>
                                                    <option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
                                                    <option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                                                    <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                    <option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                    <option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
                                                    <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                                                    <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                                                    <option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
                                                    <option value="America/Manaus">(GMT-04:00) Manaus</option>
                                                    <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                    <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                                                    <option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
                                                    <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
                                                    <option value="America/Godthab">(GMT-03:00) Greenland</option>
                                                    <option value="America/Montevideo">(GMT-03:00) Montevideo</option>
                                                    <option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
                                                    <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                    <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                    <option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                                                    <option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                                                    <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                                                    <option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                                                    <option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                                                    <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                                                    <option value="Africa/Lagos">(GMT+01:00) West Central Africa</option>
                                                    <option value="Asia/Amman">(GMT+02:00) Amman</option>
                                                    <option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                                                    <option value="Asia/Beirut">(GMT+02:00) Beirut</option>
                                                    <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                    <option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
                                                    <option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                                                    <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                    <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                    <option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
                                                    <option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                                                    <option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                                                    <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                                    <option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
                                                    <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                    <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
                                                    <option value="Asia/Baku">(GMT+04:00) Baku</option>
                                                    <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                    <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                    <option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
                                                    <option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                                                    <option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                                                    <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
                                                    <option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
                                                    <option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
                                                    <option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
                                                    <option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
                                                    <option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                    <option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
                                                    <option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                                                    <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
                                                    <option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                    <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                    <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                                    <option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                    <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                    <option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
                                                    <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                    <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                    <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                    <option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                                                    <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                    <option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
                                                    <option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
                                                    <option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                                                    <option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
                                                    <option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                    <option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
                                                </select>
                                    </div>
                                    <hr>
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6 required">Date Format &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <select class="wth form-select form-select form-select-solid"
                                            id="subscription_type" name="subscription_type"
                                            aria-label="Floating label select example">
                                            <option value="">Choose</option>
                                            <option value="ddmmyyyy">ddmmyyyy</option>
                                            <option value="dd/mm/yyyy">dd/mm/yyyy</option>
                                            <option value="mm/dd/yyyy">mm/dd/yyyy</option>
                                            <option value="dd-mm-yyyy">dd-mm-yyyy</option>
                                            <option value="mm-dd-yyyy">mm-dd-yyyy</option>
                                            <option value="Month dd, yyyy">Month dd, yyyy</option>
                                        </select>
                                    </div>
                                    <hr>

                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6 fw-bold required">Time Format &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <div class="row flex-end">
                                            <div class="form-check form-check-custom form-check-solid">
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="12_hours"
                                                        name="time_format" id="12_hours" />
                                                </div>
                                                <div class="col-auto me-4">
                                                    <label class="form-check-label" for="12_hours">12 Hours</label>
                                                </div>
                                                <div class="col-auto">
                                                    <input class="form-check-input" type="radio" value="24_hours"
                                                        name="time_format" id="24_hours" />
                                                </div>
                                                <div class="col-auto">
                                                    <label class="form-check-label" for="24_hours">24 Hours</label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12 text-end">
                                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                                            <button type="submit" class="submit_btn">Save Changes</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- Basic Configurations End --}}

            {{-- Chatting Configurations Start --}}
            <div class="col-md-12">
                <div class="card shadow-sm mt-5">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Chatting Configurations</h3>
                    </div>
                    <div class="card-body py-5">
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Maximum Media Upload &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <div class="row flex-end">
                                            <div class="col-auto">
                                                <label for="max_password_length" class="col-form-label">Minutes</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="number" name="min_password_length" id="min_password_length"
                                                    class="form-control" placeholder="20 Minute">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Maximum Share Limit &nbsp;<i
                                                class="bi bi-info-circle"></i></p>
                                        <div class="row flex-end">
                                            <div class="col-auto">
                                                <label for="max_password_length" class="col-form-label">Max.</label>
                                            </div>
                                            <div class="col-auto">
                                                <input type="number" name="max_password_length" id="max_password_length"
                                                    class="form-control" placeholder="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12 text-end">
                                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                                            <button type="submit" class="submit_btn">Save Changes</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- Chatting Configurations End --}}

            {{-- Guard Configurations Start --}}
            <div class="col-md-12">
                <div class="card shadow-sm mt-5">
                    <div class="card-header">
                        <h3 class="card-title fw-bold">Guard Configurations</h3>
                    </div>
                    <div class="card-body py-5">
                        <form action="javascript:void(0);">
                            <div class="row">
                                <div class="flex-grow-1">
                                    <div class="d-flex flex-stack flex-wrap">
                                        <p class="text-dark fs-6">Passwords Length &nbsp;<i class="bi bi-info-circle"></i>
                                        </p>
                                        <div class="row flex-end">
                                            <div class="col-auto">
                                                <label for="min_password_length" class="col-form-label">Min.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="min_password_length" id="min_password_length"
                                                    class="form-control" placeholder="2">
                                            </div>
                                            <div class="col-auto">
                                                <label for="max_password_length" class="col-form-label">Max.</label>
                                            </div>
                                            <div class="col-auto wth">
                                                <input type="number" name="max_password_length" id="max_password_length"
                                                    class="form-control" placeholder="10">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12 text-end">
                                            <button type="button" class="btn btn-secondary me-2">Cancel</button>
                                            <button type="submit" class="submit_btn">Save Changes</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            {{-- Guard Configurations End --}}

        </div>
        {{-- Right Section End --}}

    </div>

    {{-- Main End --}}



</x-default-layout>
<script>
    // for checkbox status
    function isChecked() {
        var checkboxes = document.querySelectorAll(".form-check-input");
        for (var i = 0; i < checkboxes.length; i++) {
            var checkbox = checkboxes[i];
            var label = checkbox.nextElementSibling;

            if (checkbox.checked) {
                label.textContent = "Enable";
            } else {
                label.textContent = "Disable";
            }
        }
        // var isChecked = $('#status').is(':checked');
        // if (isChecked == true) {
        //     statusLabel.textContent = "Active Status";
        //     $('#status').val(1);
        // } else {
        //     statusLabel.textContent = "Inactive Status";
        //     $('#status').val(0);
        // }
    }
    // for checkbox status

</script>