<?php
    session_start();
    if(isset($_SESSION['uid']))
    {
        echo "";
    }
    else
    {
        header('location ./login.php');
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <title>upload</title>
    </head>
    <body style="background:url(images/hi.jpg)">
        <h4><a href="logout.php" style="float:right; ">logout</a></h4>
        <form method="post" action="admin.php" enctype="multipart/form-data">
        <div class="tablecolor">
            <table align="center" border="2" style="widht:70; margin-top:40px;">
                <tr>
                    <td>name</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>type</td>
                    <td>
                        <select name="type">
                            <option value="fire">fire</option>
                            <option value="water">water</option>
                            <option value="grass">grass</option>
                            <option value="bug">bug</option>
                            <option value="ghost">ghost</option>
                            <option value="dark">dark</option>
                            <option value="poison">poison</option>
                            <option value="steel">steel</option>
                            <option value="ice">ice</option>
                            <option value="normal">normal</option>
                            <option value="fairy">fairy</option>
                            <option value="dragon">dragon</option>
                            <option value="electric">electric</option>
                            <option value="flying">flying</option>
                            <option value="ground">ground</option>
                            <option value="rock">rock</option>
                            <option value="phycic">phycic</option>
                            <option value="fighting">fighting</option>
                        </select>
                    </td>
                <tr>
                    <td>type #2</td>    
                    <td>
                        <select name="type2">
                            <option value="fire">fire</option>
                            <option value="water">water</option>
                            <option value="grass">grass</option>
                            <option value="bug">bug</option>
                            <option value="ghost">ghost</option>
                            <option value="dark">dark</option>
                            <option value="poison">poison</option>
                            <option value="steel">steel</option>
                            <option value="ice">ice</option>
                            <option value="normal">normal</option>
                            <option value="fairy">fairy</option>
                            <option value="dragon">dragon</option>
                            <option value="electric">electric</option>
                            <option value="flying">flying</option>
                            <option value="ground">ground</option>
                            <option value="rock">rock</option>
                            <option value="phycic">phycic</option>
                            <option value="fighting">fighting</option>
                            <option value="">none</option>
                        </select>
                    </td>
                </tr>    
                <!-- <tr>
                    <td>details</td>
                    <td><input type="textarea" name="details" required></td> -->
                    <td>Details</td>
                    <td>
                        <textarea name="details" id="details" cols="30" rows="3">
                         </textarea>
                    </td>
                </tr>
                <tr>
                    <td>evolution</td>
                    <td><input type="text" name="evolution" required></td>
                </tr>
                <tr>
                    <td>image</td>
                    <td><input type="file" name="image" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit"></td>
                </tr>
            </table>
        </div>
           <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $type=$_POST['type'];
        $type2=$_POST['type2'];
        $details=$_POST['details'];
        $evolution=$_POST['evolution'];
        $imagename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        move_uploaded_file($tempname,"dataimg/$imagename");

        include('connect.php');
        $qry="INSERT INTO `data`(`name`, `type`,`type2`, `details`, `image`,`evolution`) VALUES ('$name','$type','$type2','$details','$imagename','$evolution')";
        $run=mysqli_query($con,$qry);
        if($run == TRUE) 
        {
            ?>
                <script>
                    alert('data inserted successfully');
                </script>
            <?php
        }
        else 
        {
            ?>
                <script>
                    alert('not submitted');
                </script>
            <?php
        }
    }
?>