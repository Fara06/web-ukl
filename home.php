<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Aesthetic</title>
    <link rel="stylesheet" href="home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <a href="#">Home</a>
            <a href="View.php">Search</a>
            <a href="lokasi.php">Lokasi</a>
            <a href="contact.php">Contact</a>
            <a href="akses.php">Login</a>
        </nav>
    </header>

            <center><h1>Welcome to My Website</h1>
            <p>Here you can find all the information about my transportation.</p></center>

        <section class="services">
            <h2>Mobil</h2>
            <div class="services-container">
                <div class="service">
                        <img src="vario keluar.jpg" width="250" height="150" alt="Service 2" class="rotate-left">
                          <h3>3. Motor</h3>
                          <button class="learn-more"><a href="" >learn-more</a></button> 
                      </div>
                <div class="service">
                    <img src="xpander.jpg" width="250" height="150" alt="Service 2">
                    <h3>2. Mobil</h3>
                    <button class="learn-more"><a href="" >learn-more</a></button> 
                </div>
            </div><br>
        </section>

        <section class="portfolio">
            <h2>Portfolio</h2>
            <div class="portfolio-container">
                <div class="portfolio-item">
                    <img src="vario keluar.jpg" width="350" height="250" alt="Portfolio 1">
                    <h3>1. MOtor</h3>
                </div>
                <div class="portfolio-item">
                    <img src="xpander.jpg" width="350" height="250" alt="Portfolio 2">
                    <h3>2. Mobil</h3>
                </div>
            </div>
        </section>

        <section class="contact">
            <h2>Contact</h2>
            <form action="#" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; create by Fara |2023 My Website. All Rights Reserved.</p>
    </footer>
</body>
</html>