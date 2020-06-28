<?php
  include('header.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <title>pokedex</title>
    </head>
    <style>
        body{
        margin: 0px;
        padding: 0px;
        background: url('hi.jpg');
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
    <body>   
        <div class="title">  
            <h1 align="center">Feedback</h1>
        </div>
        <form method="post" action="givefeedback.php">
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
                <input class="btn" type="submit" name="submit" value="submit">
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