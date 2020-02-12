
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@include('layouts.navbars.sidebar')
<div class="main-panel">
    @if (!in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock']))
        @include('layouts.navbars.navs.auth')
    @endif
    @yield('content')
    @include('layouts.footer')
</div>