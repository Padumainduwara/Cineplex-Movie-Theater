<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="movie.css">
    <title>Cineplex - Movie Details</title>
</head>

<body>

    <header>
        <div class="logo">
            <img src="../images/cineplex.png" alt="Cineplex Logo">
            <h1>Cineplex</h1>
        </div>
        <nav>
            <ul>
                <li><a href="../home.php">Home</a></li>
                <li><a href="movie.php">Movies</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Search movies...">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

    <section id="theater-info" class="theater-info">
        <h1>Movie Details</h1>
        <br><br><br>
        <div class="info-content">
            <div class="movie-card">
                <div class="movie-card-content">
                    <section class="movie-details">
                        <div class="movie-poster">
                            <img src="../images/movie3.jpg" alt="Movie Poster">
                        </div>
                        <div class="movie-info">
                            <h1>The Beekeeper 2024</h1>
                            <br>
                            <p><strong>Genre:</strong> Action, Triller</p>
                            <p><strong>Release Date:</strong> March 12, 2024 </p>
                            <p><strong>Rating:</strong>
                                <span class="rating">
                                    <strong>
                                    <span class="star">&#9734;</span>
                                <span class="star">&#9734;</span>
                                <span class="star">&#9734;</span>
                                <span class="star">&#9734;</span>
                                <span class="star">&#9734;</span>
                                </strong>
                                </span>
                            </p>
                            <p><strong>Synopsis:</strong> <br> <br> One man's brutal campaign for vengeance takes on national stakes after he is revealed to be a former operative of a powerful and clandestine organization known as "Beekeepers".</p>
                            <br>
                            <div class="cta-buttons">
                                <a href="../Booking/Booking.html" class="cta-button">Book Now</a>
                            </div>


                        </div>
                    </section>
                    <section class="additional-details">
                        <h1>Additional Details</h1>
                        <br>
                        <ul>
                            <li><strong>Director:</strong> David Ayer </li><br>
                            <li><strong>Cast:</strong> Anna Castillo, Tony Corvillo, Tamar Novas</li><br>
                            <li><strong>Running Time:</strong> 1 hours 45 minutes</li><br>
                            <li><strong>Language:</strong> English</li><br>
                            <li><strong>Country:</strong> United States, United Kingdom</li><br>
                        </ul>

                    </section>
                    <h1>Watch Trailer</h1>
                    <br>
                    <div class="trailer-container">
                        <iframe width="560" height="315" src="Video/thebeek.mp4" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>


            </div>

        </div>
    </section>

    <footer>

        <section class="footer">

            <div class="box-container">
                <div class="box">
                    <br>
                    <h3>Quik Links</h3>
                    <a href="Home.php"> <i></i> Home</a>
                    <a href="theaterinfo.php"><i></i> About us</a>
                    <a href="ask.php"><i></i> Ask Question</a>
                    <a href="theaterinfo.php"> <i></i> Privacy Policy</a>
                </div>

                <div class="box">
                    <br>
                    <h3>Contact Info</h3>
                    <a href="#"> <i></i> +94774016146</a>
                    <a href="#"> <i></i> +94774016146</a>
                    <a href="#"> <i></i> dreamtoursl@gmail.com</a>
                    <a href="#"> <i></i> Colombo, Sri Lanka</a>
                    <a href="#"> <i></i> Monday to Sunday - 10:00 AM - 10:00 PM </a>
                </div>

                <div class="box">
                    <br>
                    <h3>Follow us</h3>
                    <a href="#"> <i></i> Facebook</a>
                    <a href="#"> <i></i> Twitter</a>
                    <a href="#"> <i></i> Instagram</a>

                </div>
            </div>
            <br> --------------------------------------------------------------------------------------------
            <br> <br>
            <p>&copy; 2024 Cineplex. All rights reserved.</p>
    </footer>';

</body>

</html>