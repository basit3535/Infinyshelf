@extends('backend.layout.app')

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid mt-3 mb-2">

                <div class="row">
                    <div class="col-12">
                        <div class="card-box card">
                            <div class="row">
                                <div class="col-8">
                                    <h2>Orders List</h2>
                                </div>
                                <div class="col-4 text-right sm-btn">
                                    <a href="{{ url('order/create') }}" class="btn btn-primary"><i
                                            class="fa fa-shopping-cart mr-1"></i> Buy Product</a>
                                </div>

                                <div class="col-4 text-right hide-sm-btn">
                                    <a href="{{ url('order/create') }}" class="btn btn-primary"><i
                                            class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            @include('backend.includes.alerts')

                            <div class="responsive-table-plugin" style="padding-bottom: 15px;">

                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="example" class="table table-striped mb-0">
                                            <thead>
                                                <tr class="align-middle">
                                                    <th>#</th>
                                                    <th>Product Name</th>
                                                    <th>quantity</th>
                                                    <th>Total Amount</th>
                                                    {{-- <th>Remaining</th> --}}
                                                    {{-- <th>Payment</th> --}}
                                                    <th>Details</th>
                                                    <th>Invoice Print</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->product?->name }}</td>
                                                        {{-- {{dd($order->customer->name)}} --}}
                                                        <td>{{ $order->quantity}}</td>
                                                        <td>{{ $order->total_price}}</td>
                                                        {{-- <td>{{ $order->due }}</td> --}}
                                                        {{-- <td>{{ $order->payment_method }}</td> --}}
                                                        <td><a href="{{ url('order/' . $order->id) }}"
                                                                class="btn btn-bordred-primary waves-effect waves-light"><i
                                                                    class="fa fa-eye"></i></a></td>



                                                        <td class="text-center">
                                                            <a href="{{ url('invoice/' . $order->id) }}"
                                                                class="btn btn-success"><i class="fa fa-print"></i></a>
                                                        </td>
                                                        <td class="text-center">
                                                            <button class="btn btn-danger dlt" value="{{ $order->id }}">
                                                                <i class="fa fa-trash-alt text-white"></i>
                                                            </button>
                                                            <div class="col-md-4">
                                                                <div class="">
                                                                    <div class="">
                                                                        <!-- sample modal content -->
                                                                        <div id="deleteModel" class="modal" tabindex="-1"
                                                                            aria-labelledby="myModalLabel"
                                                                            style="display: none; transform: translateY(24%)"
                                                                            aria-hidden="true">
                                                                            <div class="modal-dialog">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-body p-3">
                                                                                        <div class="text-center">
                                                                                            <i class="fa fa-times-circle fs-6 text-danger mb-4"
                                                                                                style="font-size: 70px!important;"
                                                                                                aria-hidden="true"></i>
                                                                                            <h3 class="text-dark"
                                                                                                style="font-size: 30px">
                                                                                                Are You Sure !!</h3>
                                                                                            <p class="text-muted"
                                                                                                style="font-size: 20px">
                                                                                                You won't be able to
                                                                                                revert this!</p>
                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="text-center pb-4">
                                                                                        <form
                                                                                            action="{{ url('order/' . $order->id) }}"
                                                                                            method="POST">
                                                                                            @method('DELETE')
                                                                                            @csrf
                                                                                            <input type="hidden"
                                                                                                class="text-dark"
                                                                                                id="product_Id"
                                                                                                name="id" readonly>
                                                                                            <button type="submit"
                                                                                                class="btn btn-success rounded-3 waves-effect waves-light text-white">Yes,delete
                                                                                                it!</button>
                                                                                            <button type="button"
                                                                                                class="btn btn-danger rounded-3 border waves-effect text-white off"
                                                                                                data-bs-dismiss="modal">No,cancel!</button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.modal -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            {{ $orders->links() }}
                        </div>

                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.dlt').on('click', function(e) {
                    e.preventDefault();
                    let product_id = $(this).val();
                    $('#product_Id').val(product_id);
                    $('#deleteModel').modal('show');
                    $('.off').click(function() {
                        $('#deleteModel').modal('hide');
                    });
                });
            });
        </script>
    @endsection()
