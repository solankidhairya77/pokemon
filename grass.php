<?php
  include('header.php');
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="./css/pstyle.css" rel="stylesheet" type="text/css">
    <title>pokedex</title>
</head>
<body style="background-color:greenyellow">         
    <div class="container">
        <div class="col-sm-12 cbox">
            <div class="row rbox">
                <?php
                    include "connect.php";
                    $sql="SELECT * FROM `data` WHERE `type`='grass' or `type2` = 'grass'";
                    $run=mysqli_query($con,$sql);
                    $count=0;
                    while($data=mysqli_fetch_assoc($run))
                    {
                    $count++;  
                ?>
                <div class="col-sm-4 dbox"><br><br>
                    <div class="card" style="width: 18rem;">
                        <img src="./dataimg/<?php echo $data['image']; ?>" style="height:180px;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['name']?></h5>
                            <a href="#" class="btn btn-primary">details</a>
                        </div>
                    </div>                                    
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </div>               
</body>
</html>