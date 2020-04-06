<?php
	if(isset($_POST["submit"])){
		$name=$_POST["name"];
		$email=$_POST["email"];
		$pass1=$_POST["pass1"];
		$pass2=$_POST["pass2"];
		$message=$_POST["message"];
		
		$errorEmpty = false;
		$errorEmail = false;
		$errorPass = false;
		
		if(empty($name) || empty($email) ||empty($pass1)||empty($pass2)||empty($message)){
			echo "<span class='form-error' >請輸入完整訊息</span>";
			$errorEmpty=true;
			
		} elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
			echo "<span class='form-error' >請輸入正確格式的郵箱地址</span>";
			$errorEmail=true;
		} elseif($pass1!=$pass2){
			echo "<span class='form-error' >請確認輸入相同密碼</span>";
			$errorPass=true;
		} else{
			
			$mailTOname="kai.com";
			$mailTO="kai2192749@gmail.com";
			$mailFromname=$name;
			$mailFrom="yoyo@yahoo.com.tw";
			$mailSubject="測試的網頁";
			$mailContent="姓名: ".$name."信息內容:".$message;
			if(mail($mailTO,$mailSubject,$mailContent,$mailFrom)){
				echo "<span class='form-suess' >郵件已發送</span>";

			}else{
				echo "<span class='form-error' >郵件發送失敗</span>";

			}
		}
		
	} else{
		echo "<span class='form-error' >網路錯誤，請稍後再試</span>";
		
	}






?>

<script>
	$("#emailname,#emailaddress,#pass1,#pass2,#emailmessage").removeClass("input-error");
	var errorEmpty="<?php echo $errorEmpty;?>";
	var errorEmail="<?php echo $errorEmail;?>";
	var errorPass="<?php echo $errorPass;?>";

	if(errorEmpty == true){
		$("#emailname,#emailaddress,#pass1,#pass2,#emailmessage").addClass
		("input-error");
	}
	if(errorEmail == true){
		$("#emailaddress").addClass("input-error");
	}
	if(errorPass == true){
		$("#pass1,#pass2").addClass("input-error");
	}
</script>