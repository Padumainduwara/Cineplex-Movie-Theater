<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-xw3d4aDlEtiq12x3b5uU/GGXPBOyoKy4V5OtBf5DoD6PFG5ce8A/dDAE3j7L1oQ" crossorigin="anonymous">
    <title>Cineplex - Home</title>
    <style>

    </style>
    <header>
        <div class="logo">
            <img src="images/cineplex.png" alt="Cineplex Logo">
            <h1>Cineplex</h1>
        </div>
        <nav>
            <ul>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="./movie.php">Movies</a></li>
                    <li><a href="./Booking/Booking.php">Booking</a></li>
                    <li><a href="./theaterinfo.php">Theater Info</a></li>
                    <li><a href="./login/login.html">Login</a></li>
                </ul>
            </ul>
        </nav>
        <div class="search-bar">
            <form action="search.php" method="GET">
                <input type="text" name="query" placeholder="Search movies...">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

</head>

<section class="hero">
    <div class="hero-content">
        <h2>Experience the Magic of Cinema with Cineplex</h2>
        <p>Book your tickets now for the latest blockbusters and special events!</p>
        <a href="offers.html" class="cta-button">Special Offers</a>
    </div>

</section>

<section id="movies" class="movie-listing">
    <h1> Now Showing ... </h1>
    <br> <br>
    <div class="movie-grid">
        <div class="movie-card">
            <img src="images/movie6.jpg" alt="Movie 1 Poster">
            <div class="movie-card-content">
                <h3> Nowhere 2023 </h3>
                <p>Genre: Drama , Triller </p>
                <a href="./Movie/nowhere.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="images/movie2.jpg" alt="Movie 2 Poster">
            <div class="movie-card-content">
                <h3> Role Play 2023 </h3>
                <p>Genre: Action, Comedy, Romance </p>
                <a href="./Movie/Roleplay.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a> </div>
        </div>
        <div class="movie-card">
            <img src="images/movie7.jpg" alt="Movie 3 Poster">
            <div class="movie-card-content">
                <h3> Born to Fly 2023 </h3>
                <p>Genre: Action, Drama</p>
                <a href="./movie/Borntofly.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="images/movie4.jpg" alt="Movie 4 Poster">
            <div class="movie-card-content">
                <h3> Thanksgiving 2023 </h3>
                <p>Genre: Horror, Mystery, Triller </p>
                <a href="./movie/Thanksgiving.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a> </div>
        </div>

</section>

<section id="movies" class="movie-listing1">
    <h1> Coming Soon ... </h1>
    <br> <br> <br>
    <div class="movie-grid">
        <div class="movie-card">
            <img src="images/movie1.jpg" alt="Movie 1 Poster">
            <div class="movie-card-content">
                <h3> Lift 2024 </h3>
                <p>Genre: Action , Comedy, Crime </p>
                <a href="./Movie/Lift.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="images/movie8.jpg" alt="Movie 2 Poster">
            <div class="movie-card-content">
                <h3> The Last Wife 2024 </h3>
                <p>Genre: Action, Drama, Romance </p>
                <a href="./Movie/Thelastwife.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="images/movie3.jpg" alt="Movie 3 Poster">
            <div class="movie-card-content">
                <h3> The Beekeeper 2024 </h3>
                <p>Genre: Action, Triller</p>
                <a href="./Movie/Thebeek.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="images/movie9.jpg" alt="Movie 4 Poster">
            <div class="movie-card-content">
                <h3> Pippa 2024 </h3>
                <p>Genre: Action, History, Drama </p>
                <a href="./Movie/Pippa.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a>
            </div>
        </div>
        <div class="movie-card">
            <img src="images/movie10.jpg" alt="Movie 4 Poster">
            <div class="movie-card-content">
                <h3> The Exorcist: Believer 2024 </h3>
                <p>Genre: Horror, Triller </p>
                <a href="./Movie/Theexo.php" class="cta-button">Details</a>
                <a href="./Booking/Booking.html" class="cta-button">Book Now</a>
            </div>
        </div>
