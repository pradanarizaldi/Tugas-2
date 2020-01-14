<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.meta')
    @include('components.css')
    @include('components.js')
    <title>Document</title>
</head>

<body id="page-top">
    <div id="wrapper">
        @include('partials.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('partials.topbar')
                    @yield('container')
                @include('partials.footer')
            </div>
        </div>
    </div>
</body>

</html>
