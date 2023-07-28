<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{ printHtmlAttributes('html') }}>
<!--begin::Head-->

<head>
    <base href="" />
    <title>{{ config('app.name', 'SGT') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <link rel="canonical" href="" />

    {!! includeFavicon() !!}

    <!--begin::Fonts-->
    {!! includeFonts() !!}
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    @foreach (getGlobalAssets('css') as $path)
        {!! sprintf('<link rel="stylesheet" href="%s">', asset($path)) !!}
    @endforeach
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Vendor Stylesheets(used by this page)-->
    @foreach (getVendors('css') as $path)
        {!! sprintf('<link rel="stylesheet" href="%s">', asset($path)) !!}
    @endforeach
    <!--end::Vendor Stylesheets-->

    <!--begin::Custom Stylesheets(optional)-->
    @foreach (getCustomCss() as $path)
        {!! sprintf('<link rel="stylesheet" href="%s">', asset($path)) !!}
    @endforeach
    <!--end::Custom Stylesheets-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/super_admin.css') }}">
    {{-- <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" {!! printHtmlClasses('body') !!} {!! printHtmlAttributes('body') !!}>

    @include('partials/theme-mode/_init')

    @yield('content')

    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    @foreach (getGlobalAssets() as $path)
        {!! sprintf('<script src="%s"></script>', asset($path)) !!}
    @endforeach
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used by this page)-->
    @foreach (getVendors('js') as $path)
        {!! sprintf('<script src="%s"></script>', asset($path)) !!}
    @endforeach
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(optional)-->
    @foreach (getCustomJs() as $path)
        {!! sprintf('<script src="%s"></script>', asset($path)) !!}
    @endforeach
    <script src="{{ asset('assets/js/custom/apps/calendar/calendar.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
    {{-- <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="assets/plugins/global/plugins.bundle.js"></script> --}}

    <script>
        $(document).ready(function() {
            $("#kt_datatable_dom_positioning").DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +
                    "<'table-responsive'tr>" +
                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        });
    </script>

    {{-- For Deleting Data from Datatable Starts --}}
    <script>
        function deletedData(id, url) {
            // alert(url);
            Swal.fire({
                text: "Are you sure you want to delete Data ?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: true,
                cancelButtonText: "No, cancel",
                confirmButtonText: "Yes, delete!",
                customClass: {
                    cancelButton: "btn fw-bold btn-light",
                    confirmButton: "btn fw-bold btn-theame"
                }
            }).then(function(result) {
                if (result.value) {
                    Swal.fire({
                        text: "You have deleted Data!.",
                        icon: "success",
                        buttonsStyling: true,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-theame",

                        }
                    });
                    $.ajax({
                        url: url,
                        method: 'post',
                        data: {
                            _token: "{{ csrf_token() }}",
                            'id': id,
                        },
                        success: function(data) {
                            location.reload();
                        }
                    });
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Data was not deleted.",
                        icon: "error",
                        buttonsStyling: true,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-theame",
                        }
                    });
                }
            });
        }
    </script>
    {{-- For Deleting Data from Datatable Ends --}}
    <script>
        $(document).ready(function() {
            $("#date").flatpickr({
                dateFormat: "d-m-Y",
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var button = $('.button');
            var slider = $('.slider');
            button.on('click', function(e) {
                if (slider.hasClass('closed')) {
                    // button.text('Map View');
                    slider.toggleClass('closed');
                } else {
                    // button.text('No');
                    slider.toggleClass('closed');
                }

            });
        });
    </script>
</body>
<!--end::Body-->

</html>
