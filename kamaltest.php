<?php


if (isset($_POST['upload'])) {
	
	if (isset($_FILES['image']) && $_FILES['image']['error']==0) {
		
        if ($_FILES['image']['size']<=500000000) {
        	
             $format=array('png' ,'jpeg' , 'jpg' , 'png','PNG',);

             $cibleFormat = pathinfo($_FILES['image']['name'] , PATHINFO_EXTENSION) ;

                    if (in_array($cibleFormat, $format)) {
///////////////////////////////////////////////////////////////////////////////////////////////


$local='image/';
                    
                    if (is_dir($local)) {
                      	if ($open=opendir($local)) {
                      		
                      		$numberImage=-2 ;
                      		while (($read=readdir($open)) == true) {
                      			
                      			$numberImage++;
                      		}
                      	}
                      }  


//////////////////////////////////////////////////////////////////////////////////////////////                    	

          move_uploaded_file($_FILES['image']['tmp_name'], 'image/'.$numberImage.'.'.$cibleFormat);
                      	   
                      	   echo 'votre image a ete bien upload';

///////////////////////////////////////////////////////////////////////////////////////////







//////////////////////////////////////////////////////////////////////////////////////////
                      } else {
                      	echo ' merci de choisir bon format' ;
                      }
                        



        } else {
        	echo 'votre size est plus grand' ;
        }
        


	} else {
		echo 'merci de selectioneer votre image';
			}
	
} 




?>

<!DOCTYPE html>
<html>
<head>
	<title>image upload </title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="image">
	<input type="submit" name="upload" value="upload">
	<input type="submit" name="affiche" value="affiche">


</form>

<div class="img">
	



</div>

</body>
</html>