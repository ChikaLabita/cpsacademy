<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>CPS Academy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body class="antialiased" id="home">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #173F5F;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <img src="{{url('/assets/logo.png')}}" alt="Image" width="130" height="70">
            </a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#our-course">Our Course</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="py-5" style="background-color: #173F5F;">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                        src="{{url('/assets/logo.png')}}" alt="..." /></div>
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <!--h1 class="display-5 fw-bolder text-white mb-2">A Bootstrap 5 template for modern businesses</h1-->
                        <p class="lead fw-normal text-white-50 mb-4">Public Speaking courses with Professional
                            Speakers. It's not that you can't do it. But you've never tried. So...</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#our-course">Register Now</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">A better way to start learn skill public speaking.</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Complete Material <i class="fas fa-book-open    "></i></h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Training with Professional Speakers <i class="fa fa-users"></i></h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Affordable Prices <i class="fas fa-wallet   "></i></h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Get a Certificate <i class="fa fa-certificate" aria-hidden="true"></i></h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Course -->
    <section class="py-5" style="background-color: #C8D2E3;" id="our-course">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Our Course</h1>
                <p class="lead fw-normal text-muted mb-0">Choose Your Course</p>
            </div>
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="position-relative mb-5">
                        <div class="card border-0 shadow rounded-3 overflow-hidden">
                            <div class="card-body p-0">
                                <div class="row gx-0">
                                    <div class="p-4 p-md-5">
                                        <div
                                            class="small text-uppercase fw-bold text-white badge bg-primary bg-gradient rounded-pill mb-2">
                                            Course Personal</div>
                                        <div class="mb-3">
                                            <span class="display-4 fw-bold">Rp. 0</span>
                                            <span class="text-muted">/ dummy.</span>
                                        </div>
                                        <ul class="list-unstyled mb-4">
                                            <li class="mb-2">
                                                <i class="bi bi-check text-primary"></i>
                                                <strong>Dummy</strong>
                                            </li>
                                            <li class="mb-2">
                                                <i class="bi bi-check text-primary"></i>
                                                Dummy
                                            </li>
                                        </ul>
                                        <div class="d-grid"><a class="btn btn-outline-primary " data-bs-toggle="modal"
                                                data-bs-target="#paymentModal">Choose
                                                Course</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="p-4 p-md-5">
                                    <div
                                        class="small text-uppercase fw-bold text-white badge bg-primary bg-gradient rounded-pill mb-2">
                                        Course Team</div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">Rp. 0</span>
                                        <span class="text-muted">/ dummy.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            <strong>Dummy</strong>
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Dummy
                                        </li>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#paymentModal1">Choose
                                            Course</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <strong>
                        <h5 class="modal-title" id="paymentModalLabel"><i class="fas fa-credit-card"> </i> Payment</h5>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="First name" id="first">
                                @error('first')
                                <small id="first" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Last name" id="last">
                                @error('last')
                                <small id="last" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <select id="jabatan" class="form-control">
                                <option selected>Pilih Profesi/Jabatan...</option>
                                <option>Pelajar</option>
                                <option>Karyawan</option>
                                <option>Belum/Tidak bekerja</option>
                            </select>
                            @error('jabatan')
                            <small id="jabatan" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                            @error('username')
                            <small id="username" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            @error('password')
                            <small id="password" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                            @error('password')
                            <small id=" password" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <div><span class="badge rounded-pill bg-dark mb-2">Course Personal</span></div>
                                <img src="{{url('/assets/dana.png')}}" alt="Image" width="120" height="35">
                                <br>
                                <div>
                                    <h6 class="card-subtitle px-4 text-muted mb-2">+62 852 3095 6459</h6>
                                </div>
                                <div class="mb-3">
                                    <span class="display-6 fw-bold">Rp. 0</span>
                                    <span class="text-muted">/ dummy.</span>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Bukti Pembayaran</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Team -->
    <div class="modal fade" id="paymentModal1" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <strong>
                        <h5 class="modal-title" id="paymentModalLabel"><i class="fas fa-credit-card"> </i> Payment</h5>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="First name" id="first">
                                @error('first')
                                <small id="first" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Last name" id="last">
                                @error('last')
                                <small id="last" class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label></label>
                            <select id="jabatan" class="form-control">
                                <option selected>Pilih Profesi/Jabatan...</option>
                                <option>Pelajar</option>
                                <option>Karyawan</option>
                                <option>Belum/Tidak bekerja</option>
                            </select>
                            @error('jabatan')
                            <small id="jabatan" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="text" class="form-control" id="username" placeholder="Username">
                            @error('username')
                            <small id="username" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                            @error('password')
                            <small id="password" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label></label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                            @error('password')
                            <small id=" password" class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <hr />
                        <div class="card">
                            <div class="card-body">
                                <div><span class="badge rounded-pill bg-dark mb-2">Course Team</span></div>
                                <img src="{{url('/assets/dana.png')}}" alt="Image" width="120" height="35">
                                <br>
                                <div>
                                    <h6 class="card-subtitle px-4 text-muted mb-2">+62 852 3095 6459</h6>
                                </div>
                                <div class="mb-3">
                                    <span class="display-6 fw-bold">Rp. 0</span>
                                    <span class="text-muted">/ dummy.</span>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Bukti Pembayaran</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us-->
    <section class="py-5" id="about-us">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">About Us</h1>
                <p class="lead fw-normal text-muted mb-0">hm</p>
            </div>
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                        src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                <div class="col-lg-6">
                    <p class="lead fw-normal text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Iusto est, ut esse a labore aliquam beatae expedita. Blanditiis impedit numquam libero molestiae
                        et fugit cupiditate, quibusdam expedita, maiores eaque quisquam.</p>
                </div>
            </div>
        </div>
        <div class="container px-5 my-5">
            <div class="text-center">
                <h4 class="fw-bolder">Our Professional Speakers</h4>
                <p class="lead fw-normal text-muted mb-5">Professional Speakers</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                            src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Ibbie Eckart</h5>
                        <div class="fst-italic text-muted">Founder &amp; CEO</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                            src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Arden Vasek</h5>
                        <div class="fst-italic text-muted">CFO</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-sm-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                            src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Toribio Nerthus</h5>
                        <div class="fst-italic text-muted">Operations Manager</div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4"
                            src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                        <h5 class="fw-bolder">Malvina Cilla</h5>
                        <div class="fst-italic text-muted">CTO</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section class="py-5" style="background-color: #C8D2E3;" id="contact-us">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                        src="{{url('/assets/cps.png')}}" alt="..." /></div>
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Address <i class="fa fa-address-card" aria-hidden="true"></i></h2>
                            <p class="mb-0">Jl. Raya Surabaya - Malang No. xx </p>
                        </div>
                        <div class="col mb-5 h-100">
                            <h2 class="h5">E-mail <i class="fas fa-mail-bulk    "></i></h2>
                            <p class="mb-0">cps.academy@gmail.com</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <h2 class="h5">Phone <i class="fas fa-phone"></i></h2>
                            <p class="mb-0">(021) - xxxxxx</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <h2 class="h5">More Social Media <i class="fa fa-info-circle" aria-hidden="true"></i></h2>
                            <p class="mb-0">Logo Instagram | Logo TikTok @cps.academy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-4 mt-auto" style="background-color: #173F5F;">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; CPS Academy 2022</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

</body>

</html>