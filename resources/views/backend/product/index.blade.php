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
                                <div class="col-8 align-middle">
                                    <h2>Products List</h2>
                                </div>
                                <div class="col-4 text-right sm-btn">
                                    <a href="{{ url('product/create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus-circle mr-1"></i> Add Product</a>
                                </div>
                                <div class="col-4 text-right hide-sm-btn">
                                    <a href="{{ url('product/create') }}" class="btn btn-primary"><i
                                            class="fa fa-plus-circle"></i></a>
                                </div>
                            </div>
                            @include('backend.includes.alerts')

                            <div class="responsive-table-plugin" style="padding-bottom: 15px;">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive">

                                        <table id="example" class="table table-striped " style="width:100%">
                                            <thead>
                                                <tr class="align-middle">
                                                    <th>ID</th>
                                                    <th data-priority="1">Product Title</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Create at</th>
                                                    {{-- <th>Delete</th> --}}

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($products as $pp)
                                                    @if ($pp->quantity == 0)
                                                        <tr class="align-middle bg-danger text-white">
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $pp->name}}</td>
                                                            <td>{{ $pp->price }}</td>
                                                            <td>{{ $pp->quantity }}</td>

                                                            <td>
                                                                {{$pp->created_at}}
                                                                {{-- <a href="{{ url('product/' . $pp->id . '/edit') }}"
                                                                    class="btn btn-bordred-primary btn-sm waves-effect  waves-light">
                                                                    <i class="fa fa-edit"></i>
                                                                </a> --}}
                                                            </td>
                                                            {{-- <td class="text-center">
                                                                <button class="btn btn-danger dlt"
                                                                    value="{{ $pp->id }}">
                                                                    <i class="fa fa-trash-alt text-white"></i>
                                                                </button>
                                                                <div class="col-md-4">
                                                                    <div class="">
                                                                        <div class="">
                                                                            <!-- sample modal content -->
                                                                            <div id="deleteModel" class="modal"
                                                                                tabindex="-1"
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
                                                                                                action="{{ url('product/' . $pp->id) }}"
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
                                                            </td> --}}
                                                        </tr>
                                                    @else
                                                        <tr class="align-middle">
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{ $pp->name }}</td>
                                                            <td>{{ $pp->price }}</td>
                                                            <td>{{ $pp->quantity }}</td>

                                                            <td>
                                                                {{$pp->created_at}}
                                                                {{-- <a href="{{ url('product/' . $pp->id . '/edit') }}"
                                                                    class="btn btn-bordred-primary waves-effect btn-sm waves-light">
                                                                    <i class="fa fa-edit"></i>
                                                                </a> --}}
                                                            </td>
{{--
                                                            <td class="text-center">
                                                                <button class="btn btn-danger dlt"
                                                                    value="{{ $pp->id }}">
                                                                    <i class="fa fa-trash-alt text-white"></i>
                                                                </button>
                                                                <div class="col-md-4">
                                                                    <div class="">
                                                                        <div class="">
                                                                            <!-- sample modal content -->
                                                                            <div id="deleteModel" class="modal"
                                                                                tabindex="-1"
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
                                                                                                action="{{ url('product/' . $pp->id) }}"
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
                                                            </td> --}}

                                                            {{-- <td>
                                                                <a onclick="event.preventDefault();document.getElementById('del-form-{{ $pp->id }}').submit()"
                                                                    class="btn btn-bordred-danger btn-sm waves-effect waves-light"><i
                                                                        class="fa fa-trash-alt"></i></a>
                                                            </td>

                                                            <form id="del-form-{{ $pp->id }}"
                                                                action="{{ url('product/' . $pp->id) }}" method="POST"
                                                                style="display:none;">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $pp->id }}">
                                                            </form> --}}
                                                        </tr>
                                                    @endif
                                                @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>
                            {{ $products->links() }}
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
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
