<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
    @if (Auth::user()->role == 'auditor')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard')}}">
            <i class="bi bi-columns-gap"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/dashboard/laporan/buat')}}">
          <i class="bi bi-upload"></i>
          <span>Upload Laporan</span>
        </a>
      </li>
      @endif

      @if (Auth::user()->role == 'whistleblower')
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('pengaduan/buat')}}">
          <i class="bi bi-file-earmark-plus"></i>
          <span>Buat Pengaduan Baru</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('/pengaduan')}}">
          <i class="bi bi-file-earmark-text"></i>
          <span>Pengaduan Saya</span>
        </a>
      </li>
      @endif
    </ul>
</aside>
