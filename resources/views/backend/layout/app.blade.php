{{-- @php
    $general = App\Models\General::where('user_id', Auth::user()->id)
        ->latest()
        ->first();
@endphp --}}
@include('backend.includes.header')
@include('backend.includes.top-nav')
@include('backend.includes.sidebar')

@yield('content')
@include('backend.includes.footer')
