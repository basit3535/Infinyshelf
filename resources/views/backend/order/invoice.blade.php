<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap" rel="stylesheet">
    <link href="{{asset('theme/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Invoice</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="{{asset('theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" id="bootstrap-css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: white !important;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

        }
        @media print {
            .card {
                -webkit-print-color-adjust: exact !important; 
                color-adjust: exact !important;                 
                print-color-adjust: exact !important;    
                background-color: transparent !important;     
            }   
            table{
                background: transparent !important;
            }     
            .bg-image{
                background-image: url({{asset('images/bg-logo.png')}}); 
                background-repeat: no-repeat;
                -webkit-print-color-adjust: exact;
                background-position : center bottom;
            }   
        }
        
        /* @page {
                size: A4 landscape;
        } */
        /* body.A4.landscape .sheet {
                width: 297mm; 
        } */
        .card-body{
            padding-top:0 !important; 
            padding-left:1rem !important; 
            padding-right:1rem !important; 
            padding-bottom:0 !important; 
            
        }
        .bg-image{
            background-image: url({{asset('images/bg-logo.png')}}); 
            background-repeat: no-repeat;
            background-position : center bottom;
        }
        .btn{
            border-radius: 5px;
        }
        .btn-primary{
            background-color: rgb(62, 62, 123) !important;
            border-color: rgb(62, 62, 123) !important;
        }
        div,h4,h5,p,strong,small,tr,td,th{
            color: black !important;
        }
    </style>
</head>

<body class="A4 landscape">
    <section class="container-fluid sheet padding-10mm">
        <div class="row mt-2 mb-2">
            <div class="col-3">
                <button class="btn btn-primary btn-sm text-uppercase" id="print">Print Invoice <i class="ml-2 fa fa-print"></i></button>
            </div>

            <div class="col-6"></div>

            <div class="col-3  text-right">
                <a href="{{url('customer')}}" class="btn btn-primary btn-sm text-uppercase" id="back">Back <i class="ml-2 fa fa-arrow-alt-circle-left"></i></a>
            </div>
        </div>

        <div class="card bg-image">

            <div class="bg-transparent">
                <div class="row">
                    <div class="col-md-4 mt-3 text-left pl-5">
                        <h4 class="">Contact #</h4>
                        <p><b>Rao Kamran :</b><i class="fa fa-whatsapp ml-2 text-success" aria-hidden="true"></i> 0300-0990085</p>

                        <p><b>Rao Irfan :</b><i class="fa fa-whatsapp ml-2 text-success" aria-hidden="true"></i>  0304-0112237</p>

                        <h4 class="">Address #</h4>
                        <p>Jhang Road Sadhar Bypass Faisalabad.</p>

                    </div>

                    <div class="col-md-4 text-center">
                        <img src="{{asset('images/sms-logo.png')}}" alt="Rao Group" height="200">
                        <h5 class="text-uppercase"><strong style="color:#1d7892 !important">Poultry Material Store</strong></h5>

                    </div>
                    
                    
                    <div class="col-md-4 text-center mt-4">
                        <h3 class="text-uppercase"><strong>Invoice :</strong> # {{$order->id }}</h3>

                        <h4 style="line-height: 30px;"> We Deal in all <br> kinds  of poultry <br> equipments & parts</h4>
                    </div>                
                
                </div>
            </div>

            <div class="card-body">
                <div class="row">

                    <div class="col-md-4 mt-3 text-center">
                        <strong>Customer Name : </strong>
                        <p>{{uppercase($order->customer->name)}}</p>
                    </div>
                    
                    <div class="col-md-4 mt-3 text-center">
                        <strong>Customer PH # : </strong>
                        <p>{{uppercase($order->customer->number)}}</p>
                    </div>

                    <div class="col-md-4 mt-3 pl-5">
                        <strong>Bill Date : </strong>
                        <p>{{ $order->created_at->format(' jS F Y') }}</p>
                    </div>
                   

                    <div class="col-md-11 ml-auto mr-auto mb-1">
                        <table class=" table-borderless table-sm" style=" width:100%">
                            <thead class="border">
                                <tr class="border">
                                    <th class="text-center text-uppercase" colspan="5">Bill Detail / Summary</th>
                                </tr>
                                <tr>
                                    <th>#</th>
                                    <th>Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
                                </tr>
                            </thead>
                            <tbody class="border">
                                <?php $i = 1 ;?>
                                @foreach ($order->products as $product)
                                    <tr class="border">
                                        <td>{{$i++}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{numberformat($product->price)}}</td>
                                        <td>{{$product->pivot->quantity}}</td>
                                        <td>{{numberformat($product->price * $product->pivot->quantity)}}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <th colspan="4" class="text-center">Grand Total : </th>
                                    <th>{{numberformat($order->total_amount + $order->discount)}} <sub> -/only</sub></th>
                                </tr>
                                <tr>
                                    <td colspan="4" class="text-center">After Discount : </td>
                                    <td>{{numberformat($order->total_amount)}}</td>
                                </tr>

                                <tr>
                                    <th colspan="4" class="text-center">Paid Amount : </th>
                                    <th>{{numberformat($order->paid)}} <sub> -/only</sub></th>
                                </tr>

                                
                                <tr>
                                    <td colspan="4" class="text-center">Remaning Amount : </td>
                                    <td>{{numberformat($order->due)}}</td>
                                </tr>

                                
                                
                            </tbody>
                        </table>
                    </div>

                    {{-- <div class="col-md-8 text-center" style="margin-top:8rem;">
                        <p style=" font-family: 'Rubik Bubbles', cursive; font-size:34px; ">
                            Thanks For Visiting..!!                      
                        </p>
                        <small style="font-family: 'Rubik Bubbles', cursive;">RAO POULTRY MATERIAL STORE</small>
                    </div> --}}

                    {{-- <div class="col-md-4 mt-3">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase" colspan="2">Grand Total</th>
                                </tr>
                                <tr>
                                    <th>Total Amount</th>
                                    <th class="text-center">{{numberformat($order->total_amount + $order->discount)}}</th>
                                </tr>

                                <tr>
                                    <th>Total Discount</th>
                                    <th class="text-center">{{numberformat($order->discount)}}</th>
                                </tr>
                                
                                <tr>
                                    <th>Net Total</th>
                                    <th class="text-center">{{numberformat($order->total_amount)}}</th>
                                </tr>
                                
                                <tr>
                                    <th>Paid Amount</th>
                                    <th class="text-center">{{numberformat($order->paid)}}</th>
                                </tr>
                                
                                <tr>
                                    <th>Remaning Amount</th>
                                    <th class="text-center">{{numberformat($order->due)}}</th>
                                </tr>
                                
                                <tr>
                                    <th style="border:none !important;"><h4>Billing Amount</h4></th>
                                    <th class="text-center font-weight-bold" style="border:none !important; "><h4>{{numberformat($order->paid)}} -/</h4></th>
                                </tr>

                            </thead>
                        </table>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#print').click(function() {
                $(this).hide();
                $('#back').hide();
                event.preventDefault();
                window.print();
                $(this).show();
            });
        });
    </script>
    
</body>
</html>
