<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#253b2f">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Architronix description contents">
    <title>Vande Enterprises</title>
    <link rel="shortcut icon" type="images/png" href="assets/images/logo1.png">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive-fixes.css">
</head>

<body>
    <div class="page">

        <!-- Page Lines -->
        <div class="w-100 h-100 position-fixed top-0 start-0 page-lines">
            <div class="container position-relative h-100">
                <span class="page-line-start position-absolute h-100"></span>
                <span class="page-line-end position-absolute h-100"></span>
                <span class="page-line-inner position-absolute h-100 d-none d-xl-block"></span>
            </div>
        </div>

        <!-- Header Section -->
        <header class="section-header header-1 architronix-nav sticky-navbar header-tra-dark">
            <div class="container">
                <nav class="navbar navbar-style-2 navbar-expand-xl navbar-light nav-border hover-menu" aria-label="Offcanvas navbar large">

                    <div class="d-flex align-items-center">
                        <a class="navbar-brand py-0" href="index.php">
                            <!-- Logo - replaced SVG with image -->
                            <span class="logo logo-primary">
                                <img src="assets/images/logo1.png" alt="Vande Enterprises Logo" width="219">
                            </span>
                            <span class="logo logo-sticky">
                                <img src="assets/images/logo1.png" alt="Vande Enterprises Logo" width="219">
                            </span>
                        </a>

                    </div>

                    <a href="javascript:void(0)" class="toggler-icon text-decoration-none d-block d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#architronixNavbar" aria-controls="architronixNavbar" aria-label="Toggle navigation">
                        <svg class="menu-light" width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="1.5" y1="1.5" x2="38.5" y2="1.5" stroke-width="3" stroke-linecap="round" />
                            <line x1="1.5" y1="11.5" x2="38.5" y2="11.5" stroke-width="3" stroke-linecap="round" />
                            <line x1="21.5" y1="21.5" x2="38.5" y2="21.5" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </a>
                    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="architronixNavbar" aria-labelledby="architronixNavbarLabel">
                        <div class="offcanvas-header">
                            <span class="offcanvas-title" id="architronixNavbarLabel">
                                <span class="logo">
                                    <!-- Offcanvas logo - replaced SVG with image -->
                                    <img src="assets/images/logo1.png" alt="Vande Enterprises Logo" width="219">
                                </span>
                            </span>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 align-items-xl-center">
                                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>



                                <li class="nav-item"><a class="nav-link" href="index.php#services">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>

                                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                                <li class="nav-item">
                                    <div class="d-flex gap-4 align-items-center">
                                        <a class="nav-link nav-link-icon" href="#" data-bs-toggle="modal" data-bs-target="#FullScreenModal">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_142_460)">
                                                    <path d="M23.7068 22.2938L17.7378 16.3248C19.3644 14.3354 20.1642 11.7969 19.9716 9.23432C19.7791 6.67179 18.609 4.28129 16.7034 2.55728C14.7977 0.833269 12.3024 -0.0923492 9.73342 -0.0281174C7.16447 0.0361144 4.71849 1.08528 2.9014 2.90237C1.08431 4.71946 0.0351379 7.16545 -0.029094 9.7344C-0.0933258 12.3034 0.832293 14.7987 2.5563 16.7043C4.28031 18.61 6.67081 19.7801 9.23334 19.9726C11.7959 20.1651 14.3344 19.3654 16.3238 17.7388L22.2928 23.7078C22.4814 23.8899 22.734 23.9907 22.9962 23.9884C23.2584 23.9862 23.5092 23.881 23.6946 23.6956C23.88 23.5102 23.9852 23.2594 23.9875 22.9972C23.9897 22.735 23.8889 22.4824 23.7068 22.2938ZM9.99978 18.0008C8.41753 18.0008 6.87081 17.5316 5.55522 16.6525C4.23963 15.7735 3.21425 14.524 2.60875 13.0622C2.00324 11.6004 1.84482 9.99189 2.1535 8.44004C2.46218 6.88819 3.22411 5.46272 4.34293 4.3439C5.46175 3.22508 6.88721 2.46316 8.43906 2.15448C9.99091 1.84579 11.5994 2.00422 13.0613 2.60972C14.5231 3.21522 15.7725 4.2406 16.6515 5.5562C17.5306 6.87179 17.9998 8.41851 17.9998 10.0008C17.9974 12.1218 17.1538 14.1552 15.654 15.655C14.1542 17.1548 12.1208 17.9984 9.99978 18.0008Z" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_142_460">
                                                        <rect width="24" height="24" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>

                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Full Screen Modal (Search) -->
        <div class="modal fade" id="FullScreenModal" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 2L53 53" stroke="#D2E0D9" stroke-width="3" />
                                <line x1="1.93543" y1="53.4393" x2="52.9354" y2="2.43934" stroke="#D2E0D9" stroke-width="3" />
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <h2 class="display-2 fw-extra-bold mb-30">Search</h2>
                            <form action="#" class="modal-search-form">
                                <div class="position-relative">
                                    <input type="text" class="form-control" id="formInput" placeholder="Type & Hit Enter" required>
                                    <button class="search-icon" type="submit">
                                        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_865_1148)">
                                                <path d="M43.4629 40.8718L32.5198 29.9286C35.5019 26.2814 36.9681 21.6275 36.6151 16.9295C36.2622 12.2315 34.117 7.84895 30.6233 4.68826C27.1297 1.52758 22.5548 -0.169388 17.8451 -0.05163C13.1354 0.0661284 8.65104 1.9896 5.31971 5.32093C1.98838 8.65227 0.0649077 13.1366 -0.0528507 17.8463C-0.170609 22.5561 1.52636 27.1309 4.68704 30.6246C7.84773 34.1182 12.2303 36.2634 16.9283 36.6164C21.6263 36.9693 26.2802 35.5031 29.9274 32.521L40.8706 43.4642C41.2164 43.7981 41.6795 43.9829 42.1602 43.9787C42.6409 43.9745 43.1007 43.7817 43.4406 43.4418C43.7805 43.1019 43.9733 42.6421 43.9775 42.1614C43.9817 41.6807 43.7969 41.2176 43.4629 40.8718ZM18.3334 33.0013C15.4326 33.0013 12.597 32.1411 10.1851 30.5295C7.77314 28.9179 5.89327 26.6273 4.78319 23.9473C3.6731 21.2674 3.38265 18.3184 3.94857 15.4733C4.51449 12.6283 5.91135 10.0149 7.96252 7.96374C10.0137 5.91257 12.627 4.51571 15.4721 3.94979C18.3172 3.38388 21.2661 3.67432 23.9461 4.78441C26.6261 5.8945 28.9167 7.77436 30.5283 10.1863C32.1399 12.5982 33.0001 15.4339 33.0001 18.3346C32.9957 22.2231 31.4491 25.9511 28.6995 28.7007C25.9499 31.4503 22.2219 32.9969 18.3334 33.0013Z" fill="#D2E0D9" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_865_1148">
                                                    <rect width="44" height="44" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
