<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROFIL | {{ $profil->nama_lengkap }}</title>
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="js1/bootstrap.bundle.js"></script>
    <style>
        #mainNav {
        background-color: #6096B4;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        transition: padding-top 0.3s, padding-bottom 0.3s;
        font-family: sans-serif;
        font-weight: 750;
        }
        #mainNav .navbar-brand {
        color: #fff;
        }
        #mainNav .navbar-nav li.nav-item a.nav-link {
        color: #fff;
        }
        #mainNav .navbar-nav li.nav-item a.nav-link:hover {
        color: #93BFCF;
        }

        #home{
            background-color: #93BFCF;
        }

        #portofolio{
            background-color: #93BFCF;
        }

        .footer {
        padding-top: 5rem;
        padding-bottom: 5rem;
        background-color: #6096B4;
        color: #fff;
        }

        .copyright {
        background-color: #5688a2;
        }
    </style>
</head>
<body id="page-top">

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">{{ $profil->nama_lengkap }}</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">  About</a></li>
                    <li class="nav-item"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portofolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- profil --}}
    <section id="home" class="pt-5 mt-5">
        <div class="container-fluid p-0 text-white">
            <div class="p-5 text-center">
                @if (file_exists("storage/".$profil->foto_profil))
                    <img src="/storage/{{ $profil->foto_profil }}" alt="" width="20%" height="20%" class="rounded-circle img-thumbnail">
                @endif
                <h1 class="display-4 pt-2">{{ $profil->nama_lengkap }}</h1>
                <p class="lead">{{ $profil->status }}</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,128L34.3,128C68.6,128,137,128,206,149.3C274.3,171,343,213,411,202.7C480,192,549,128,617,106.7C685.7,85,754,107,823,128C891.4,149,960,171,1029,186.7C1097.1,203,1166,213,1234,192C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
              </svg>
    </section>
    {{-- end profil --}}
   
    {{-- about --}}
    <section id="about" class=" text-sans-serif">
        <div class="container-fluid p-0">
            <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">ABOUT</h3>
                <div class="row justify-content-center">
                    <div class="col col-md-6">
                        <p>{{ $profil->about }}</p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#93BFCF" fill-opacity="1" d="M0,128L34.3,128C68.6,128,137,128,206,149.3C274.3,171,343,213,411,202.7C480,192,549,128,617,106.7C685.7,85,754,107,823,128C891.4,149,960,171,1029,186.7C1097.1,203,1166,213,1234,192C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
              </svg>
        </div>
    </section>
    {{-- end about --}}

    {{-- portofolio --}}
    <center>
    <section class="page-section portfolio" id="portofolio">
        <div class="container-fluid text-center">
            <h2 class="page-section-heading text-center text-sans-serif text-white fw-bold">PORTOFOLIO</h2>
            <div class="row d-flex justify-content-center">
                @foreach ($portofolio as $item)
                <div class="col col-md-4 mb-5 text-center">
                    <div class="card mt-5 ms-4" style="width: 18rem;">
                        <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="..." width="200" height="200">
                        <div class="card-body">
                          <h5 class="card-title">{{ $item->tittle }}</h5>
                          <p class="card-text">{{ $item->description }}</p>
                        </div>
                      </div>
                    </div>
                @endforeach
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,128L34.3,128C68.6,128,137,128,206,149.3C274.3,171,343,213,411,202.7C480,192,549,128,617,106.7C685.7,85,754,107,823,128C891.4,149,960,171,1029,186.7C1097.1,203,1166,213,1234,192C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
              </svg>
        </div>
    </section>
    </center>
  
    <!-- Contact Me -->
    <section id="contact" class="pb-5 text-sans-serif">
        <div class="container ">
            <div class="p-5 ">
                <h3 class="fw-bold mb-3  text-center">CONTACT ME</h3>
                <div class="row justify-content-center">
                    <div class="col col-md-6">
                        <form action="contact/create" method="post" id="form-contact">
                            @csrf
                            <div class=" mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" data-sb-validations="required">
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class=" mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" id="email" data-sb-validations="required,email">
                            </div>
                            <div class=" mb-3">
                                <label for="pesan" class="form-label">Pesan</label>
                                <textarea name="pesan" id="pesan" class="form-control" rows="3" data-sb-validations="required"></textarea>
                            </div>
                            <div class=" mb-3" id="button">
                            <button type="submit" class="btn text-white" style="background-color: #93BFCF">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Contact Me -->

    <!-- Footer -->
    <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                           {{ $profil->alamat }}
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="{{ $profil->ig }}">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a class="btn btn-outline-light btn-social mx-1" href="{{ $profil->wa }}">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a class="btn btn-outline-light btn-social mx-1" href="{{ $profil->twitt }}">
                            <i class="bi bi-twitter"></i>
                        </a>

                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            {{ $profil->about }}
                        </p>
                    </div>
                </div>
            </div>
    </footer>
    <!-- End Footer -->

    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; {{ $profil->nama_lengkap }} 2022</small></div>
    </div>
    <!-- end Copyright Section-->
</body>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" 
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" 
      crossorigin="anonymous">
</script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</html>