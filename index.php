<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head> 
<body>
<div class="container">
<form method="post" action="submit.php">
    <div class="row col-sm-offset-3 col-sm-6" style="margin-top: 50px;">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-12 form-group">
          <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
        </div>
      <div class="col-sm-12 form-group">
      <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5" cols="250"></textarea><br></div>
      <div class="g-recaptcha" data-sitekey="6LebtSwUAAAAAFM-nabS3PooGRuupKI5jLvmKYoC"></div>
      
       		<div class="col-sm-12 form-group">
         	 	<input class="btn btn-default pull-right" type="submit" value ="Submit"></div>
	</div>
</form>
        	
      </div>
    </div>
  </div>
			
	</div>
</div>

</body>
</html>