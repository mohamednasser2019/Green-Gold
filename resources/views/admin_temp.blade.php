@include('layouts.admin_header')

<body id="page-top">


@include('layouts.admin_nav')

<div id="content-wrapper">

    <div class="container-fluid">


        @yield('navbar')



        @include('layouts.errors')


        @include('layouts.messages')


        @yield('content')


    </div>
    <!-- /.container-fluid -->

    <!-- Sticky Footer -->


</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


@include('layouts.admin_modal')


@include('layouts.modals')

@include('layouts.admin_footer')
