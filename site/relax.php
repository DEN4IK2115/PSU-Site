<html>
<head>
	<meta charset="utf-8">
	<title>Путевод - путеводитель по перми и пермскому краю</title>
	
	<link rel="stylesheet" type="text/css" href="css/lion_page.css" charset="utf-8">
	<link href="" rel="" type="">
	
</head>
<body>
    
	<div id="wrapper">
		<div id="content">
			<?php include('header.php');?>
			<?php include("function.php") ?>
			<div id="main">
			    <div id="l">
			        <h2 class="heading">Где отдохнуть</h2>
			        <div style="clear: both"><br></div>
			<?php
			    
    			    $li = getRelax();
    				for ($i = 0; $i < count($li); $i++){
    					echo '
    					    
    						<div class="article">
    						    <a>'.$li[$i]["title"].'</a>
    							<img src="/img/relax'.$li[$i]["id"].'.jpg" alt="" title="">
    							<span>'.$li[$i]["intro_text"].'</span>
    						</div>
    						';
    				}
    			
    		?>
    		    </div>
			</div>
		</div>
		<?php include('footer.php');?>
	</div>
</body>
</html>

1
1
1