</section>
<br>
<br>
<section id="customer-reviews">
    <h1>Customer Reviews</h1>
    <br> <br> <br>
    <div class="customer-reviews-container">

        <div class="review-card" onmouseover="showPopup('popup1')" onmouseout="hidePopup('popup1')">
            <img src="./images/user.png" alt="User 1">
            <h3>John Doe</h3>
            <p>Amazing experience at Cineplex! Loved the movie and the facilities. Will definitely come back!</p>
            <div class="stars">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
        </div>
        <div class="review-card" onmouseover="showPopup('popup2')" onmouseout="hidePopup('popup2')">
            <img src="./images/user.png" alt="User 2">
            <h3>Jane Smith</h3>
            <p>The staff was friendly, and the popcorn was delicious. Great place for a movie night!</p>
            <div class="stars">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
        </div>
        <div class="review-card" onmouseover="showPopup('popup3')" onmouseout="hidePopup('popup3')">
            <img src="./images/user.png" alt="User 3">
            <h3>David Johnson</h3>
            <p>Excellent service and a wide selection of movies. Enjoyed every moment at Cineplex!</p>
            <div class="stars">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
        </div>
        <div class="review-card" onmouseover="showPopup('popup4')" onmouseout="hidePopup('popup4')">
            <img src="./images/user.png" alt="User 4">
            <h3>Emily Williams</h3>
            <p>Cozy atmosphere and great sound quality in the theaters. Will recommend to friends!</p>
            <div class="stars">
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
                <span class="star">&#9733;</span>
            </div>
        </div>
    </div>
</section>
<br>
<section class="best-movie-section">
    <h1>Best Movie of 2023</h1>
    <br>
    <div class="best-movie-container">
        <div class="best-movie-card">
            <img src="./images/animal.jpg" alt="Animal Movie 2023 Poster">
            <div class="best-movie-card-content">
                <h3>Animal</h3>
                <p>Genre: Action, Crime, Drama</p>
                <p>Runtime: 2h 15m</p>
                <p>Director: Sarah Wildlife</p>
                <div class="stars">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                </div>
                <p>IMDb Rating: 6.3/10 (82K votes)</p>
                <p>A heartwarming adventure where a group of animals embarks on a wild journey to save their home from destruction. Join them as they face challenges, make new friends, and discover the true meaning of family.</p>
                <a href="#" class="cta-button" onclick="openPopup()">Watch Now</a>
            </div>
        </div>
    </div>
</section>

<div id="popup" class="popup" onclick="closePopup()">
    <div class="popup-content">
        <span class="close-btn">&#10006;</span>
        <iframe width="560" height="315" src="Movie/Video/animal.mp4" frameborder="0" allowfullscreen autoplay="false"></iframe>
    </div>
</div>
<section id="facilities">
    <br>
    <h1></h1>
    <br> <br>
    <div class="facilities-container">
        <div class="facility-card" onmouseover="showPopup('parkingPopup')" onmouseout="hidePopup('parkingPopup')">
            <h1>Parking Availability</h1>
            <img src="./images/parking.png" alt="Parking Icon">
            <p>We offer convenient parking facilities for our valued customers. Here are the details:</p>
            <ul>
                <li><strong>Location:</strong> Parking lot adjacent to the theater</li>
                <li><strong>Spaces Available:</strong> 150</li>
                <li><strong>Cost:</strong> Free for moviegoers</li>
                <li><strong>Security:</strong> 24/7 surveillance for your safety</li>
            </ul>
            <p>Our parking facility is conveniently located adjacent to the theater, providing easy access for our customers. With 150 available spaces, parking is free for all moviegoers. The parking area is monitored 24/7 to ensure the safety of your vehicle.</p>
        </div>

        <div class="facility-card" onmouseover="showPopup('seatsPopup')" onmouseout="hidePopup('seatsPopup')">
            <h1>Seating Capacities</h1>
            <img src="./images/seats.png" alt="Seats Icon">
            <p>Experience the comfort of our state-of-the-art movie seats. Here are the details:</p>
            <ul>
                <li><strong>Total Seats:</strong> 300</li>
                <li><strong>Types:</strong> Standard, Premium, VIP</li>
                <li><strong>Comfort:</strong> Plush cushions with adjustable headrests</li>
                <li><strong>Accessibility:</strong> Wheelchair-accessible options available</li>
            </ul>
            <p>Our theaters boast a total of 300 seats, including standard, premium, and VIP options. Enjoy the movie in comfort with plush cushions and adjustable headrests. We also offer wheelchair-accessible seating for those who require it.</p>
        </div>
    </div>
