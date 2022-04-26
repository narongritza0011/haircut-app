@include('layouts.components.header')

<body>

    @include('layouts.components.loader')


    <div id="main-wrapper">

        @include('layouts.components.topbar')


        @include('layouts.components.sidebar')

        <div class="page-wrapper">
            @yield('content')
        </div>

        @include('layouts.components.footer')

    </div>

    </div>

    @include('layouts.components.script')

</body>

</html>
