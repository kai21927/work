<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="jquery.min.js"></script>
</head>

	<style type="text/css">

	
		body{
			background-color:#F2F3F5;
		}
		
		#container{
			width:600px;
			padding-top:80;
			margin: auto;
			font-family: "Helvetica Neue","Helvetica","Arial";
		}
		.input-width{
		width:300px;
		height:40px;
		}
		.input-style{
			border-radius:5px;
			margin-bottom:10px;
		}
		label{
		display: inline-block;
		width:200px;
		font-size:1.5em;
		}
		
		#emailgender{
		margin-bottom:10px;
		border-radius:5px;
		width:300px;
		height:40px;
		}
		#submitButton{
		background-color:#AA47BC;
		color:white;
		width:500px;
		}
		#emailmessage{
		width:500px;
		font-size:1.5em;
		}
		.form-error{
		color:red
		}
		.input-error{
			box-shadow: 0 0 5px red;
			
		}
		.form-suess{
			color:darkblue;
			
		}
	</style>

<body>
	<div id="container">
	<form id="validationForm" method="POST">
	<label for="emailname" > 姓名 </label>
	<input id="emailname" type="text" name="name" class="input-style input-width" placeholder="請輸入您的姓名">
	<label for="emailaddress">郵箱 </label>
    <input id="emailaddress" type="text" name="email" class="input-style input-width" placeholder="請輸入您郵箱">
	<label for="emailgender ">性別 </label>
	<select id="emailgender" class="" name="gender" >
		<option value="male">男性</option>
		<option value="female">女性</option>
	</select>
	<label for="pass1" >密碼 </label>
	<input id="pass1" type="password" name="password" class="input-style input-width" placeholder="密碼">
	<label for="pass2" >確認密碼 </label>
	<input id="pass2" type="password" name="password" class="input-style input-width"  placeholder="確認密碼">
	<textarea id="emailmessage" name="message" class="input-style" rows="8" cols="80" placeholder="請描述你的狀況"></textarea>
	<button id="submitButton" class="input-style input-width" type="submit"name="submit">發送郵件</button>
	</form>
	
	
	

	<div id="error"></div>
	</div>
	<script type="text/javascript">
	$("#validationForm").submit(function(event){
		event.preventDefault();
		var name=$("#emailname").val();
		var email=$("#emailaddress").val();
		var pass1=$("#pass1").val();
		var pass2=$("#pass2").val();
		var message=$("#emailmessage").val();
		var submit=$("#submitButton").val();
		$("#error").load("mail.php",{
			name : name,
			email : email,
			pass1 : pass1,
			pass2 : pass2,
			message : message,
			submit : submit,
			
			
			
			
		});
	});
	
	</script>
</body>





</html>