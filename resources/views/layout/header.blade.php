@section('header')
<header class="header">
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <img src="/images/logo.png" alt="Example Navbar 1" class="mr-2" height="18">
    <a class="navbar-brand" href="/"><strong>GEININ RECORD</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a href="/geinin/create" class="nav-link">芸人追加</a>
        </li>
        <li class="nav-item">
            <a href="/video/create" class="nav-link">動画追加</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="https://designrevision.com" id="navbarDropdownMenuLink-7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-7">
            <a class="dropdown-item" href="#">Design</a>
            <a class="dropdown-item" href="#">Development</a>
            <a class="dropdown-item" href="#">Marketing</a>
          </div>
        </li> --}}
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</header>
@endsection