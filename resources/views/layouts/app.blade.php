@include('layouts.partials.head')

<body>
  <div id="app">
    @include('layouts.partials.navbar') @yield('content')
  </div>

  <script src="{{ asset('js/vendors/jquery.min.js') }}"></script>
  <script src="{{ asset('js/vendors/bootstrap.min.js') }}"></script>
</body>

</html>
