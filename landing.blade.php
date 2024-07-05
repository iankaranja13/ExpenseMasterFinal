<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Expense Master</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .carousel-container {
            position: relative;
            width: 100%;
            height: 400px; /* Adjust height as needed */
        }
        .carousel-item {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-align: center;
        }
        .carousel-item img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }
        .carousel-indicators button {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: none;
            background-color: #ccc;
            cursor: pointer;
        }
        .carousel-indicators button.active {
            background-color: #007bff;
        }
        .social-media {
            margin-top: 20px;
        }
        .social-media a {
            margin: 0 10px;
            font-size: 1.5em;
            color: #007bff;
        }
    </style>
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div>
                    <a class="text-xl font-bold text-gray-800" href="#">Expense Master</a>
                </div>
                <div class="flex items-center">
                    <ul class="flex items-center">
                        <li class="mr-6">
                            <a class="text-gray-600 hover:text-blue-600" href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="mr-6">
                            <a class="text-gray-600 hover:text-blue-600" href="{{ url('/register') }}">Registration</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-blue-600" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="carousel-container mt-4">
        <div id="default-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://res.cloudinary.com/go1/image/upload/v1605106074/kbhpzuwaavzm5xezwyvl.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://th.bing.com/th/id/R.31952e622f3e4c4e1779178bec31f2bd?rik=aLT6Jl9HXT7m5Q&riu=http%3a%2f%2fwww.buhle.org.za%2fwp-content%2fuploads%2f2020%2f08%2fSlide-3-eLearning-Advert-JS-MN-1024x576.jpg&ehk=7yrbK7%2fcdPibI2zq2AwBfBsX00o6xApZDb3R%2fwgs1YE%3d&risl=&pid=ImgRaw&r=0" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://www.slideteam.net/media/catalog/product/cache/1280x720/f/i/financial_budget_powerpoint_ppt_template_bundles_slide01.jpg" class="d-block w-100" alt="Slide 3">
                </div>
                <div class="carousel-item">
                    <img src="https://www.fincart.com/wp-content/uploads/2023/10/medium_Financial_Budgeting_d64e105122.jpg" class="d-block w-100" alt="Slide 4">
                </div>
                <div class="carousel-item">
                    <img src="https://th.bing.com/th/id/OIP.qm91m0T_2EhC5rqGDfUQ6QHaHa?w=1024&h=1024&rs=1&pid=ImgDetMain" class="d-block w-100" alt="Slide 5">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#default-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#default-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#default-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#default-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#default-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#default-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#default-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
        </div>
    </div>

    <div class="container mx-auto text-center my-5">
        <h2>Reach Us On</h2>
        <div class="social-media">
            <a href="https://twitter.com/" target="_blank"><i class="bi bi-twitter text-blue-600"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="bi bi-instagram text-blue-600"></i></a>
            <a href="https://www.tiktok.com/" target="_blank"><i class="bi bi-tiktok text-blue-600"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="bi bi-facebook text-blue-600"></i></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
