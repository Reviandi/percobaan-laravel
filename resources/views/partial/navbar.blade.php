<nav class="navbar-light bg-warning">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span></button>
    <a class="navbar-brand" href="/">TX23</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Abot") ? 'active' : '' }}" href="/abot">Abot</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Blog") ? 'active' : '' }}" href="/oke">Oke</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($tittle === "Categories") ? 'active' : '' }}" href="/categories">Kategori</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  