
<!DOCTYPE html>
<html>

<head>
	<title>Sending file attachment with email</title>
	<meta charset="utf-8">
	<meta name="viewport"
		content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
	</script>
	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
	</script>
	<style>
		form {
			box-shadow: 10px 10px 40px grey;
			padding: 50px;
			margin: 20px;
			color: blue;
			
		}
		*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
		
		
		
	</style>
</head>

<body>

	
	<form method="post" action="feedback.php"
			enctype="multipart/form-data"
			class="w-75 mx-auto">
		<h1 class ="text-success text-center">
			 Student Feedback Form
		</h1>
		
		<!-- <h5 class="text-success text-center">
			Sending email with a
			file attachment
		</h5> -->
		
		<div class="form-group">
			<input type="text" name="name"
				class="form-control"
				placeholder="Name" required="">
		</div>
		<div class="form-group">
			<input type="number" name="enroll"
				class="form-control"
				placeholder="Enrollment No." required="">
		</div>

		<div class="form-group">
			<input type="email" name="email"
				class="form-control"
				placeholder="Email address" required="">
		</div>
		
		<div class="form-group">
			<input type="text" name="div"
				class="form-control"
				placeholder="Div Name" required="">
		</div>
		
		<div class="form-group">
			<textarea type="text" name="feedback_write" placeholder="Feedback Write..." cols="30" rows="3"></textarea>
		</div>
		<div class="submit text-center">
			<input type="submit" name="submit"
				class="btn btn-success "
				value="Submit">
		</div>
		<div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
       </div>
	</form>
</body>

</html>