</section>
<br>
<section id="latest-news">
    <h1></h1><br>
    <h2>LATEST NEWS</h2>
    <br><br>
    <div class="news-container">
        <div class="news-item">
            <h4>Brie Larson to play first female White House candidate Victoria Woodhull in Amazon film</h4>
            <p>13 hours ago</p>
            <p>Exclusive: Amazon Studios has acquired Victoria Woodhull, with Oscar-winning Room star Brie Larson poised to produce...</p>
        </div>
        <div class="news-item">
            <h4>Michael Shannon Frontrunner to play Cable in “Deadpool 2”</h4>
            <p>09 hours ago</p>
            <p>Exclusive: Amazon Studios has acquired Victoria Woodhull, with Oscar-winning Room star Brie Larson poised to produce...</p>
        </div>
        <div class="news-item">
            <h4>French cannibal horror “Raw” inspires L.A. theater to hand out “Barf Bags”</h4>
            <p>10 hours ago</p>
            <p>Exclusive: Amazon Studios has acquired Victoria Woodhull, with Oscar-winning Room star Brie Larson poised to produce...</p>
        </div>
        <div class="news-item">
            <h4>Laura Dern in talks to join Justin Kelly’s biopic “JT Leroy”</h4>
            <p>01 hours ago</p>
            <p>Exclusive: Amazon Studios has acquired Victoria Woodhull, with Oscar-winning Room star Brie Larson poised to produce...</p>
        </div>
        <div class="news-item">
            <h4>China punishes more than 300 cinemas for box office cheating</h4>
            <p>24 hours ago</p>
            <p>Exclusive: Amazon Studios has acquired Victoria Woodhull, with Oscar-winning Room star Brie Larson poised to produce...</p>
        </div>
    </div>
</section>
<br>
<section id="trending-events">
    <h1>Trending Events</h1>
    <br><br>
    <div class="event-container">
        <div class="event-card">
            <img src="./images/battle.jpg" alt="Movie 1 Poster">
            <div class="event-card-content">
                <h3>Battle of the Bands:</h3>
                <p>Give local performers a chance to showcase their talent and compete for bragging rights. Fans will enjoy rocking out to their favorite bands and participating in the friendly competition.</p>
                <a href="#">More Info</a>
            </div>
        </div>
        <div class="event-card">
            <img src="./images/dance.jpg" alt="Movie 2 Poster">
            <div class="event-card-content">
                <h3>Dance Party:</h3>
                <p>Invite people to come out and show off their dance moves! Whether it’s a specific dance style (like salsa or hip-hop) or a general dance party, it’s all about grooving to the rhythm.</p>
                <a href="#">More Info</a>
            </div>
        </div>
        <div class="event-card">
            <img src="images/movie2.jpg" alt="Movie 3 Poster">
            <div class="event-card-content">
                <h3>Role Play:</h3>
                <p>Give local performers a chance to showcase their talent and compete for bragging rights. Fans will enjoy rocking out to their favorite bands and participating in the friendly competition.</p>
                <a href="#">More Info</a>
            </div>
        </div>
        <div class="event-card">
            <img src="images/movie4.jpg" alt="Movie 4 Poster">
            <div class="event-card-content">
                <h3>Borderlands Trailer:</h3>
                <p>Give local performers a chance to showcase their talent and compete for bragging rights. Fans will enjoy rocking out to their favorite bands and participating in the friendly competition.</p>
                <a href="#">More Info</a>
            </div>
        </div>
    </div>
</section>
<section id="partners">
    <h1></h1><br>
    <h2>Proud Partners with:</h2>
    <br>
    <div class="partner-logos">
        <img src="./images/p1.png" alt="Partner 1">
        <img src="./images/p2.png" alt="Partner 2">
        <img src="./images/p3.png" alt="Partner 3">
        <img src="./images/p4.png" alt="Partner 3">
    </div>
</section>
<br><br><br><br>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="theaterinfo.php">About Us</a></li>
                    <li><a href="ask.php">Ask Question</a></li>
                    <li><a href="theaterinfo.php">Privancy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="./Booking/Booking.php">Buy Tickets</a></li>
                    <li><a href="foodorder.html">Snack Bar</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <ul>
                    <li><a href="www.facebook.com">Facebook</a></li>
                    <li><a href="www.youtube.com">Youtube</a></li>
                    <li><a href="www.instagram.com">Instagram</a></li>
                    <li><a href="www.linkedin.com">Linked in</a></li>
                </ul>
            </div>
            <div class="subscribe-container">
                <input type="email" class="subscribe-input" placeholder="Your email">
                <button type="submit" class="subscribe-button">Subscribe</button>
            </div>
        </div>
    </div>
    <br><br>
    <div class="copyright">&copy; 2024 Cineplex. All rights reserved.</div>
</footer>
<script src="scripts.js">
</script>
</body>

</html>