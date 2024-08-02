<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ekart | Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="super_container" style="background-color: rgb(8, 8, 43);">

        @include('users.templates.header')

        <section style="background-color: #eee;">
            <div class="text-center container py-5">
                <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://www.apple.com/newsroom/images/product/iphone/standard/apple_iphone-12-spring21_purple_04202021_big.jpg.large.jpg"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100">
                                            <h5><span class="badge bg-primary ms-2">New</span></h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">I Phone</h5>
                                </a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Buy
                                        Now</button></a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
                                        to kart</button></a>
                                <h6 class="mb-3">$61.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIqxJ5mKD1oG9w426alzKGhWKsq0K2NfvIKA&s"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100">
                                            <h5><span class="badge bg-success ms-2">Eco</span></h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">Smart TV</h5>
                                </a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Buy
                                        Now</button></a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
                                        to kart</button></a>
                                <h6 class="mb-3">$61.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                <img src="https://m.media-amazon.com/images/I/71ium7SD9VL._AC_UF350,350_QL80_.jpg"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100">
                                            <h5><span class="badge bg-danger ms-2">-10%</span></h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">Sumsung Watch</h5>
                                </a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Buy
                                        Now</button></a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
                                        to kart</button></a>
                                <h6 class="mb-3">
                                    <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(23).webp"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100">
                                            <h5>
                                                <span class="badge bg-success ms-2">Eco</span><span
                                                    class="badge bg-danger ms-2">-10%</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">Product name</h5>
                                </a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Buy
                                        Now</button></a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
                                        to kart</button></a>
                                <h6 class="mb-3">
                                    <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                                </h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                                data-mdb-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(17).webp"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100"></div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">Product name</h5>
                                </a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Buy
                                        Now</button></a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
                                        to kart</button></a>
                                <h6 class="mb-3">$61.99</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                    class="w-100" />
                                <a href="#!">
                                    <div class="mask">
                                        <div class="d-flex justify-content-start align-items-end h-100">
                                            <h5>
                                                <span class="badge bg-primary ms-2">New</span><span
                                                    class="badge bg-success ms-2">Eco</span><span
                                                    class="badge bg-danger ms-2">-10%</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">Product name</h5>
                                </a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Buy
                                        Now</button></a>
                                <a href=""><button type="button"
                                        class="text-white bg-gradient-to-r from-cyan-500 to-red-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add
                                        to kart</button></a>
                                <h6 class="mb-3">
                                    <s>$61.99</s><strong class="ms-2 text-danger">$50.99</strong>
                                </h6>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card">
                                    <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(30).webp"
                                            class="w-100" />
                                        <a href="#!">
                                            <div class="mask">
                                                <div class="d-flex justify-content-start align-items-end h-100">
                                                    <h5>
                                                        <span class="badge bg-primary ms-2">New</span><span
                                                            class="badge bg-success ms-2">Eco</span><span
                                                            class="badge bg-danger ms-2">-10%</span>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="hover-overlay">
                                                <div class="mask"
                                                    style="background-color: rgba(251, 251, 251, 0.15);">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- component -->
        @include('users.templates.footer')
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
