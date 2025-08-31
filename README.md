# Cineplex Movie Theater Website

This is a comprehensive web application for a movie theater, allowing users to browse movies, book tickets, and manage their accounts. It also includes an admin panel for managing movies, bookings, and user data.

## Features

* **User Authentication:** Secure registration and login system for customers, staff, and administrators.
* **Movie Listings:** Browse a gallery of currently playing and upcoming movies.
* **Detailed Movie Pages:** View detailed information for each movie, including synopsis, cast, and trailers.
* **Online Ticket Booking:** A complete booking module where users can select movies, showtimes, and seats.
* **Booking Management:**
    * **Users:** Can view their booking history.
    * **Admins:** Can view, search, and delete booking records.
* **Food & Beverage Ordering:** A dedicated page for ordering snacks and drinks online.
* **Admin & Staff Panels:** Separate dashboards for administrators and staff to manage the theater's operations.

## Technologies Used

* **Frontend:** HTML, CSS, JavaScript
* **Backend:** PHP
* **Database:** MySQL

## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

You will need a local web server environment that supports PHP and MySQL. We recommend using one of the following:
* [XAMPP](https://www.apachefriends.org/index.html)
* [WAMP](https://www.wampserver.com/en/)
* [MAMP](https://www.mamp.info/en/mamp/)

### Installation

1.  **Clone the repo**
    ```sh
    git clone [https://github.com/your_username/Cineplex-Movie-Theater.git](https://github.com/your_username/Cineplex-Movie-Theater.git)
    ```
2.  **Place the project in your web server's root directory.**
    * For **XAMPP**, this is typically the `htdocs` folder (`C:\xampp\htdocs`).

3.  **Database Setup**
    * Start Apache and MySQL services from your XAMPP/WAMP/MAMP control panel.
    * Open your web browser and navigate to `http://localhost/phpmyadmin/`.
    * Create a new database and name it `cineplex`.
    * Select the `cineplex` database, go to the "Import" tab, and choose the `cineplex.sql` file from the project folder to import the database structure and data.

4.  **Configure Database Connection**
    * Open the following files in a code editor:
        * `login/connection.php`
        * `Booking/connection.php`
    * Update the database connection variables (`$servername`, `$username`, `$password`, `$dbname`) if they are different from your local setup. By default, the username is usually `root` with no password.
    ```php
    <?php
    $servername = "localhost";
    $username = "root"; // Your database username
    $password = "";     // Your database password
    $dbname = "cineplex";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

## Usage

1.  Open your web browser and navigate to `http://localhost/Cineplex-Movie-Theater/` (or the name of your project folder).
2.  You can now browse the website, register as a new user, or log in with existing credentials.

## Contributing

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request
