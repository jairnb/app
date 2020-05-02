<!DOCTYPE html>
<html lang="en">

    @include('admin.partials._head')
<body id="page-top">
    <div id="wrapper">

        @include('admin.partials._sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('admin.partials._nav')

                <div class="container-fluid">
                    @yield('content')
                </div>


            </div>

            @include('admin.partials._footer')
        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('admin.partials._scripts')
</body>
</html>
