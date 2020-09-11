<?php session_start(); include 'dbconnect.php'; 
	$nn = "SELECT * FROM `login` WHERE id = '$_GET[page_id]'";
	$gf = mysqli_query($conn,$nn);
	$registro = mysqli_fetch_array($gf);
	
	$id = $registro['id'];
	$name = $registro['name'];
	$image = $registro['img'];
	
	
	$description = $id.' - '.$name.' - '.$user_id.' - '.$pass;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>My Title - <?php echo $name; ?></title>
        <meta property="og:url" content="http://xyz.com/page_id.php?page_id=<?php echo $id; ?>" />  
        <meta property="og:title" content="<?php echo $name; ?>"/>  
        <meta property="og:description" content="Your description. <?php echo $description; ?>" />  
        <meta property="og:image" content="http://xyz.com/<?php echo $image; ?>" />
    </head>
    <body>
        <h2>My Whats App Share Page</h2>
    </body>
</html>



























