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
                                    <h2 class="mt-0 mb-3">User</h2>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ url('user') }}" class="btn btn-primary">List <i
                                            class="fa fa-list-alt ml-1"></i></a>
                                </div>
                            </div>
                            @include('backend.includes.alerts')

                            <form role="form"
                                action="@if (isset($user)) {{ route('user.update', $user->id) }} @else() {{ route('user.store') }} @endif"
                                method="post" enctype='multipart/form-data'>
                                @if (isset($user))
                                    @method('PUT')
                                @endif

                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" name="name"="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Name"
                                            value="{{ @$user->name }}">


                                        @error('name')
                                            <span>
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror()
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" name="email"="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Email"
                                            value="{{ @$user->email }}">


                                        @error('email')
                                            <span>
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror()
                                    </div>

                                    <div class="col-md-4">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" class="form-control" name="password"="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter Password"
                                            value="{{ @$user->password }}">

                                        @error('password')
                                            <span>
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror()

                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <label for="image">Profile pic</label>
                                        <input name="image" id="image" type="file" class="dropify"
                                            data-height="100" data-default-file="{{ asset(@$user->image) }}" />
                                        @error('image')
                                            <span>
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror()
                                    </div>

                                    <div class="col-md-12 row mt-1">
                                        <div class="mt-2">Roles</div>
                                        @error('roles')
                                            <span>
                                                <strong class="text-danger">{{ $message }}</strong>
                                            </span>
                                        @enderror()

                                        @foreach ($roles as $role)
                                            <div class="col-md-2 col-sm-2 col-4 mt-2 text-center">
                                                <label class="switch checkbox-inline">
                                                    <input type="checkbox" name="roles[{{ $role->id }}]"
                                                        @if (isset($user) && in_array($role->id, role_name($user))) checked @endif>
                                                    <span class="slider round"></span>

                                                </label>
                                                <p>{{ $role->name }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <button type="submit" class="btn btn-primary">Submit <i
                                                class="fa fa-save ml-1"></i></button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>
@endsection()
