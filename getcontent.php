
<?php 
if(!empty($_GET['id'])){ 
    include('connect.php');
    if ($con->connect_error) { 
        die("Unable to connect database: " . $con->connect_error); 
    } 
     
    // Get content from the database 
    $query = $con->query("SELECT * FROM `data` WHERE id = {$_GET['id']}"); 
    
    if($query->num_rows > 0){ 
        $cmsData = $query->fetch_assoc(); 
        echo '<h5>'.$cmsData['evolution'].'</h5>'; 
        echo '<p>'.$cmsData['details'].'</p>'; 
    }else{ 
        echo 'Content not found....'; 
    } 
}else{ 
    echo 'error'; 
} 
?>


          