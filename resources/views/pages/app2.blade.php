ΐ���Mΐ�������p����������/�������[����/����	����������	�����	�����9�����A����                                                                                                                                                                                                                                                                                                                                                                                                              
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700,300,600,800,400&subset=cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
    {{--<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500&subset=cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>--}}

    {{--slide--}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

</head>
<body>

    @include('partials.homeNav')
    @yield('welcome')
    <div class="container">
        @yield('content')
    </div>

{{--    @include('pages.tuslah')--}}
    @include('partials.footer')

</body>
</html>