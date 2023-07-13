<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="{{ url('admin/dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('admin/produk') }}">
        <i class="bi bi-menu-button-wide"></i><span>Produk</span>
      </a>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('admin/pesanan') }}">
        <i class="bi bi-journal-text"></i><span>Pesanan</span>
      </a>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed"  href="{{ url('admin/pembelian') }}">
        <i class="bi bi-layout-text-window-reverse"></i>
        <span>Pembelian</span>
      </a>
    </li><!-- End Tables Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('admin/pelanggan') }}">
        <i class="bi bi-person"></i>
        <span>Pelanggan</span>
      </a>
    </li><!-- End Profile Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ url('admin/jenisproduk') }}">
        <i class="bi bi-card-list"></i>
        <span>Jenis Produk</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-heading">Pages</li>

    {{-- <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a> --}}
    {{-- </li><!-- End Contact Page Nav --> --}}

    

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login to Front</span>
      </a>
    </li><!-- End Login Page Nav -->

  </ul>

</aside><!-- End Sidebar-->