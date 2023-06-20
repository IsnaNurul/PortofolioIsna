<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Profil {{ auth()->user()->name }}</title>
    
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <style>
      #navbar{
        background-color: #6096B4;
      }
      #button {
      color: #fff;
      background-color: #6096B4;
      }
    </style>
  </head>
  <body>
    <header class="navbar navbar-dark sticky-top p-0 shadow" id="navbar">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Halaman Admin</a>
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="nav-link px-3 border-0 text-white" id="button">
              Log out <span data-feather="log-out"></span>
            </button>
          </form>
        </div>
      </div>
    </header>


    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" aria-current="page" href="/admin">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('profil*') ? 'active' : '' }}" href="/profil">
                    <span data-feather="user"></span>
                    My Profil
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('portofolio*') ? 'active' : '' }}" href="/portofolio">
                    <span data-feather="file-text"></span>
                    My Portofolio
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ Request::is('contact*') ? 'active' : '' }}" href="/contactadmin">
                    <span data-feather="phone"></span>
                    My Contact
                  </a>
                </li>
              </ul>
            </div>
          </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          @yield('container')
        </main>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" 
    crossorigin="anonymous"></script>  

    <script src="/js/dashboard.js"></script>
      <script>
        $(document).ready(function () {
          $('#example').DataTable();
        });
      </script>
  </body>
</html>
