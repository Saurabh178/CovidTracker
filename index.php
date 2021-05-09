<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Covid Tracker</title>
        <meta charset = "utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="https://1stwebdesigner.com/wp-content/uploads/2020/08/covid-icons-1.png" type="image/icon type">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
            <a class="navbar-brand" href="#">
                <img src="https://www.fordharrison.com/webfiles/Images/COVID19%20red%20logo.png" width="32" height="30" alt="Home Page">
                <span>CoronaMeter</span>
                <img src="https://www.fordharrison.com/webfiles/Images/COVID19%20red%20logo.png" width="32" height="30" alt="Home Page">
            </a>
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="navbar-brand" href="stateTracker.php">State Wise Data</a>
            </li>
            <li class="nav-item">
            <a class="navbar-brand" href="#">Link</a>
            </li>
            </ul>
        </nav>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="pic1.jpg" alt="First slide" width="640px" height="520px">
                    </div>

                    <div class="carousel-item">
                    <img class="d-block w-100" src="pic2.jpg" alt="Second slide" width="640px" height="520px">
                    </div>

                    <div class="carousel-item">
                    <img class="d-block w-100" src="pic3.jpg" alt="Third slide" width="640px" height="520px">
                    </div>

                    <div class="carousel-item">
                    <img class="d-block w-100" src="pic4.jpg" alt="Fourth slide" width="640px" height="520px">
                    </div>

                    <div class="carousel-item">
                    <img class="d-block w-100" src="pic5.jpg" alt="Fifth slide" width="640px" height="520px">
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

        <div class="container-fluid">
            <h3 style="text-align: center; padding-top:10px;">Covid19 Test Analysis in India</h3>

        </div>

        <h3 style="text-align: center;">Hello</h3>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-bottom">
            <h7 style="color:aliceblue;">&copy Saurabh Gupta</h7>
        </nav>
    
    </body>

    <script>
        if ( window.history.replaceState )
        {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

</html>