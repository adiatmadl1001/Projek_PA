
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height:100vh ">
    <a href="/" class=" ms-4 link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-5 img-fluid d-flex justify-content-center gap-3">
        <img src="{{ asset('assets/img/pngegg.png') }}" alt="" width="70px" height="60px">
        <h2 class="fw-bold">OtoCapt</h2>
      </span>
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item align-items-center gap-2  d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bar-chart"><line x1="12" x2="12" y1="20" y2="10"/><line x1="18" x2="18" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="16"/></svg>
        <a href="/main" class="nav-link text-black" aria-current="page">
          Report Data
        </a>
      </li>

      <li class="nav-item align-items-center gap-2  d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M3 5V19A9 3 0 0 0 21 19V5"/><path d="M3 12A9 3 0 0 0 21 12"/></svg>
        <a href="/usage" class="nav-link text-black" aria-current="page">
          Usage Table
        </a>
      </li>

      <li class="nav-item align-items-center gap-2  d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-percent"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m15 9-6 6"/><path d="M9 9h.01"/><path d="M15 15h.01"/></svg>
        <a href="#" class="nav-link text-black" aria-current="page">
          Penjualan
        </a>
      </li>

      <li class="nav-item align-items-center gap-2  d-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart"><circle cx="8" cy="21" r="1"/><circle cx="19" cy="21" r="1"/><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"/></svg>
        <a href="#" class="nav-link text-black" aria-current="page">
          Pembelian
        </a>
      </li>
    </ul>

    <hr>

    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Me</strong>
      </a>

      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">Andrew Limanto</a></li>
        <li><a class="dropdown-item" href="#">ID0122322</a></li>
        <li><a class="dropdown-item" href="#">User</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="{{ route('logoutaksi') }}">Sign out</a></li>
      </ul>
    </div>
  </div>
