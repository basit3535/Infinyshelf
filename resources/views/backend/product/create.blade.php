@extends('backend.layout.app')
@section('content')

    <div class="content-page">
        <div class="content">

            <!-- end row -->

            <div class="row mt-3 mb-2">
                <div class="col-md-12">
                    <div class="card-box card">
                        <div class="row">
                            <div class="col-8">
                                <h2 class="mt-0 mb-3">Add Product</h2>
                            </div>
                            <div class="col-4 text-right sm-btn">
                                <a href="{{ url('product') }}" class="btn btn-primary">Product List <i
                                        class="ml-1 fa fa-list-alt"></i></a>
                            </div>
                            <div class="col-4 text-right hide-sm-btn">
                                <a href="{{ url('product') }}" class="btn btn-primary"><i class="fa fa-list-alt"></i></a>
                            </div>
                        </div>
                        @include('backend.includes.alerts')

                        <form role="form" id="productForm"
                            action="@if (isset($product)) {{ route('product.update', $product->id) }} @else() {{ route('product.store') }} @endif "
                            method="post">
                            @if (isset($product))
                                @method('PUT')
                            @endif

                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user_id }}" class="form-control">
                            <div class="row">
                                {{-- <div class="col-md-6 ">
                                    @if (Route::current()->getName() == 'product.edit')
                                    @else
                                        <label for="">Select Category</label>

                                        <select name="category_id" id="single" class="js-states form-control"
                                            required="required">
                                            @if (isset($category))
                                                <option>Select a Category</option>
                                                @foreach ($category as $cc)
                                                    <option value="{{ $cc->id }}"
                                                        @if (isset($product) && $cc->id == $brand->category_id) selected @endif>
                                                        {{ $cc->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>

                                        @error('category')
                                            <span>
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror()
                                    @endif

                                </div> --}}

                                <div class="col-md-4">
                                    <label class="mt-2">Name</label>
                                    <input type="text" class="form-control" name="name"="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Product Name"
                                        @if (isset($product->name)) value="{{ $product->name }}" @else value="{{ old('name') }}") @endif>
                                    @error('name')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror()
                                </div>


                                <div class="col-md-4">
                                    <label class="mt-2">Quantity</label>
                                    <input type="number" name="quantity" class="form-control"
                                        placeholder="Product Quantity"
                                        @if (isset($product->quantity)) value="{{ $product->quantity }}" @else value="{{ old('quantity') }}") @endif>


                                    @error('quantity')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror()
                                </div>



                                <div class="col-md-4">
                                    <label class="mt-2">Price</label>

                                    <input type="number" name="price" class="form-control" placeholder="Product Price"
                                        @if (isset($product->price)) value="{{ $product->price }}" @else value="{{ old('price') }}") @endif>


                                    @error('price')
                                        <span>
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror()
                                </div>


                                {{-- <div class="col-md-6">
                                    <label class="mt-2">Tax (%)</label>
                                    <input type="number" name="tax" class="form-control" placeholder="Tax in %"
                                        @if (isset($product->tax)) value="{{ $product->tax }}" @else value="0") @endif>
                                </div> --}}




                            </div>
{{--
                            <div class="row card-box card" id="wastage">


                            </div> --}}

                            <div style="display:flex" class="mt-4" >
                                <button type="submit" class="btn btn-primary"
                                    style="margin-left:auto; display:block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    @endsection()

    {{-- @section('scripts')
        <script>
            $(document).ready(function() {
                var i = 1;
                var option = $('#category option:selected').val();

                $.ajax({
                    url: '{{ URL::to('fetch/category_brands') }}/' + option,
                    method: 'GET',
                    type: "ajax",
                    proccessData: false,
                    ContentType: false,
                    dataType: "json",
                    success: function(response) {
                        if (response.length) {
                            var html = '';

                            for ($i = 0; $i < response.length; $i++) {
                                html += "<option value='" + response[$i].id + "'>" + response[$i].name +
                                    "</option>";
                            }

                            $('#brands').html(html);
                        }
                    }


                });
                $('#waste').click(function() {
                    i++;
                    $('#wastage').append('<div class="row mb-3 pb-3 rounded" id="row' + i + '">' +
                        '<div class="col-md-3 my-2">' +
                        '<input type="hidden" name="product_id[]" value="{{ $last_id }}" class="form-control" >' +
                        '<label class="mt-2">Wastage Name</label>' +
                        '<input type="text" name="waste_name[]" class="form-control" placeholder="Watse name "' +
                        ' @if (isset($product->waste)) value="{{ $product->waste }}") @endif>' +
                        '</div>' + '<div class="col-md-3 my-2">' +
                        '<label class="mt-2">Wastage(%)</label>' +
                        '<input type="number" name="waste_ratio[]" class="form-control" placeholder="watse amount in %"' +
                        ' @if (isset($product->waste)) value="{{ $product->waste }}" @else value="0") @endif>' +
                        '</div>' + '<div class="col-md-3 my-2">' +
                        '<label class="mt-2">Price</label>' +
                        '<input type="number" name="waste_price[]" class="form-control" placeholder="Price"' +
                        ' @if (isset($product->waste)) value="{{ $product->waste }}" @else value="0") @endif>' +
                        '</div>' + ' <div class="col-md-2 my-2 " >' +
                        '<button type="button" name="remove" id="' + i +
                        '" class="btn btn-danger btn_remove" style="width: 2.5rem; height: 2.5rem; display:block; margin:2.7rem auto 0 auto">X</button>' +
                        '</div>' + '</div>');
                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                });

            });
        </script>
    @endsection --}}
