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

            <!-- end row -->

            <div class="row mt-3 mb-2">
                <div class="col-md-12">
                    <div class="card-box card">
                        <div class="row card-header bg-transparent">
                            <div class="col-md-6">
                                <h2 class="mt-0 mb-3">Pay Remaning Amount</h2>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ url('customer') }}" class="btn btn-success btn-sm"><i
                                        class="fa fa-arrow-alt-circle-left"></i></a>
                            </div>
                        </div>
                        @include('backend.includes.alerts')

                        <form role="form" action="{{ route('order.update', $order->id) }}" method="post">
                            @method('PUT')
                            @csrf
                            <input type="hidden" id="remainingPrice" value="{{ $order->due }}" readonly>
                            <input type="hidden" id="PaidPrice" value="{{ $order->paid }}" readonly>
                            <div class="row">
                                <div class="col-md-3">
                                    <label class="form-label">Customer Name</label>
                                    <input type="text" name="name" value="{{ $order->customer->name }}"
                                        class="form-control" readonly>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Total Amount</label>
                                    <input type="text" name="paid" value="{{ $order->total_amount }}"
                                        class="form-control" readonly>
                                </div>

                                <div class="col-md-3">
                                    <label class="form-label">Paid Amount</label>
                                    <input type="number" name="paid" value="{{ $order->paid }}"
                                        max="{{ $order->total_amount }}" class="form-control paid" readonly>
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label">Remaining Amount</label>
                                    <input type="number" name="due" value="{{ $order->due }}" min="0"
                                        class="form-control due" readonly>
                                </div>

                                <div class="col-md-3 mt-2">
                                    <label class="form-label">Pay Remaning Amount</label>
                                    <input type="number" name="pay_amount" id="pay_amount" class="form-control pay_amount"
                                        min="0" max="{{ $order->due }}" placeholder="Enter Remaning Amount"
                                        required>
                                </div>
                                <div class="col-md-9 mt-2 text-right">
                                    <button type="submit" class="btn btn-success mt-3 px-5">Submit</button>
                                </div>

                            </div>
                    </div>

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            </form>

        </div>
    @endsection()

    @section('scripts')
        <script type="text/javascript" charset="utf-8" async defer>
            $('#pay_amount').on('keyup', function() {
                var paid = $(".paid").val();
                var due = $(".due").val();
                var pay = parseInt($(".pay_amount").val());
                var remainingPrice = parseInt($('#remainingPrice').val());
                $(".due").val(remainingPrice - pay);
                var PaidPrice = $('#PaidPrice').val();
                $(".paid").val(-(-PaidPrice - pay));
            });
        </script>
    @endsection
