@extends('backend.layout.app')
@section('content')
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="content-page">
        <div class="content">
            <div class="col-md-12 mt-3 mb-2">
                <div class="card p-2">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="user-box text-center mt-3">
                                <img src="{{ asset('uploads/' . Auth::user()->thumbnail) }}" alt="user-img"
                                    title="Customer Image" class="rounded-circle img-thumbnail" width="150">
                                <div class="font-weight-bold mt-2">
                                    <i class="mdi mdi-account mr-2" style="font-size: 18px"></i>
                                    {{ uppercase($order->customer->name) }}
                                </div>
                                <div class="font-weight-bold mt-2">
                                    <i class="mdi mdi-phone ml-4 mr-2" style="font-size: 18px"></i>
                                    {{ uppercase($order->customer->number) }}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h2>Customer Order Details</h2>
                                    </div>
                                    <div class="col-md-3 mt-1 text-right">
                                        <a href="{{ url('order') }}" class="btn btn-sm btn-primary"><i
                                                class="fa fa-arrow-alt-circle-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>

                                                @foreach ($order->products as $pp)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $pp->name }}</td>
                                                        <td>{{ $pp->pivot->quantity }}</td>
                                                        <td>{{ numberformat($pp->price) }}</td>
                                                        <td>{{ numberformat($pp->price * $pp->pivot->quantity) }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-10">
                                        <table class="table table-sm table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Grand Total</th>
                                                    <th>Paid Amount</th>
                                                    <th>Remaining Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Order # {{ $order->id }}</td>
                                                    <td>{{ numberformat($order->total_amount) }}</td>
                                                    <td>{{ numberformat($order->paid) }}</td>
                                                    <td>{{ numberformat($order->due) }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="col-md-2 mt-sm-3 text-right">
                                        <a href="{{ url('invoice/' . $order->id) }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection()
