@include('includes.header')
@include('includes.navebar')
@include('includes.sidebar')
@include('includes.content-header')
{{-- Main content --}}
<div class="content">
    <div class="container-fluid">
        <router-view></router-view>
    </div> {{-- /.content-fluid --}}
</div> {{-- /.content --}}
</div> {{-- /.content-wrapper ** This div starts from content-header file ** --}}
@include('includes.control-sidebar')
@include('includes.footer')