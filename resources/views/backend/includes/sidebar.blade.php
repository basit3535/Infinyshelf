<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!-- User box -->
        <div class="user-box text-center mb-4">
            <div class="sm-logo">
                <a href="{{ url('home') }}">
                    @if (isset($general->logo))
                        <img src="{{ asset($general->logo) }}" alt="DeskBook Inventory"
                            style="width: 100%; max-width:100px;">
                    @else
                        <p style="color: black; font-size:18px; font-weight:bold">N\A</p>
                    @endif

                </a>
            </div>

        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="fab fa-delicious"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                {{-- @can('general', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fa fa-cogs"></i>
                            <span>General Setting</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('general.index') }}">View</a></li>
                            <li><a href="{{ route('general.create') }}">Create</a></li>
                        </ul>
                    </li>
                @endcan
                @can('mail', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fa fa-envelope"></i>
                            <span>Customer Mails</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('mail') }}">View</a></li>
                        </ul>
                    </li>
                @endcan --}}
                {{-- @can('calculator', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fa fa-fax"></i>
                            <span>Calculator</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('calculator') }}">Calculate</a></li>
                        </ul>
                    </li>
                @endcan --}}

                {{-- @can('view-category', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fa fa-cubes"></i>
                            <span> Category</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('category.index') }}">View</a></li>
                            <li><a href="{{ route('category.create') }}">Create</a></li>
                        </ul>
                    </li>
                @endcan --}}

                {{-- @can('view-product', User::class) --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fas fa-fill-drip"></i>
                            <span> Product</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('product.index') }}">Product List</a></li>
                            <li><a href="{{ route('product.create') }}">Add Product</a></li>
                            {{-- <li><a href="{{ route('outofstock') }}">Out of Stock</a></li> --}}

                        </ul>
                    </li>
                {{-- @endcan --}}

                {{-- @can('view-order', User::class) --}}
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fab fa-dribbble"></i>
                            <span>Sell</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('order.index') }}">Selling History</a></li>
                            <li><a href="{{ route('order.create') }}">Sell Product</a></li>
                            {{-- <li><a href="{{ route('waste_order.create') }}">Buy Waste Metiral</a></li> --}}
                        </ul>
                    </li>
                {{-- @endcan --}}

                {{-- @can('view-customer', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class=" fa fa-user-md"></i>
                            <span>Customer</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('customer.index') }}">Customers List</a></li>

                        </ul>
                    </li>
                @endcan --}}

                {{-- @can('view-supplier', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="far fa-user"></i>
                            <span>Supplier</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('supplier.index') }}">view</a></li>
                            <li><a href="{{ route('supplier.create') }}">create</a></li>

                        </ul>
                    </li>
                @endcan --}}

                {{-- @can('view-user', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fa fa-child"></i>
                            <span> User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('user.index') }}">View</a></li>
                            <li><a href="{{ route('user.create') }}">Create</a></li>
                        </ul>
                    </li>
                @endcan

                @can('view-role', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fab fa-tencent-weibo"></i>
                            <span> Roles </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('role.index') }}">View</a></li>
                            <li><a href="{{ route('role.create') }}">Create</a></li>
                        </ul>
                    </li>
                @endcan

                @can('view-permission', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fa fa-puzzle-piece"></i>
                            <span> Permissions</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ route('permission.index') }}">View</a></li>
                            <li><a href="{{ route('permission.create') }}">Create</a></li>
                        </ul>
                    </li>
                @endcan

                @can('subscribed-plan', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fab fa-codepen"></i>
                            <span> Subscribed Plan</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ url('subscribed/plan/list') }}">View</a></li>
                        </ul>
                    </li>
                @endcan

                @can('view-quote', User::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fab fa-empire"></i>
                            <span>Favourite</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ url('quotation/create') }}">Fixed Quotation</a></li>
                            <li><a href="{{ url('quote') }}">Quotation</a></li>

                        </ul>
                    </li>
                @endcan

                @can('cms', Cms::class)
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fab fa-openid"></i>
                            <span>CMS</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fab fa-stumbleupon mr-1"></i>
                                    <span>Banner</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('cms/banner') }}">View</a></li>
                                    <li><a href="{{ url('cms/banner/create') }}">Create</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fab fa-soundcloud mr-1"></i>
                                    <span>Inventory</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('cms/inventory') }}">View</a></li>
                                    <li><a href="{{ url('cms/inventory/create') }}">Create</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fab fa-vine mr-1"></i>
                                    <span>Feature</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('cms/feature') }}">View</a></li>
                                    <li><a href="{{ url('cms/feature/create') }}">Create</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fab fa-xing mr-1"></i>
                                    <span>About</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('cms/about') }}">View</a></li>
                                    <li><a href="{{ url('cms/about/create') }}">Create</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fa fa-headphones mr-1"></i>
                                    <span>Contact</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{ url('cms/contact') }}">View</a></li>
                                    <li><a href="{{ url('cms/contact/create') }}">Create</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endcan --}}
            </ul>

        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
