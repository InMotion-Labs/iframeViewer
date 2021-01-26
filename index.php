<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="resources/css/styles.css">
		<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>

		<script src="https://scripts.carscanner.io/latest/snippet.min.js"></script> 

		<title>iframeViewer</title>
	  
	 
		<?php 
			$contents = @file_get_contents('https://api.carscanner.io/api/photosessions/'.$_GET["plate"].'/sections');
			$contents = @utf8_encode($contents);
			$sessionObject = @json_decode($contents);
			
			$id = $sessionObject->id;
			$token = "WSRzxkcVYY6wSqk24G25";
			$url = "https://iframe.carscanner.io/?id=" . $id . "&securitytoken=" . $token;
		?> 
		
	</head>	
 
	<body>
        
        <header class="demonstration_header">
            <div class="informations">
                <div class="title">
                    <h1>iframeViewer</h1>
                    <h4>Modern tool, for car inspection.</h4>
                </div>
                <div class="plate-select">
                    <form action="#" method="get">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="plate">Selected:</label>
                                    </td>
                                    <td>
                                    <label for="plate"><b><?php echo '\''.$sessionObject->plate.'\'' ?></b></label> </td>
                                </tr>
                                <tr>
                                    <td>                   
                                    <input type="submit" value="Search:"></td>
                                    <td>
                                    <input type="text" id="plate" name="plate" placeholder="VRN of vehicle ">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            <div class="logo_container">
                <img class="logo" src="resources/img/logoWhite.svg">
            </div>
        </header>
            
        <section class="demonstration_container">
			<iframe src=<?php echo $url ?> style="width: 100%; height: 100%;"></iframe>
        </section>
        
        <footer class="demonstration_footer">
            <div class="visit-us">
                <a href="https://carscanner.io/" target="_blank">
                    Visit us at carscanner.io!
                </a>
            </div>
            <div class="coppyright">
                <p>
                    © Copyright 2021, All Rights Reserved. InMotion.
                </p>
            </div>
        </footer>
	</body>
</html>