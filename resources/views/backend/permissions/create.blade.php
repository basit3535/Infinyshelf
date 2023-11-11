@extends('backend.layout.app')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- end row -->


            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="mt-0 mb-3">Permission</h2>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ url('permission') }}" class="btn btn-primary">List <i
                                            class="fa fa-list-alt ml-1"></i></a>
                                </div>
                            </div>
                            @include('backend.includes.alerts')

                            <form role="form"
                                action="@if (isset($permission)) {{ route('permission.update', $permission->id) }} @else() {{ route('permission.store') }} @endif "
                                method="post">
                                @if (isset($permission))
                                    @method('PUT')
                                @endif

                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Permission Name</label>
                                    <input type="text" class="form-control" name="permission"="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Permission Name"
                                        value="{{ @$permission->name }}">
                                    <small id="emailHelp" class="form-text text-muted">Kindly follow this format [ create -
                                        { permission-name } ].</small>

                                </div>
                                @error('permission')
                                    <span>
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror()
                                <div style="padding-bottom: 10px;">

                                </div>

                                @if (isset($permission))
                                    <button type="submit" class="btn btn-primary">Update</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Submit <i
                                            class="fa fa-save ml-2"></i></button>
                                @endif

                            </form>
                        </div>
                    </div>
                    <!-- end col -->



                </div>
                <!-- end row -->

            </div>
        @endsection()
