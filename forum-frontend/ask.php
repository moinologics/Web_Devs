<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Vaultboard</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="vendor/jquery-richtext-editor/richtext.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/shop-item.css" rel="stylesheet">
    </head>
    <body>
    	<br><br><br>
        <div class="container">
            <div class="row" style="min-height: 600px">
                <div class="col-lg-2 border rounded">
                    <h4 class="text-center mt-4">VaultBoard</h4>
                    <div class="">
                    	<ul class="list-group text-dark">
	                        <li class="list-group-item border-0">
	                        	<a href="#">Questions</a>
	                        </li>
	                        <li class="list-group-item border-0 ">
		                        <a href="#">Tags</a>
		                    </li>
	                        <li class="list-group-item border-0 ">
	                        	<a href="#">Users</a>
	                        </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
					<div class="container border" id="write-qn">
						<h4 class="text-center my-4">Write your Question</h4>
						<h5>Question Title</h5>
						<input type="text" class="form-control" id="title"><br>
						<div class="page-wrapper box-content">
				            <textarea class="jquery-editor" id="writeans"></textarea>
				        </div><br>
				        <div class="row">
				        	<div class="col-4">
				        		Targeted To:
				        		<select class="form-control">
				        			<option value="all">All</option>
				        			<option value="compnies">Specific company</option>
				        			<option value="profession">Specific Profession</option>
				        		</select>
				        	</div>
				        	<div class="col-4">
				        		Select:
				        		<select class="form-control">
				        			<option value="all">All</option>
				        		</select>
				        	</div>
				        	<div class="col-4"><br>
				        		<input type="button" class="btn btn-primary" value="Submit">
				        	</div>
				        </div><br>
					</div>
                </div>
                <div class="col-lg-2 border rounded">
                	
                </div>
            </div>
        </div>
        <br><br><br>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-richtext-editor/jquery.richtext.min.js"></script>
    </body>
</html>
<script>
	$(document).ready(function() {
            $('.jquery-editor').richText();
    });
</script>
