<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.head')
</head>

<body>
  <main class="main">
    @include('admin.side_nav')



    <div class="content">

      @yield('content')

      @yield('admin')

      @include('admin.footer')

    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
