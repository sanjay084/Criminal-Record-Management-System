 <?php
	  include"dbconfig.php";
	  if(isset($_REQUEST['upload']))
	  {
		 extract($_REQUEST);
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($tmp_name,"img/$name"))
	{
		echo"<script>alert('uploaded');
		
		</script>";
		 header("location:preview.php?back=$background_image&image=$name&id=$id");
	}
	  else
	  {
		  echo"<script>alert('something wrong')</script>";
	  }
	  
	
	  
	 
	  }
	  ################################################################
	  if(isset($_REQUEST['upload_canvas']))
	  {
		 extract($_REQUEST);
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($tmp_name,"img/$name"))
	{
		echo"<script>alert('uploaded');
		
		</script>";
		 header("location:preview_canvas.php?back=$background_image&image=$name&id=$id");
	}
	  else
	  {
		  echo"<script>alert('something wrong')</script>";
	  }
	  
	
	  
	 
	  }
	  #####################################################################################
	  if(isset($_REQUEST['upload_collage']))
	  {
		 extract($_REQUEST);
		$error=$_FILES["myfile"]["error"];

$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$tmp_name=$_FILES["myfile"]["tmp_name"];

	if(move_uploaded_file($tmp_name,"img/$name"))
	{
		echo"<script>alert('uploaded');
		
		</script>";
		 header("location:preview_collage.php?back=$background_image&image=$name&id=$id");
	}
	  else
	  {
		  echo"<script>alert('something wrong')</script>";
	  }
	  
	
	  
	 
	  }
	  ?>