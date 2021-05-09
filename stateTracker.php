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
            <a class="navbar-brand" href="index.php">
                <img src="https://www.fordharrison.com/webfiles/Images/COVID19%20red%20logo.png" width="32" height="30" alt="Home Page">
                <span>CoronaMeter</span>
                <img src="https://www.fordharrison.com/webfiles/Images/COVID19%20red%20logo.png" width="32" height="30" alt="Home Page">
            </a>
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="navbar-brand" href="#">State Wise Data</a>
            </li>
            <li class="nav-item">
            <a class="navbar-brand" href="#">Link</a>
            </li>
            </ul>
        </nav>

        <div class="container-fluid form-group" style="padding-top: 20px; padding-left: 150px; padding-right: 150px;">
            <form action="stateTracker.php" method="POST">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Search by State Name or State Code</span>
                </div>

                <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="state" placeholder="Enter State or type 'Total' for Country data" required>
                <button type="submit" class="btn btn-success " aria-label="Default" value="search" name="search">Search</button>
                </div>
            </form>
        </div>

        <div class="container-fluid">
            <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <?php
                    $data=file_get_contents("https://api.covid19india.org/data.json");
                    $coronaDetails=json_decode($data, true);

                    $numberOfStates=count($coronaDetails['statewise']);
                    $formValue="";
                    $index=-1;

                    if(isset($_POST['state']) && isset($_POST['search']))
                    {
                        $formValue=$_POST['state'];
                        $formValue=strtolower($formValue);
                    }

                    for($i=0;$i<$numberOfStates-1;$i++)
                    {
                        $stateName=$coronaDetails['statewise'][$i]['state'];
                        $stateCode=$coronaDetails['statewise'][$i]['statecode'];

                        $stateName=strtolower($stateName);
                        $stateCode=strtolower($stateCode);

                        if($formValue==$stateName || $formValue==$stateCode)
                        {
                            $index=$i;
                            break;
                        }
                    }

                    if($index>0)
                    {
                        ?>
                        <h3 style="text-align: center;" style="padding-bottom: 10px;">Search Result</h3>
                        <tr>
                            <th class="text-capitalize" style="text-align: center;">State</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">State Code</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Confirmed</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Recovered</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Deaths</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Active</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Last Updated</th class="text-capitalize">
                        </tr>

                        <tr>
                            <td><?php echo $coronaDetails['statewise'][$i]['state'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['statecode'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['confirmed'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['recovered'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['deaths'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['active'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['lastupdatedtime'] ?></td>
                        </tr>

                        <?php
                    }
                    else if($index==0)
                    {
                        ?>
                        <tr>
                            <th class="text-capitalize" style="text-align: center;">Country</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Country Code</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Confirmed</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Recovered</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Deaths</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Total Active</th class="text-capitalize">
                            <th class="text-capitalize" style="text-align: center;">Last Updated</th class="text-capitalize">
                        </tr>

                        <tr>
                            <td>India</td>
                            <td>IN</td>
                            <td><?php echo $coronaDetails['statewise'][$i]['confirmed'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['recovered'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['deaths'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['active'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['lastupdatedtime'] ?></td>
                        </tr>

                        <?php
                    }

                ?>
            </table>
            </div>
        </div>

        <div class="container-fluid">
        <div class="table-responsive">
            <h3 style="text-align: center; padding-bottom:10px;">State Wise Corona Virus(Covid19) Data</h3>
            <table class="table table-bordered table-striped text-center">
                <tr>
                    <th class="text-capitalize" style="text-align: center;">State</th class="text-capitalize">
                    <th class="text-capitalize" style="text-align: center;">State Code</th class="text-capitalize">
                    <th class="text-capitalize" style="text-align: center;">Total Confirmed</th class="text-capitalize">
                    <th class="text-capitalize" style="text-align: center;">Total Recovered</th class="text-capitalize">
                    <th class="text-capitalize" style="text-align: center;">Total Deaths</th class="text-capitalize">
                    <th class="text-capitalize" style="text-align: center;">Total Active</th class="text-capitalize">
                    <th class="text-capitalize" style="text-align: center;">Last Updated</th class="text-capitalize">
                </tr>

                <?php
                    $data=file_get_contents("https://api.covid19india.org/data.json");
                    $coronaDetails=json_decode($data, true);

                    $numberOfStates=count($coronaDetails['statewise']);

                    for($i=1;$i<$numberOfStates-1;$i++)
                    {
                        ?>

                        <tr>
                            <td><?php echo $coronaDetails['statewise'][$i]['state'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['statecode'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['confirmed'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['recovered'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['deaths'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['active'] ?></td>
                            <td><?php echo $coronaDetails['statewise'][$i]['lastupdatedtime'] ?></td>
                        </tr>
                        

                        <?php

                    }

                ?>
            </table>
        </div>
        </div>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-bottom">
            <h7 style="color:aliceblue;">&copy Saurabh gupta</h7>
        </nav>
    
    </body>

    <script>
        if ( window.history.replaceState )
        {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>

</html>