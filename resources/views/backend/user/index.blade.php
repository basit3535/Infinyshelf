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
                                    <div class="col-md-6">
                                        <h2>Users List</h2>
                                    </div>
                                    <div class="col-md-6 text-right mt-1">
                                        <a href="{{ url('user/create') }}" class="btn btn-primary">Create <i
                                                class="fa fa-plus-circle ml-2"></i></a>
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
                                                        <th>Image</th>
                                                        <th>Plan</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if (isset($users))
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $user->id }}</td>
                                                                <td>{{ uppercase($user->name) }}</td>
                                                                <td>
                                                                    <img style="width:50px; height:50px; clip-path: circle(50% at 50% 50%);"
                                                                        src="{{ asset('uploads/' . $user->thumbnail) }}"
                                                                        alt="">
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        class="badge bg-success p-1">{{ $user->role->pluck('name')->first() }}</span>
                                                                </td>
                                                                <td><a href="{{ url('user/' . $user->id . '/edit') }}"
                                                                        class="btn btn-primary"><i class="fa fa-edit"></i>
                                                                    </a>
                                                                </td>

                                                                <td class="text-center">
                                                                    <button class="btn btn-danger dlt"
                                                                        value="{{ $user->id }}">
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
                                                                                                    action="{{ url('user/' . $user->id) }}"
                                                                                                    method="POST">
                                                                                                    @method('DELETE')
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
                                                </tbody>
                                            </table>
                                        </div>



                                    </div>

                                </div>
                                {{ $users->links() }}
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
