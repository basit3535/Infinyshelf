@extends('backend.layout.app')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid mb-3">

                <div class="row">

                    <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-4">Total Revenue</h4>

                            <div class="widget-chart-1">
                                {{-- <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="green "
                                        data-bgColor="#ececec" value="{{ $revenue_today[0] / 1000 }}" data-skin="tron"
                                        data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                </div> --}}

                                <div class="widget-detail-1 text-right">
                                    <h2 class="font-weight-normal pt-2 mb-1"> {{ $revenue_today[0] }} Rs</h2>
                                    <p class="text-muted mb-1">Today Revenue</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-4">Month Revenue</h4>

                            <div class="widget-chart-1">
                                {{-- <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="green "
                                        data-bgColor="#ececec" value="{{ $revenue_month[0] / 1000 }}" data-skin="tron"
                                        data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                </div> --}}

                                <div class="widget-detail-1 text-right">
                                    <h2 class="font-weight-normal pt-2 mb-1"> {{ $revenue_month[0] }} Rs</h2>
                                    <p class="text-muted mb-1">Month Revenue</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-4">Spending This Month</h4>

                            <div class="widget-chart-1">
                                {{-- <div class="widget-chart-box-1 float-left" dir="ltr">
                                    <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="green "
                                        data-bgColor="#ececec" value="{{ $spending_month[0]}}" data-skin="tron"
                                        data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                </div> --}}

                                <div class="widget-detail-1 text-right">
                                    <h2 class="font-weight-normal pt-2 mb-1"> {{ $spending_month[0] }} Rs</h2>
                                    <p class="text-muted mb-1">Spending This Month</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->
{{--
                    <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Today Paid Revenue</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-primary badge-pill float-left mt-3">R.S
                                        {{ $revenue_today_paid[0] / 1000 }}%
                                        <i class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="font-weight-normal mb-1">{{ numberformat($revenue_today_paid[0]) }} </h2>
                                    <p class="text-muted mb-3">Today Paid Revenue</p>
                                </div>
                                <div class="progress progress-bar-alt-primary progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100"
                                        style="width: {{ $revenue_today_paid[0] / 1000 }}%;">
                                        <span class="sr-only">{{ $revenue_today_paid[0] / 1000 }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Today Remaning Revenue</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-warning badge-pill float-left mt-3">R.S
                                        {{ $revenue_today_due[0] / 1000 }}
                                        %
                                        <i class="mdi mdi-trending-down"></i> </span>
                                    <h2 class="font-weight-normal mb-1">{{ numberformat($revenue_today_due[0]) }} </h2>
                                    <p class="text-muted mb-3">Today Remaning Revenue</p>
                                </div>
                                <div class="progress progress-bar-alt-warning progress-sm">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100"
                                        style="width: {{ $revenue_today_due[0] / 1000 }}%;">
                                        <span class="sr-only">{{ $revenue_today_due[0] / 1000 }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}

                    <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">In Stock Products</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-success badge-pill float-left mt-3">{{ $product }}% <i
                                            class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="font-weight-normal mb-1"> <a href="{{ url('product') }}"
                                            class="text-primary">{{ $product }}</a> </h2>
                                    <p class="text-muted mb-3">Total Product</p>
                                </div>
                                <div class="progress progress-bar-alt-success progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $product }}%;">
                                        <span class="sr-only">{{ $product }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->

                    {{-- <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Out of Stock</h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-danger badge-pill float-left mt-3">{{ $outofstock }}% <i
                                            class="mdi mdi-trending-down"></i> </span>
                                    <h2 class="font-weight-normal mb-1"><a href="{{ url('outofstock') }}"
                                            class="text-primary">
                                            {{ $outofstock }} </a></h2>
                                    <p class="text-muted mb-3">Out of Stock Products</p>
                                </div>
                                <div class="progress progress-bar-alt-danger progress-sm">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $outofstock }}%;">
                                        <span class="sr-only">{{ $outofstock }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> --}}
                    <!-- end col -->

                    <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Today Sales Items </h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-info badge-pill float-left mt-3">{{ $dailysales }}% <i
                                            class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="font-weight-normal mb-1"> <a href="{{ url('order') }}"
                                            class="text-primary">{{ $dailysales }}
                                        </a></h2>
                                    <p class="text-muted mb-3">Today Sales Items</p>
                                </div>
                                <div class="progress progress-bar-alt-info progress-sm">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $dailysales }}%;">
                                        <span class="sr-only">{{ $dailysales }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end col -->

                    {{-- <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Active Plans </h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-primary badge-pill float-left mt-3">{{ $plans }}% <i
                                            class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="font-weight-normal mb-1">
                                        <a href="{{ url('role') }}" class="text-primary"> {{ $plans }} </a>
                                    </h2>
                                    <p class="text-muted mb-3">Total Plans</p>
                                </div>
                                <div class="progress progress-bar-alt-primary progress-sm">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $plans * 30 }}%;">
                                        <span class="sr-only">{{ $plans }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col --> --}}

                    {{-- <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Active Users </h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-secondary badge-pill float-left mt-3">{{ $users }}% <i
                                            class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="font-weight-normal mb-1">
                                        <a href="{{ url('user') }}" class="text-primary"> {{ $users }} </a>
                                    </h2>
                                    <p class="text-muted mb-3">Total Users</p>
                                </div>
                                <div class="progress progress-bar-alt-secondary progress-sm">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $users * 5 }}%;">
                                        <span class="sr-only">{{ $users }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col --> --}}

                    {{-- <div class="col-xl-4 col-md-6 mt-3">
                        <div class="card-box card h-100">
                            <div class="float-right">
                                <i class="mdi mdi-dots-vertical"></i>
                            </div>

                            <h4 class="header-title mt-0 mb-3">Today Mails </h4>

                            <div class="widget-box-2">
                                <div class="widget-detail-2 text-right">
                                    <span class="badge badge-success badge-pill float-left mt-3">{{ $mails }}% <i
                                            class="mdi mdi-trending-up"></i> </span>
                                    <h2 class="font-weight-normal mb-1">
                                        <a href="{{ url('user') }}" class="text-primary"> {{ $mails }} </a>
                                    </h2>
                                    <p class="text-muted mb-3">Total Customer Mails</p>
                                </div>
                                <div class="progress progress-bar-alt-success progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $mails * 5 }}%;">
                                        <span class="sr-only">{{ $mails }}% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- end col --> --}}
                </div>
                <!-- end row -->

                {{-- <div class="row">
                    @if (Auth::user()->name == 'admin')
                        @if (isset($user))
                            @foreach ($user as $members)
                                <div class="col-xl-4 col-md-6 mt-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="avatar-lg float-left mr-3">
                                                <img src="{{ asset('images/' . $members->thumbnail) }}"
                                                    class="img-fluid rounded-circle" alt="user">
                                            </div>
                                            <div class="wid-u-info">
                                                <h5 class="mt-0">Name : {{ $members->name }}</h5>
                                                <p class="text-dark mb-1 font-13 text-truncate"><b>Email :
                                                    </b>{{ $members->email }}</p>
                                                <small class="text-warning"><b>Role :
                                                        {{ $members->role->pluck('name')->first() }}</b></small>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            @endforeach
                        @endif
                    @else
                    @endif
                </div>

                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card-box card">
                            <div>
                                <h4>Products</h4>
                            </div>
                            <div class="responsive-table-plugin" style="padding-bottom: 15px;">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive">

                                        <table class="table table-striped " style="width:100%">
                                            <thead>
                                                <tr class="align-middle">
                                                    <th>ID</th>
                                                    <th data-priority="1">Product Title</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @if (count($products) >= 1)
                                                    @foreach ($products as $pp)
                                                        @if ($pp->quantity == 0)
                                                            <tr class="align-middle bg-danger text-white">
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ uppercase($pp->name) }}</td>
                                                                <td>{{ numberformat($pp->price) }}</td>
                                                                <td>{{ $pp->quantity }}</td>

                                                                <td><a href="{{ url('product/' . $pp->id . '/edit') }}"
                                                                        class="btn btn-bordred-primary btn-sm waves-effect  waves-light">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a></td>
                                                                <td>
                                                                    <a onclick="event.preventDefault();document.getElementById('del-form-{{ $pp->id }}').submit()"
                                                                        class="btn btn-bordred-danger btn-sm waves-effect waves-light"><i
                                                                            class="fa fa-trash-alt"></i>
                                                                    </a>
                                                                </td>

                                                                <form id="del-form-{{ $pp->id }}"
                                                                    action="{{ url('product/' . $pp->id) }}"
                                                                    method="POST" style="display:none;">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $pp->id }}">
                                                                </form>
                                                            </tr>
                                                        @else
                                                            <tr class="align-middle">
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ uppercase($pp->name) }}</td>
                                                                <td>{{ numberformat($pp->price) }}</td>
                                                                <td>{{ $pp->quantity }}</td>

                                                                <td><a href="{{ url('product/' . $pp->id . '/edit') }}"
                                                                        class="btn btn-bordred-primary waves-effect btn-sm waves-light">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a></td>
                                                                <td><a onclick="event.preventDefault();document.getElementById('del-form-{{ $pp->id }}').submit()"
                                                                        class="btn btn-bordred-danger btn-sm waves-effect waves-light"><i
                                                                            class="fa fa-trash-alt"></i></a></td>

                                                                <form id="del-form-{{ $pp->id }}"
                                                                    action="{{ url('product/' . $pp->id) }}"
                                                                    method="POST" style="display:none;">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $pp->id }}">
                                                                </form>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <tr class="text-center">
                                                        <td colspan="6">No Record Found !!</td>
                                                    </tr>
                                                @endif

                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card-box card">
                            <div>
                                <h4>Waste Material Forcast</h4>
                            </div>
                            <div class="responsive-table-plugin" style="padding-bottom: 15px;">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive">

                                        <table class="table table-striped " style="width:100%">
                                            <thead>
                                                <tr class="align-middle">
                                                    <th>ID</th>
                                                    <th data-priority="1">Waste Title</th>
                                                    <th>approx. quantity</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                @if (count($waste) >= 1)
                                                    @foreach ($waste as $pp)
                                                        @if ($pp->waste_material == 0)
                                                            <tr class="align-middle bg-danger text-white">
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ uppercase($pp->waste_name) }}</td>
                                                                <td>{{ numberformat($pp->waste_material) }}</td>


                                                                <td><a href="{{ url('product/' . $pp->id . '/edit') }}"
                                                                        class="btn btn-bordred-primary btn-sm waves-effect  waves-light">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a></td>
                                                                <td>
                                                                    <a onclick="event.preventDefault();document.getElementById('del-form-{{ $pp->id }}').submit()"
                                                                        class="btn btn-bordred-danger btn-sm waves-effect waves-light"><i
                                                                            class="fa fa-trash-alt"></i>
                                                                    </a>
                                                                </td>

                                                                <form id="del-form-{{ $pp->id }}"
                                                                    action="{{ url('product/' . $pp->id) }}"
                                                                    method="POST" style="display:none;">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $pp->id }}">
                                                                </form>
                                                            </tr>
                                                        @else
                                                            <tr class="align-middle">
                                                                <td>{{ $i++ }}</td>
                                                                <td>{{ uppercase($pp->waste_name) }}</td>
                                                                <td>{{ $pp->waste_material }} KG</td>

                                                                <td><a href="{{ url('product/' . $pp->id . '/edit') }}"
                                                                        class="btn btn-bordred-primary waves-effect btn-sm waves-light">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a></td>
                                                                <td><a onclick="event.preventDefault();document.getElementById('del-form-{{ $pp->id }}').submit()"
                                                                        class="btn btn-bordred-danger btn-sm waves-effect waves-light"><i
                                                                            class="fa fa-trash-alt"></i></a></td>

                                                                <form id="del-form-{{ $pp->id }}"
                                                                    action="{{ url('product/' . $pp->id) }}"
                                                                    method="POST" style="display:none;">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $pp->id }}">
                                                                </form>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <tr class="text-center">
                                                        <td colspan="6">No Record Found !!</td>
                                                    </tr>
                                                @endif

                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div> --}}


                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <!-- Right Sidebar -->
    @endsection()
