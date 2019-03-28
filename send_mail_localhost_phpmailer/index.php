<!DOCTYPE html>
<html>
<head>
    <!-- allow gmail first from link -> https://myaccount.google.com/lesssecureapps -->
    <!-- unlock captha from link -> https://accounts.google.com/b/0/displayunlockcaptcha -->
    <title>send mail on localhost</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="custom.css">


    
</head>
<body>
    <div class="container"><br>

		<div class="col-lg-5 m-auto text-center bg-info p-3 text-white rounded">Sending Email using PHPMailer On localhost</div>
		
		<div class="border text-center col-lg-5 mx-auto " id="info"></div>

       <div class="col-lg-5 m-auto text-center border bg-secondary rounded"><br>
          <div class="form-group col-12 mx-auto" onclick="hideinfo();">
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
              </div>
              <input type="email" id="fm" class="form-control" placeholder="Enter Sender email" required>
            </div>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-key"></i></span>
              </div>
              <input type="password" id="fmp" class="form-control" placeholder="Enter Password for above mail" required>
            </div>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope-open"></i></span>
              </div>
              <input type="email" id="tm" class="form-control" placeholder="Reciver Email" required>
            </div>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-at"></i></span>
              </div>
              <input type="text" id="sjt" class="form-control" placeholder="Enter subject" required>
            </div>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-comment"></i></span>
              </div>
              <textarea name="msg" id="mg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
            </div>
            <button class="btn btn-primary mx-auto" onclick="sendmail();">Send <i class="fa fa-send-o"></i></button>
        </div>
        <div class=" m-auto text-center bg-dark rounded">
        	<b class="text-white">----- Note -----<br>first sign in gmail and allow from two given links<br></b>
        	<a href="https://myaccount.google.com/lesssecureapps">less secure app</a>&emsp;
        	<a href="https://accounts.google.com/b/0/displayunlockcaptcha">Display unlock captcha</a>
        </div><br>
        
    </div>
</body>
</html>
    <script type="text/javascript">
    	function hideinfo(){$("#info").html('');}

    	function sendmail(){/* alert();*/
			$("#info").html('<img src="img/Ellipsis-92px.gif">Sending...');
			var from = $('#fm').val();
			var fpass = $('#fmp').val();
			var tomail = $('#tm').val();
			var sbjct = $('#sjt').val();
			var message = $('#mg').val();

			$.ajax({
	 			url:'ajax.php',type:'POST',data: { fmail : from, fmailpass : fpass, tmail: tomail, sj: sbjct, msg: message},
	 			success:function(result){
				 		$("#info").html(result); 
				}		
	 		});
		}
	</script>