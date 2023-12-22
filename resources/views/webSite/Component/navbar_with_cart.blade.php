<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lankan Hydroponic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('webSiteImages/logonew.jpg')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('css/webSiteCss/lib/animate/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/webSiteCss/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href=" {{asset('css/webSiteCss/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('css/webSiteCss/css/style.css')}}" rel="stylesheet">
    <style>
        .navbar {
            transition: transform 0.3s ease-out;
        }
    </style>
    <script>
        let prevScrollPos = window.pageYOffset;

        window.onscroll = function () {
            const currentScrollPos = window.pageYOffset;
            const navbar = document.querySelector(".navbar");

            if (prevScrollPos > currentScrollPos) {
                navbar.style.transform = "translateY(0)";
            } else {
                navbar.style.transform = `translateY(-${navbar.clientHeight}px)`;
            }

            prevScrollPos = currentScrollPos;
        };
    </script>

    

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark sticky-top">
        <div class="container">
            {{-- <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0" >  --}}
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 fixed-top">

                <a href="index.html" class="navbar-brand" style="margin-left: 10%">
                    <img class="img-fluid" style="height: 80%;border-radius: 0px 0px 20px 20px;"
                        src="{{asset('webSiteImages/logonew.jpg')}}" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link text-white active">Home</a>
                        {{--<a href="#about" class="nav-item nav-link text-white">About</a>
                         <a href="#product" class="nav-item nav-link text-white">Products</a> --}}
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Gallery
                            </a>
                            <div class="dropdown-menu link dropdown-text-white" aria-labelledby="navbarDropdown"
                                style="background-color: black;">
                                <a class="dropdown-item text-white" href="#article">Article</a>
                                <a class="dropdown-item text-white" href="#videos">Videos</a>
                            </div>
                        </li> --}}
                        {{-- <a href="#product" class="nav-item nav-link text-white">Products</a> --}}
                        <a href="{{ route('items') }}" class="nav-item nav-link text-white">Store</a>
                        {{-- <a href="#feedback" class="nav-item nav-link text-white">Feedback</a> --}}
                        {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}


                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ url('/cart') }}">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="cart-item-count" id="itemCountContainer"></span>
                                    </a>
                                    <script>
                                        function getCartData() {

                                            const cartCookie = getCookie('cart');

                                            try {
                                                const cartData = JSON.parse(cartCookie);
                                                if (Array.isArray(cartData)) {
                                                    return cartData;
                                                }

                                            } catch (error) {
                                                console.error('Error parsing cart data:', error);
                                            }

                                            return [];
                                        }
                                        const cartData = getCartData();
                                        const itemCount = cartData.length;

                                        const itemCountElement = document.getElementById('itemCountContainer');
                                        itemCountElement.textContent = `${itemCount}`;

                                        function getCookie(name) {
                                            const cookieValue = document.cookie.match(
                                                `(^|;)\\s*${name}\\s*=\\s*([^;]+)`);
                                            return cookieValue ? cookieValue.pop() : null;
                                        }
                                    </script>


                                </li>



                            </ul>

                        </div>
                        @if (Route::has('login'))

                        @auth
                        @if(Auth::user()->role=='admin')
                        <a href="{{ url('/admin') }}" style="color: white"
                            class="nav-item nav-link">{{Auth::user()->fname}}</a>
                        @elseif(Auth::user()->role=='user')
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->fname}}
                            </a>
                            <div class="dropdown-menu link dropdown-text-white" aria-labelledby="navbarDropdown"
                                style="background-color: black;">
                                <a class="dropdown-item text-white" href="/returnEditProfileUser">Profile</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-white">Logout</button>
                                </form>
                                
                                <a href="#" id="logout-link" class="dropdown-item text-white">Logout</a>
                                {{-- <a href="{{ url('ordersummery') }}" id="ordersummery-link" class="dropdown-item text-white">Order summery</a> --}}
                                <script>
                                    document.getElementById("logout-link").addEventListener("click", function(event) {
                                        event.preventDefault(); // Prevent the default link behavior
                                        document.getElementById("logout-form").submit(); // Submit the form
                                    });
                                </script>
                            </div>
                        </li>
                        {{-- <a href="{{ url('/user') }}" style="color: white"
                            class="nav-item nav-link">{{Auth::user()->fname}}</a> --}}
                        @elseif(Auth::user()->role=='director')
                        <a href="{{ url('/director') }}" style="color: white"
                            class="nav-item nav-link">{{Auth::user()->fname}}</a>
                        @else
                        <a href="{{ url('/cEngineer') }}" style="color: white"
                            class="nav-item nav-link">{{Auth::user()->fname}}</a>
                        @endif
                        @else
                        {{-- <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> &nbsp;Login</a> --}}
                        <a class="nav-item nav-link text-white btn-outline-dark" style="margin-top: -1%">
                            <button class="btn btn-outline-light btn-md" id="trigger"
                                >Login</button>
                        </a>

                        <a class="nav-item nav-link text-white btn-outline-dark" style="margin-top: -1%;margin-left: -3%">
                            <button class="btn btn-outline-light btn-md" id="trigger_Reg"
                                >Register</button>
                        </a>
                        @endif

                        <script>
                            document.getElementById('trigger').addEventListener('click', function() {
                                window.location.href = "{{ route('login') }}";
                            });
                            document.getElementById('trigger_Reg').addEventListener('click', function() {
                                window.location.href = "{{ route('register') }}";
                            });
                        </script>

                        @endauth

                        


                        {{-- <li class="nav-item">
    @if (Route::has('login'))
    <a class="nav-link text-white" href="/admin"><i class="fas fa-user"></i> &nbsp;{{Auth::user()->name}}</a>


                        @else
                        <a class="nav-link text-white" href="#"><i class="fas fa-user"></i> &nbsp;Hi</a>
                        @endif
                        </li> --}}
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
