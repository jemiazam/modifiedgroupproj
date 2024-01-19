@include('auth.layout')

<!doctype html>
<html lang="en">
  <head>
  	<title>LANDING PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('import/css/style.css')}}">
        <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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



    <div class="hero">
        <img src="https://img.freepik.com/free-photo/asian-businessmen-businesswomen-meeting-brainstorming-ideas-about-creative-web-design-planning-application-developing-template-layout-mobile-phone-project-working-together-small-office_7861-2682.jpg?w=1380&t=st=1705621670~exp=1705622270~hmac=2f44a0de429485649749d38c1f8716903eae5ed215c70a4f6019bfb489332448" alt="IIUM Club Registration System Image">
        <h2>Welcome to ClubHub</h2>
    </div>

    <div class="info">
        <p>ClubHub is designed to modernize and simplify the process of enrolling in clubs or organizations at the International Islamic University Malaysia (IIUM). By providing a centralized platform, it offers a convenient and accessible way for individuals to register and join clubs from any location with internet connectivity. The website also includes a comprehensive club directory page, where users can browse through the available clubs. Each club listing provides information and details about the club, allowing users to make informed decisions when selecting clubs to join.</p>
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





    <script src="{{asset('import2/js/jquery.min.js')}}"></script>
    <script src="{{asset('import2/js/popper.js')}}"></script>
    <script src="{{asset('import2/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('import2/js/main.js')}}"></script>
  </body>

</html>