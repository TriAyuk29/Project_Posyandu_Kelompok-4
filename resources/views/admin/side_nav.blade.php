<aside class="side-nav">

<section class="sidebar">

<div class="container text-center">
<div class="row">
<div class="col-10">
  <div class="brand class">
    <h3><b>E-KMS</b> Posyandu</h3>
  </div>
  </div>
</div>
</div>

  <nav>

    <a href=" {{ route('dashboard') }}"><i class="ti-more"></i>Dashboard</a>

    <a href=" {{ route('datapeserta.view') }}"><i class="ti-more"></i>Profile Kader</a>

    <a href=" {{ route('jadwal.view') }}"><i class="ti-more"></i>Jadwal</a>

    <a href=" {{ route('datapeserta.view') }}"><i class="ti-more"></i>Pendataan Peserta</a>

    <a href=" {{ route('inventaris.view') }}"><i class="ti-more"></i>Inventaris</a>

    <a href="{{ url('user/logout') }}">Logout</a>

  </nav>
</aside>
