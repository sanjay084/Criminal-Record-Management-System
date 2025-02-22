<?php
require_once"dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Dorne - Directory &amp; Listing Template</title>

					
    <link rel="icon" href="img/core-img/favicon.ico">

     <link href="style.css" rel="stylesheet">

    <link href="css/responsive/responsive.css" rel="stylesheet">
<script src="jquery.min.js"></script>
	<script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();
aler(query);		   
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchinput.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                          
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      }); 

$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });	  
 });  
 </script>  
</head>

<body>
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

   <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">CRIMINAL</a>
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <
                                </li>
                                
                            </ul>
                             <?php include"nav.php";?>
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
     <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-6"></br></br>
                    <div class="hero-content"></br></br></br></br></br>
                        
                              
                              
                    </div>
                    
<div class="container-fluid">
<div class="row">
<div class="col-lg-4">

		 	
</div>
</div>
<div id="countryList" style="background-color:yellow"></div>	

					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        
    </section>
    
    
    <!-- ***** Features Destinations Area Start ***** -->
    <section class="dorne-features-destinations-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>CRIME REPORT STATUS</h4>
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
<?php
$t=select("SELECT * FROM `crime` LEFT JOIN team on crime.team=team.id
 where crime.userid='".$_SESSION['userid']."' and crime.close is null");
$y=mysqli_num_rows($t);
if($y>=1)
{
?>                
				<table class="table">
				<tr style="font-weight:bold">
				<td>S.no. </td>
				<td>ComPaint Type</td>
				<td>Description</td>
				<td>Date</td>
				<td>Place</td>
				<td>Evidence</td>
				<td>Status</td>
				</tr>
				<?php
				$p=1;
				while($r=mysqli_fetch_array($t))
				{extract($r);
				?>
				<tr>
				<td><?=$p?></td>
			    <td><?=$com_type?></td>
				<td><?=$description?></td>
				<td><?=$date_d?></td>
				<td><?=$place?></td>
				<td><a href="img/<?=$evidence?>"><button class="btn btn-success">Download</button></a></td>
				<td><?php
				if(!empty($close))
			{
				echo"CLOSED";
			}else
			{
				if(!empty($team))
			{echo ucwords($team_name)." Is Handling Your Case";}
			}
				
			
			
			if($r[12]==0)
			{
				echo"Your Application has  Sent";
			}
			if($r[12]==1)
			{
				echo"Your Application has been Accepted";
			}
			if($r[12]==2)
			{
				echo"Your Application has been Rejected";
			}
			
				?></td>
				</tr>
				<?php
				$p++;
				}
				?>
                    </table>
					<?php
}
else
{
	?>
<h1 style="font-weight:bold;text-align:center">Status Is'nt Available</h1>
	<?php
}
					?>
                </div>
            </div></br></br>
			 
			
			
			
			
			
        </div>
    </section>
    

    <!-- ***** Clients Area Start ***** -->
    

    <!-- ****** Footer Area Start ****** -->
    <footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://projecttunnel.com/" target="_blank">Projecttunnel</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>