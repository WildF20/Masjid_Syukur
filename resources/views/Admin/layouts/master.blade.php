<!DOCTYPE html>
<html>
<head>
  @include('Admin.layouts.headlink')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('Admin.layouts.navbar')

  @include('Admin.layouts.sidebar')

  @yield('content')

  @include('Admin.layouts.footer')

  @include('Admin.layouts.control')

</div>

  @include('Admin.layouts.footlink')

</body>
</html>
