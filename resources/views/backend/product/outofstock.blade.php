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
                                    <h2>Out of Stock List</h2>
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
                                    <div class="table-responsive" data-pattern="priority-columns">

                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr class="align-middle">
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center" data-priority="1">Product Title</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-center">Edit</th>
                                                    <th class="text-center">Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @foreach ($products as $pp)
                                                    @if ($pp->quantity < 500)
                                                        <tr class="text-center">
                                                            <td>{{ $i++ }}</td>
                                                            <td>{{$pp->name }}</td>
                                                            <td>{{$pp->price }}</td>
                                                            <td>{{ $pp->quantity }}</td>

                                                            <td><a href="{{ url('product/' . $pp->id . '/edit') }}"
                                                                    class="btn btn-bordred-primary btn-sm waves-effect  waves-light">
                                                                    <i class="fa fa-edit"></i>
                                                                </a></td>
                                                            <td><a onclick="event.preventDefault();document.getElementById('del-form-{{ $pp->id }}').submit()"
                                                                    class="btn btn-bordred-danger btn-sm waves-effect waves-light"><i
                                                                        class="fa fa-trash-alt"></i></a></td>

                                                            <form id="del-form-{{ $pp->id }}"
                                                                action="{{ url('product/' . $pp->id) }}" method="POST"
                                                                style="display:none;">
                                                                @method('DELETE')
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $pp->id }}">
                                                            </form>
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

            </div> <!-- container-fluid -->

        </div> <!-- content -->
    @endsection()
