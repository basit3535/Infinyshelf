@extends('backend.layout.app')

@section('content')

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-md-12 mt-3">

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>Permissions List</h2>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="dropdown">
                                            <button type="button" class=" btn btn-primary dropdown-toggle"
                                                data-toggle="dropdown">
                                                <i class="ti-filter"></i>
                                                Filter By
                                            </button>
                                            <div class="dropdown-menu">

                                                <a class="dropdown-item"
                                                    href="{{ route('permission.filter', ['name' => 'role']) }}">Role</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('permission.filter', ['name' => 'permission']) }}">Permissions</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('permission.filter', ['name' => 'user']) }}">User</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('permission.filter', ['name' => 'category']) }}">Category</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('permission.filter', ['name' => 'order']) }}">Orders</a>

                                            </div>
                                        </div>
                                        @if (Request::has('name'))
                                            <a href="{{ route('permission.index') }}" class="btn btn-sm btn-primary mt-3"
                                                title="">Clear Filter</a>
                                        @endif()
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <a href="{{ url('permission/create') }}" class="btn btn-primary">Create <i
                                                class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                                @include('backend.includes.alerts')

                                <div class="responsive-table-plugin" style="padding-bottom: 15px;">

                                    <div class="table-rep-plugin">
                                        <div class="table-responsive" data-pattern="priority-columns">
                                            <table id="example" class="table table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th data-priority="1">Name</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (isset($permissions))
                                                        @foreach ($permissions as $permission)
                                                            <tr>
                                                                <td>{{ $permission->id }}</td>
                                                                <td>{{ uppercase($permission->name) }}</td>
                                                                <td>
                                                                    <a href="{{ url('permission/' . $permission->id . '/edit') }}"
                                                                        class="btn btn-primary"><i class="fa fa-edit"></i>
                                                                    </a>
                                                                </td>
                                                                <td class="text-center">
                                                                    <button class="btn btn-danger dlt"
                                                                        value="{{ $permission->id }}">
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
                                                                                                    action="{{ url('permission/' . $permission->id) }}"
                                                                                                    method="POST">
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <input type="hidden"
                                                                                                        class="text-dark"
                                                                                                        id="product_Id"
                                                                                                        name="id"
                                                                                                        readonly>
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
                                                    @endif

                                                    @if (isset($result))
                                                        @foreach ($result as $p)
                                                            <tr>
                                                                <th>{{ $p->id }}</th>
                                                                <td>{{ uppercase($p->name) }}</td>
                                                                <td><a href="{{ url('p/' . $p->id . '/edit') }}"
                                                                        class="btn btn-bordred-primary waves-effect  width-md waves-light">Edit</a>
                                                                </td>
                                                                <td class="text-center">
                                                                    <button class="btn btn-danger dlt"
                                                                        value="{{ $p->id }}">
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
                                                                                                    action="{{ url('p/' . $p->id) }}"
                                                                                                    method="POST">
                                                                                                    @method('delete')
                                                                                                    @csrf
                                                                                                    <input type="hidden"
                                                                                                        class="text-dark"
                                                                                                        id="product_Id"
                                                                                                        name="id"
                                                                                                        readonly>
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
                                                                {{-- <td>
                                                                    <p onclick="event.preventDefault();document.getElementById('del-form-{{ $p->id }}').submit()"
                                                                        class="btn btn-bordred-danger waves-effect  width-md waves-light">
                                                                        Delete</p>
                                                                </td>

                                                                <form id="del-form-{{ $p->id }}"
                                                                    action="{{ url('p/' . $p->id) }}" method="POST"
                                                                    style="display:none;">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                        value="{{ $p->id }}">
                                                                </form> --}}



                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>

                                </div>
                                @if (isset($permissions))
                                    {{ $permissions->links() }}
                                @endif
                            </div>
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
