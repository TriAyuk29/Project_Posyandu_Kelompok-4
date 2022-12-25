<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Posyandu Web</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

  @yield('style')
</head>

<body class="bg-primary">
  {{-- navbar --}}
  <section>
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          </ul>

          {{-- PENGECEKAN SUDAH LOGIN APA BELUM --}}
          @if (Auth::check() == false)
            <a class="btn btn-light ms-2" href="{{ url('user/register') }}">Register</a>
            <a class="btn btn-outline-light ms-2" href="{{ url('user/login') }}">Login</a>
          @else
            <a class="btn btn-light ms-2" href="{{ url('user/logout') }}">Logout</a>
          @endif

        </div>
      </div>
    </nav>
  </section>

  <section>
    @yield('content')
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  @yield('script')
</body>

</html>
