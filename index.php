<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="scss/styles.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Hostel Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
                <ul class="nav">
                    <li class="nav-item">
                        <a href="./login.php" class="btn btn-info lg-btn" style="border-radius: 20px;">Sign In</a>
                    </li>
                </ul>
                               
            </ul>
        </div>
    </nav>

    <!-- Image Slider -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./b1.jpeg" class="d-block w-100" alt="Hostel Image 1" height="680px">
            </div>
            <div class="carousel-item">
                <img src="./b2.jpg" class="d-block w-100" alt="Hostel Image 2" height="680px">
            </div>
            <div class="carousel-item">
                <img src="./b1.jpeg" class="d-block w-100" alt="Hostel Image 3"  height="680px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- About Us Section -->
    <section id="about" class="my-5">
        <div class="container">
            <h2 class="text-center">About Us</h2>
            <p class="text-center">We provide the best hostel management system that ensures comfort and convenience for all residents.
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam placeat, repellendus itaque nihil velit quaerat corrupti eligendi repellat totam ad cupiditate veniam architecto tenetur. Sit velit placeat aliquam harum deleniti.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi corporis autem voluptas labore nostrum tempora mollitia consectetur vero, nemo placeat nihil et? Dolorem laudantium dicta odit, a perspiciatis nemo officiis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque obcaecati magnam rerum explicabo necessitatibus facere, et error asperiores deserunt assumenda ad pariatur modi? Modi deleniti ut voluptatum nesciunt laborum eaque.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="my-5">
        <div class="container">
            <h2 class="text-center">Our Services</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="./h1.avif" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Service 1</h5>
                            <p class="card-text">Description of service 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./h2.avif" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Service 2</h5>
                            <p class="card-text">Description of service 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="./h3.avif" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Service 3</h5>
                            <p class="card-text">Description of service 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="my-5">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 Hostel Management System. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
