<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            {{-- <div class="sidebar border border-right col-md-1 col-lg-1 p-0 bg-body-tertiary">
                <div class="d-flex flex-column flex-shrink-0 bg-body-tertiary" style="width: 4.5rem;">
                    <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none"
                        data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
                        <svg class="bi pe-none" width="40" height="32">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                        <span class="visually-hidden">Icon-only</span>
                    </a>
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                        <li class="nav-item">
                            <a href="#" class="nav-link active py-3 border-bottom rounded-0" aria-current="page"
                                data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home"
                                data-bs-original-title="Home">
                                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                                    <use xlink:href="#home"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                                data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
                                <svg class="bi pe-none" width="24" height="24" role="img"
                                    aria-label="Dashboard">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                                data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
                                <svg class="bi pe-none" width="24" height="24" role="img"
                                    aria-label="Orders">
                                    <use xlink:href="#table"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                                data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
                                <svg class="bi pe-none" width="24" height="24" role="img"
                                    aria-label="Products">
                                    <use xlink:href="#grid"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                                data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
                                <svg class="bi pe-none" width="24" height="24" role="img"
                                    aria-label="Customers">
                                    <use xlink:href="#people-circle"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown border-top">
                        <a href="#"
                            class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
</body>

</html>
