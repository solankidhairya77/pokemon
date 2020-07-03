<?php
  include('header.php');
?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pokedex</title>
    <link rel="icon" type="image/x-icon" href="hello.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet" />
    <link href="css/pstyles.css" rel="stylesheet" />
    </head>
    <body style="background:url(images/hi.jpg)" >   
        <div class="feedback">  
            <h1 align="center">Feedback</h1>
        </div>
        <form method="post" action="feedback.php">
            <div class ="login-box">
                <div class="textbox">
                    <input type="text" placeholder="Name" name="name" required>
                </div>    
                <div class="textbox">  
                    <input type="text" placeholder="Subject" name="subject" required> 
                </div>
                <div class="textbox">  
                    <input type="text" placeholder="Email" name="email" required> 
                </div>
                <div class="textbox">  
                    <input type="text" placeholder="Comment" name="comment" required> 
                </div> 
                <div id="but">
                    <input class="d" type="submit" name="submit" value="submit">
                </div>
            </div>
        </form>           
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    if(isset($_REQUEST['submit']))
    {
        if(($_REQUEST['name'] == "") || ($_REQUEST['subject'] == "") || ($_REQUEST['email'] == '') || ($_REQUEST['comment'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill ALL Field</div>';
        }
        else
        {
            $fname = $_REQUEST['name'];
            $subject = $_REQUEST['subject'];
            $email = $_REQUEST['email'];
            $comment = $_REQUEST['comment'];

            $mailto = "hostmaster@cherryprojects.online";
            $header = "Form: ". $email;
            $txt = "you have received email from " . $fname. ".\n\n" .$email. ".\n\n" .$comment;
            mail($mailto,$subject,$txt,$header);
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';
        }
    }
?>