<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Chonus.id</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">                          
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'HomeAdmin') ? 'active' : '' }}" aria-current="page" href="/homeAdmin">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Laporan') ? 'active' : '' }}" href="/laporan">Laporan</a>                    
        </li>
        <li class="nav-item" >
          <a class="nav-link {{ ($title === 'Kategori') ? 'active' : '' }}" href="/kategori">Kategori</a>                    
        </li>
        <li class="nav-item" >
          <a class="nav-link {{ ($title === 'Barang') ? 'active' : '' }}" href="/barang">Barang</a>                    
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === 'Gudang') ? 'active' : '' }}" href="/gudang">Gudang</a>                    
        </li>
      </ul>
    
      <ul class="navbar-nav ms-auto">        
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar"></i> Dashboard</a></li>              
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-arrow-bar-left"></i> Logout</button>
                </form>
              </li>              
            </ul>
          </li>
        @else
          <li class="nav-item">
              <a class="nav-link" style="color: white" aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>   
        @endauth        
      </ul> 
                    
    </div>
  </div>
</nav>