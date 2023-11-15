<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- TODO 1: Add viewport here -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Web Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            padding: 10px;
        }

        header {
            display: inline-block;
            width: 100%;
        }

        h1 {
            float: left;
            margin: 0;
        }

        nav {
            float: right;
            margin-top: 10px;
        }

        nav a {
            text-decoration: none;
            color: black;
            padding: 0 10px;
        }

        main {
            line-height: 22px;
        }

        img {
            /* TODO 2: Set the image width so that the 3 images fit in 1 row and fills the browser width */
            width: 33.3%;
        }

        /* TODO 3: Add CSS media queries for smaller screens */
        @media only screen and (max-width: 768px) {

        /* TODO 4: Center logo */
        h1{
            float:none;
            text-align: center;
        }
        /* TODO 5: Shift navigation below logo, add a black background and center all nav items */
        nav{
        width: 100%;
        text-align: center;
        background-color: black;
        padding-top:20px;
        padding-bottom:20px;
        }
        
        nav a{
                    color:white;
        }
        /* TODO 6: Stack the 3 images in 1 column */
        img{
        width: 100%;
        }
        /* TODO 7: Hide the video */
        iframe{
            display:none;
        }
        
        }
    </style>
</head>

<body>
    <header>
        <h1>Responsive Web Page</h1>
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
    </header>

    <main>
        <section>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
        </section>

        <section>
            <img src="images/1.jpg" width="300"><img src="images/2.jpg" width="300"><img src="images/3.jpg" width="300">
        </section>

        <section>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/HCDVN7DCzYE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </section>
    </main>
</body>

</html>