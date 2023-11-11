@extends('backend.layout.app')
@section('content')
    <style>
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
      }
      input[type=number] {
          -moz-appearance: textfield;
      }
    </style>
            <div class="content-page">
                <div class="content">

                        <div class="row mt-3 mb-2">
                            <div class="col-md-12">
                                <div class="card-box card">
                                    <div class="row">
                                      <div class="col-md-9">
                                        <h2 class="mt-0 mb-3">Order Now <i class="ml-2 fa fa-shopping-cart"></i></h2>
                                      </div>
                                      <div class="col-md-3 text-right sm-btn">
                                          <a href="{{url('order')}}" class="btn btn-sm btn-primary">Order List <i class="fa fa-list ml-1"></i></a>
                                      </div>
                                      <div class="col-md-3 text-right  hide-sm-btn">
                                          <a href="{{url('order')}}" class="btn btn-sm btn-primary"><i class="fa fa-list ml-1"></i></a>
                                      </div>
                                    </div>
                                    @include('backend.includes.alerts')

                                    <form role="form" action=@if(isset($waste) )
                                          {{route('product.update',$waste->id)}} @else() {{route('waste_order.store')}} @endif method="post" >
                                            @if (isset($waste))
                                                @method('PUT')
                                            @endif

                                            @csrf

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="card-box" style="box-shadow: 0 20px 35px 0 lightgrey; border-radius:25px;">
                                                    <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label for="inputEmail4" class="col-form-label">Name</label>
                                                                <input type="text" class="form-control"  name="name" placeholder="Customer Name" id="name" required>
                                                                @error('name')
                                                            <span>
                                                                <strong class="text-danger">{{$message}}</strong>
                                                            </span>
                                                            @enderror()
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label for="inputPassword4" class="col-form-label">Phone Number</label>
                                                                <input type="number" name="number" class="form-control" id="number" placeholder="Phone Number #" required>
                                                                <span class="help-block"><small style="color: rgb(237, 127, 127)">Please enter number first.</small></span>
                                                            </div>
                                                        </div>
                                                        </div>

                                                        <div class="card-box" style="box-shadow: 0 25px 35px 0 lightgrey; border-radius:25px;">
                                                          <div class="form-group">

                                                          </div>
                                                          <div class="form-row">
                                                              <div class="form-group col-md-12">
                                                                  <label for="inputCity" class="col-form-label">Sub Total</label>
                                                                  <input type="number"  name="sub_total" class="form-control" id="sub_total" readonly>
                                                              </div>

                                                              <div class="form-group col-md-6">
                                                                  <label for="inputCity" class="col-form-label">Discount</label>
                                                                  <input type="text" class="form-control" id="dis" name="dis">
                                                              </div>
                                                              <div class="form-group col-md-6">
                                                                  <label for="inputCity" class="col-form-label">Net Total</label>
                                                                  <input type="number" class="form-control" id="net_total" name="net_total" readonly>
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label for="inputCity" class="col-form-label">Paid Amount</label>
                                                                  <input type="number" class="form-control" id="paid" name="paid">
                                                              </div>
                                                              <div class="form-group col-md-12">
                                                                  <label for="inputCity" class="col-form-label">Remaining Amount</label>
                                                                  <input type="number" class="form-control" id="due" name="due" readonly>
                                                              </div>

                                                              <div class="mt-sm-3 col-md-12 text-center">
                                                                <button type="submit" class="btn btn-primary text-uppercase">Order Submit</button>
                                                              </div>

                                                          </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="form-group card-box" id="rows bg-info" style="box-shadow: 0 25px 35px 0 lightgrey; border-radius:25px;">

                                                                  <table class="table table-responsive" id="user_table">
                                                                  <thead>
                                                                    <tr>
                                                                        <th width="35%">Products</th>
                                                                        <th width="25%">Quantity</th>
                                                                        <th width="45%">Price</th>
                                                                        <th width="35%">Total</th>
                                                                        <th width="30%">Action</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>

                                                                  </tbody>
                                                                  <tfoot>
                                                                    <tr>
                                                                    <td colspan="2" align="right">&nbsp;</td>
                                                                    <td>

                                                                    </td>
                                                                    </tr>
                                                                  </tfoot>
                                                              </table>


                                                                </div>
                                                  </div>
                                                </div>
                                        <!-- end row -->

                                </div>

                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                  </form>

                </div>
