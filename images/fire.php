<?php
  include('header.php');
?>

<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pokemon</title>
<link rel="icon" type="image/x-icon" href="hello.ico" />
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css" rel="stylesheet" />
<link href="css/pstyles.css" rel="stylesheet" />

<body style="background-color:rgb(243, 63, 63)">
    <div class="container">
        <div class="col-sm-12 cbox">
            <div class="row rbox">
                <?php
                    include "connect.php";
                    $sql="SELECT * FROM `data` WHERE `type`='fire' or `type2` = 'fire'";
                    $run=mysqli_query($con,$sql);
                    $count=0;
                    while($data=mysqli_fetch_assoc($run))
                    {
                    $count++;  
                ?>
                <div class="col-sm-4 dbox"><br><br>
                    <div class="card" style="width: 18rem;">
                        <img src="./dataimg/<?php echo $data['image']; ?>" style="height:180px;" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['name']?></h5>
                            <a href="<?php $data['id']?>" class="btn btn-primary" data-toggle="modal"
                                data-target="#myModall">Details</a>

                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

            !-- Trigger the modal with a button -->
            <!-- <button type="button" class="btn btn-success openBtn">Open Modal</button> -->

            <!-- Modal -->
            <div class="modal fade" id="myModall" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal with Dynamic Contentnnnn</h4>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script>
        $('.openBtn').on('click', function() {
            $('.modal-body').load('getcontent.php?id=5', function() {
                $('#myModal').modal({
                    show: true
                });
            });
        });
        </script> -->


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </div>
</body>

</html>