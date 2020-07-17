<?php

    if (isset($_POST["submit"]))
    {
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */

        $link = mysqli_connect("localhost", "root", "", "ofine");

        // Check connection

        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Escape user inputs for security
        $email = mysqli_real_escape_string($link, $_POST['email']);
        

        // attempt insert query execution
        $sql = "INSERT INTO notify (email_address) VALUES ('$email')";

        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        // close connection
        mysqli_close($link);
    }
?>

<!doctype html>
    <html lang="eng">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">

            <!-- favicon -->
            <link rel="icon" href="images/favicon.ico">


            <!-- Bootstrap link -->
            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <!-- google fonts link -->
            <link href="https://fonts.googleapis.com/css2?family=Lora&family=Noto+Sans&display=swap" rel="stylesheet"> 
            <!-- font awesome link -->
            <script src="https://kit.fontawesome.com/9cee552667.js" crossorigin="anonymous"></script>

            <!-- unicon link -->
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">


            <!-- css stylesheet link -->
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <!-- AOS link -->
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

            <title>Plan&Perfection</title>

            <!-- iconify link -->
            <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
            
        </head>

        
        <body class="body">

            <div class="wrapper">
        
                
                <header id="header" class="">
                <div class="header-container">
                        <nav>
                            <div class="nav-lg">
                                <div class="brand-holder"><a href="#home"><img src="images/logo.jpg" alt=""></a></div>
                                
                            </div>
            
                        </nav>
                        
                </div>
                </header>
        
                <main>
                    <section class="head-section">
                        <div class="container-fluid head-holder">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="headertext-holder">
                                        <div class="text-up text-div">
                                            <h2><span class="beauty-others">A New Age Of</span>&nbsp;<span class="beauty-text font-weight-bold">Beauty</span></h2>
                                            <p>O-Fine helps you find your perfect foundation, 
                                            concealer and powder shade easily, to give your skin the flawless finish it deserves.</p>
                                        </div>
                                        <div class="text-midle text-div">
                                            <p class="font-weight-bold">WE OFFICIALLY LAUNCH ON</p>
                                            <p class="count-holder"><span class="count-box">95</span>&nbsp;&nbsp;:&nbsp;&nbsp;<span class="count-box">02</span>&nbsp;&nbsp;:&nbsp;&nbsp;
                                                <span class="count-box">17</span></p>
                                            <p><span class="count-time">Days</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="count-time">Hours</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="count-time">Mins</span></p>
        
                                        </div>
        
                                        <div class="text-down">
                                            <p class="font-weight-bold">GET NOTIFIED </p>
                                            <form action="" method="POST">
                                                <input type="email" class="email-input" placeholder="Enter Your Email" name="email">
                                                <input type="submit" value="NOTIFY ME" class="notify-btn" name="submit">
                                            </form>
        
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="headerimg-holder">
                                        <img src="images/header-img.jpg" alt="" class="header-img">

                                    </div>

                                </div>

                            </div>
                        </div>

                    </section>
                        
                </main>
        
                <footer>
                    
                </footer>
        
                
        
        
        
                <!-- jquery script -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="jquery/jquery-3.4.1.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script type="text/javascript" src="jquery/jquery-3.4.1.min.js"></script>
        
                <!-- bootstrap script -->
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                <script src="bootstrap/js/bootstrap.min.js"></script>
        
                <!-- Aos animation script -->
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                    AOS.init();
                </script>
        
        
                <script type="text/javascript" src="js/index.js"></script>
        
            </div>
        </body>

    </html>