@endsection()

              @section('scripts')
                  <script  type="text/javascript" charset="utf-8" async defer>
                    $(document).ready(function()
                    {
                        var count = 1;
                        html = '';
                        dynamic_field(count);
                        function add_select(){
                      $('body').find('#waste').select2();
                    }

                  function dynamic_field(number)
                    {

                      html = '<tr>';
                            html += '<td> <select name="waste[]" id="waste" class="form-control pid" ><option value="" readonly>Chose Product</option>{{!! \App\Http\Controllers\WasteOrderController::fetch_wastes() !!}</select></td>';
                            html += '<td><input type="number" name="quantity[]" class="form-control qty" value="0"/><input type="hidden" name="total_quantity"  value="{}" class="form-control tqty" /></td>';
                            html += '<td><input type="text" name="price" class="form-control price" readonly/></td>';
                            html += '<td>Rs<span class="total">0</span></td>';
                            if(number > 1)
                            {
                                html += '<td><button type="button" name="remove" id="" class="btn btn-danger btn-sm remove"><i class="fa fa-minus-circle"></i></button></td></tr>';
                                $('tbody').append(html);

                            }
                            else
                            {
                                html += '<td><button type="button" name="add" id="add" class="btn btn-sm btn-success"><i class="fa fa-plus-circle"></i></button></td></tr>';

                                $('tbody').html(html);
                            }
                              add_select();
                    }



                 $(document).on('click', '#add', function(){
                  count++;

                  dynamic_field(count);
                 });

                 $(document).on('click', '.remove', function(){
                  count--;
                  $(this).closest("tr").remove();
                 });


                $('tbody').delegate('.pid','change',function(){
                   var id = $(this).val();
                   var tr  = $(this).parent().parent();

                   $.ajax({
                    url : "/fetch_single_waste",
                    method:"post",
                    data: {"id": id,"_token": "{{ csrf_token() }}"},
                    dataType:"json",
                    success:function(response)
                    {


                      tr.find('.qty').val(),
                      tr.find('.price').val(response[0]['waste_price']),
                      tr.find('.total').text(1*response[0]['waste_price']),
                      tr.find('.tqty').val(1*response[0]['waste_material']),
                      $('#dis').val(),

                      calculation(0,0);
                    }


                   });
                });

                $('tbody').on('keyup','.qty',function(){
                    var qty = $(this).val();
                    var tr = $(this).parent().parent();
                    var price =  tr.find('.price').val();
                    var new_total = qty * price;

                    tr.find('.total').text(new_total);

                    calculation(0,0);
                });


                $('tbody').on('keyup','.qty',function(){
                    var qty = $(this).val();
                    var tr = $(this).parent().parent();
                    var tqty = tr.find('.tqty').val();

                    if(isNaN(qty))
                    {
                      swal("Valid Quantity!", "You clicked the button!", "warning");
                      $(this).val(1);
                      tr.find('.total').text(tr.find('.price').val());
                      calculation(0,0);

                    }
                    else if((qty - 0) > (tqty - 0))
                    {

                        swal("Limited Stock!", "Out of Stock !!", "warning");
                        $(this).val(1);
                      tr.find('.total').text(tr.find('.price').val());
                      calculation(0,0);

                    }
                    else
                    {
                      if(qty <= 0)
                      {
                        $(this).val(1);
                      tr.find('.total').text(tr.find('.price').val());
                      calculation(0,0);

                      }
                    }

                });


                function calculation(dis,paid){
                  var sub_total = 0;
                  var net_total = 0;
                  var discount = dis;
                  var paid  = paid;



                    $('.total').each(function(){
                      sub_total = sub_total + ($(this).html()*1);

                    });


                  $('#sub_total').val(sub_total);

                  if(sub_total >= 0)
                  {
                    var tax = sub_total;
                     $('#gst').val(Math.round(tax));
                     var net_total =  sub_total;
                     $('#net_total').val(Math.round(net_total));

                    if(discount >= 0)
                      {
                        var net_total = net_total - discount;

                         $('#net_total').val(Math.round(net_total));
                         $('#due').val(Math.round(net_total));

                      }

                    if(paid >= 0)
                    {
                      net_total = Math.round(net_total - paid);
                      $('#due').val(net_total);
                    }

                  }

                }

                $('#dis').keyup(function(){
                    var discount = $(this).val();

                    calculation(discount);
                });

                $('#paid').keyup(function(){
                    var paid = $(this).val();
                    var discount  = $('#dis').val();
                    calculation(discount,paid);
                });


                // sending ajax request to fetch customer

                $('#number').keyup(function(){
                    var number = $(this).val();

                    if(number.length > 11)
                    {
                      alert('Please enter a valid number');
                      $('#number').val('');
                      $('#name').val('');
                    }
                    else
                    {
                      $.ajax({
                        url:"{{URL::to('fetch_customer')}}",
                        method:"POST",
                        data:{'number' : number,"_token":"{{csrf_token()}}"},
                        dataType:'json',
                        success:function(response)
                        {
                          if(response.name != '')
                          {
                            $('#name').val(response.name);
                          }
                        }
                      });
                    }
                });

                    });

                  </script>
              @endsection
