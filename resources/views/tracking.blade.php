<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Track Order</title>
        <script src="{{ asset('assets/js/tracking-layout.js') }}" async></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/cart/ordertracking.css') }}">
    </head>
    <body>
        <div class="card">
            <div class="title">Purchase Receipt</div>
            <div class="info">
                <div class="row">
                    <div class="col-7"> <span id="heading">Date</span><br> <span id="details-date"></span> </div>
                    <div class="col-5 pull-right"> <span id="heading">Order No.</span><br> <span id="details-kode"></span> </div>
                </div>
            </div>
            <div class="pricing">
            </div>
            <div class="total">
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3"><big id="details-bayar"></big></div>
                </div>
            </div>
            <div class="tracking">
                <div class="title">Tracking Order</div>
            </div>
            <div class="progress-track">
                <ul id="progressbar">
                    <li class="step0" id="step1">Ordered</li>
                    <li class="step0 text-center" id="step2">Shipped</li>
                    <li class="step0 text-right" id="step3">On the way</li>
                    <li class="step0 text-right" id="step4">Delivered</li>
                </ul>
            </div>
            <div class="footer">
                <div class="row">
                    <div class="col-10">Want any help? Please &nbsp;<a> contact us</a></div>
                </div>
            </div>
        </div>
    </body>
</html>