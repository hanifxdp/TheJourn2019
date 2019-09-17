<?php
         include_once("function/helper.php");
         $page= isset($_GET['page']) ? $_GET['page'] :false;
         
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
    <title>The Journey</title>
</head>
<body>
    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL."index.php"; ?> ">
				<img src="<?php echo BASE_URL."images/judul.png";?>" class="images_header" />
            </a>
            <div id="menu">
                <nav>
                    <ul>
                    <li ><a href="<?php echo BASE_URL."index.php"; ?>" class="button">Home</a></li>
                    <li><a href="<?php echo BASE_URL."index.php?page=food"; ?>" class="button">Food</a>
                        <ul class="sub1">
                            <li><a href="<?php echo BASE_URL."index.php"; ?>" class="button">RESTAURANT</a></li>
                            <li><a href="<?php echo BASE_URL."index.php"; ?>" class="button">STREET</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL."index.php?page=lifestyle"; ?>" class="button">Lifestyle</a>
                        <ul class="sub1">
                            <li><a href="<?php echo BASE_URL."index.php"; ?>" class="button">Nomaden</a></li>
                            <li><a href="<?php echo BASE_URL."index.php"; ?>" class="button">Blogger</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL."index.php?page=travel"; ?>" class="button">Travel</a>
                        <ul class="sub1">
                            <li><a href="<?php echo BASE_URL."index.php"; ?>" class="button">Backpaker</a></li>
                            <li><a href="<?php echo BASE_URL."index.php"; ?>" class="button">WELL-PLANED</a></li>
                        </ul>
                    </li>
                    </ul>
                </nav>
            </div>
            <div id="content">
				<?php
				 $filename ="$page.php";
				 
				 if(file_exists($filename)){
					 include_once($filename);
				 }
				 else{
					 include_once("index.php");
				 }
				?>
            </div>
        </div>
    </div>
    
</body>
</html>