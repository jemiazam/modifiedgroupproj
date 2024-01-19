@extends('auth.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIUM Club Registration System</title>
    <!-- Include your CSS styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 1em;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 1em;
            margin: 0 1em;
            font-weight: bold;
        }

        .hero {
            text-align: center;
            padding: 2em;
        }

        .hero img {
            max-width: 100%;
            height: auto;
        }

        .info {
            text-align: center;
            padding: 2em;
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin: 2em;
        }

        .card {
            background-color: #f4f4f4;
            padding: 1em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 45%;
        }
    </style>
</head>
<body>

    <header>
        <h1>IIUM Club Registration System</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">Login</a>
        <a href="#">Signup</a>
    </nav>

    <div class="hero">
        <img src="https://i.ibb.co/68CXJC2/Whats-App-Image-2024-01-17-at-21-29-14-f46200f1.jpg" alt="IIUM Club Registration System Image">
        <h2>Welcome to IIUM Club Registration System</h2>
    </div>

    <div class="info">
        <p>The IIUM Club Registration System is designed to modernize and simplify the process of enrolling in clubs or organizations at the International Islamic University Malaysia (IIUM). By providing a centralized platform, it offers a convenient and accessible way for individuals to register and join clubs from any location with internet connectivity. The website also includes a comprehensive club directory page, where users can browse through the available clubs. Each club listing provides information and details about the club, allowing users to make informed decisions when selecting clubs to join.</p>
    </div>

    <div class="features">
        <div class="card">
            <h3>Club Events</h3>
            <p>To further enhance the user experience, the website includes an events page where ongoing and upcoming events organized by the clubs are displayed. Users can browse through the events and RSVP for any event they are interested in attending.</p>
        </div>

        <div class="card">
            <h3>Community Interaction</h3>
            <p>Additionally, the website includes a communication page where all users can interact, build networks, and discuss various topics with each other. This promotes community engagement and fosters connections among users.</p>
        </div>
    </div>

    <div class="features">
        <h2>Key Features</h2>
        <ul>
            <li>Login page/Register</li>
            <li>Club page</li>
            <li>Friends page</li>
            <li>Notifications page</li>
        </ul>
    </div>



</body>
</html>
