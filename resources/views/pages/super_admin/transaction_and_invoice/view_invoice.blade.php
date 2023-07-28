<x-default-layout>
    <style>

    </style>


    <div class="card card-flush shadow-sm mt-5">
        <div class="card-body">
            <div class="mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-md-9">
                        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                            <h1 class="page-heading d-flex text-bg fw-bold fs-3 flex-column justify-content-center my-0">
                                Invoice</h1>

                        </div>
                    </div>
                    <div class="col-md-3 text-end">
                        <button id="print" class="btn btn-primary btn-sm text-capitalize border-0"
                            data-mdb-ripple-color="dark"><i class="fas fa-print text-white"></i> Print</button>
                        {{-- <button class="btn btn-info btn-sm text-capitalize" data-mdb-ripple-color="dark"><i
                                class="far fa-file-pdf text-white"></i> Export</button> --}}
                    </div>

                </div>





                <div id="printTable">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="http://127.0.0.1:8000/assets/media/invo.png" style="width: 100%;" alt="">
                            <ul class="list-unstyled float-end" style="position: absolute;
                            top: 140px;
                            right: 70px;
                            line-height: 1.9;">
                                <li style="font-size: 30px;font-weight: 600;">Invoice No: 56446546454</li>
                                <li style="font-size: 30px;font-weight: 600;">Issue Date: 17 May, 2023</li>
                                <li style="font-size: 30px;font-weight: 600;">Issue Date: 17 May, 2023</li>
                                <li style="font-size: 30px;font-weight: 600;">Issue Date: 17 May, 2023</li>

                            </ul>
                        </div>

                        {{-- <div class="col-md-12">
                            <img src="http://127.0.0.1:8000/assets/media/top.png" style=" width: 100%;" alt="">
                        </div> --}}


                        {{-- <div class="col-md-12" style="position: absolute;
                        top: 408px;
                        right: 184px;">
                            <ul class="list-unstyled float-end">
                                <li style="font-size: 30px; color: red;">Company</li>
                                <li>123, Elm Street</li>
                                <li>123-456-789</li>
                                <li>mail@mail.com</li>
                            </ul>
                        </div> --}}

                    </div>
               </div>

            </div>
        </div>
    </div>









</x-default-layout>
<script>
    function printData() {
        var printContents = document.getElementById('printTable').innerHTML;
        // var originalContents = document.body.innerHTML;
        // document.body.innerHTML = originalContents;
        document.body.innerHTML = printContents;
        window.print();
    }

    $('#print').on('click', function() {
        printData();
    });



</script>
