<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">


<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/pages_invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:38:08 GMT -->
<head>
    <title>Ntactit | {{ Request()->route()->getName() }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/uikit.css')}}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <style>
        html,
        body {
            background: #fff !important;
        }

        body> :not(.invoice-print) {
            display: none !important;
        }

        .invoice-print {
            min-width: 768px !important;
            font-size: 15px !important;
        }

        .invoice-print * {
            border-color: #aaa !important;
            color: #000 !important;
        }
    </style>
</head>

<body>
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>

    <!-- Content -->

    <div class="invoice-print p-5">
        <hr class="mb-4">
        <div class="row">
            <div class="col-sm-6 mb-4">
                @foreach($invoices as $invoice)
                <div> <span class="font-weight-bold mb-2">Billed  To:</span> {{ $invoice->client->client_name }}</div>
                <div> <span class="font-weight-bold mb-2">Address:</span> {{ $invoice->client->address }}</div>
                <div><span class="font-weight-bold mb-2">Contact:</span> {{ $invoice->client->contact }}</div>
                <div><span class="font-weight-bold mb-2">Date:</span> {{ $invoice->created_at }}</div>
                <div><span class="font-weight-bold mb-2">Invoice No.:</span><span style="color:red;"> {{ $invoice->invoice_number }}</span></div>
                @endforeach
            </div>
            <div class="col-sm-6 mb-4">
               @foreach($invoices as $invoice)
                <div> <span class="font-weight-bold mb-2">Company:</span> {{ $invoice->client->company }}</div>
                <div> <span class="font-weight-bold mb-2">Customer Number:</span> {{ $invoice->client->customer_number }}</div>
                <div><span class="font-weight-bold mb-2">Email:</span> {{ $invoice->client->email }}</div>
                <div><span class="font-weight-bold mb-2">Printed On:</span> {{ \Carbon\Carbon::now()->format('l d F, Y') }}</div>
                @endforeach
            </div>
        </div>
        <div class="table-responsive mb-4">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th class="py-3">
                            #
                        </th>
                        <th class="py-3">
                          Quantity
                        </th>
                        <th class="py-3">
                          Description
                        </th>
                        <th class="py-3">
                            Rate
                        </th>
                        <th class="py-3">
                            Amount
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                       $items =\Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument::where('client_id',$client_id)->where('status','pending')->get();
                       $subtotal =\Modules\BusinessDevelopment\App\Models\BusinessDevelopmentDocument::where('client_id',$client_id)->where('status','pending')->sum('amount');
                       $tax =0.25 * $subtotal;
                    @endphp
                    @foreach($items as $i =>$item)
                    <tr>
                        <td class="py-3">
                            <div class="font-weight-semibold">{{ $i + 1 }}</div>
                        </td>
                        <td class="py-3">
                            <strong>{{ $item->quantity }}</strong>
                        </td>
                        <td class="py-3">
                           {{ $item->description }}
                        </td>
                        <td class="py-3">
                           {{ number_format($item->rate) }}
                        </td>
                        <td class="py-3">
                           {{ number_format($item->amount) }}
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="4" class="text-right py-3">
                                Subtotal:
                            <br> Tax(18%):
                            <br>
                            <span class="d-block text-big mt-2">Total:</span>
                        </td>
                        <td class="py-3">
                            <strong>Ugx {{ number_format($subtotal)}}</strong>
                            <br>
                            <strong>Ugx {{ number_format($tax)}}</strong>
                            <br>
                            <strong class="d-block text-big mt-2">Ugx {{ number_format($subtotal + $tax)}}</strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-muted">
            <strong>Prepared By:</strong> {{ auth()->user()->name }}<br>
            ...............................
        </div>
    </div>

    <!-- / Content -->

    <!-- Core scripts -->
    <script src="{{ asset('admin/assets/js/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>
    <script src="{{ asset('admin/assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('admin/assets/js/demo.js')}}"></script><script src="{{ asset('admin/assets/js/analytics.js')}}"></script>
    <script>
        // -------------------------------------------------------------------------
        // Print on window load

        $(function() {
            window.print();
        });
    </script>
</body>


<!-- Mirrored from html.phoenixcoded.net/empire/bootstrap/default/pages_invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 09:38:08 GMT -->
</html>

