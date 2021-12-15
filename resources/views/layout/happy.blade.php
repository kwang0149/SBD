<!DOCTYPE html>
<html>

<head>
    <title>
        @yield('title')
    </title>
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
            .sidebar {
                position: sticky;
                top: 20px;
            }
            /* position: -webkit-sticky; */
</style>

</head>
<body>
    <div class="container-fluid min-vw-100"  >
        <div class="row m-5">
            <aside class="col-2 ">
                <header class="row navbar-brand container rounded bg-secondary bg-opacity-10 p-2">
                    <div class="col-4 py-2">
                        {{-- <a href="" class="navbar-brand">
                            <img src="{{ asset('../../images/Me.jpg') }}" class="img-fluid rounded float-start"/>
                        </a> --}}
                    </div>
                    <div class="fw-bold text-decoration-none text-wrap text-dark mb-3">

                        <div class="row sidebar">
                            <span>Basis Data Bimits</span>
                        </div>
                    </div>
                </header>
                <div class="row container rounded bg-secondary bg-opacity-10 mt-4 p-2 sidebar">
                    <nav class="navbar navbar-expand align-items-start py-2 sticky-top fixed-left">
                        <div class="col fw-bold">
                            <div class="  mb-1">
                                <span>Menu</span>
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item">
                                    <a href="#pembina" class="nav-link text-dark">Pembina</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pengurus" class="nav-link text-dark">Pengurus</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#anggota" class="nav-link text-dark">Anggota</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#mahasiswa" class="nav-link text-dark">Mahasiswa</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#proker" class="nav-link text-dark">Proker</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#pengurus-oprec" class="nav-link text-dark">Pengurus Oprec</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#peserta" class="nav-link text-dark">Peserta</a>
                                </li>
                            </ul>
                        </div>
                      </nav>
                      
                </div>
            </aside>
            <div class="col-10">
                <div class="row container rounded bg-secondary bg-opacity-10 p-5">
                    @yield('konten')
                </div>
            </div>
        </div>
        <footer class="m-5">
            <div class="row text-center">
                <span>&copy; 2021</span>
            </div>
            <div class="row text-center">
                <span>Hak Cipta oleh </span>
            </div>
        </footer>
    </div>



<footer>
</footer>
</body>

</html>
