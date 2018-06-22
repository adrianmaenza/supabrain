@include('partials.header')
<div id="app">
    <banner></banner>
    <navigation></navigation>
    @yield('content')
</div>
@include('partials.footer')