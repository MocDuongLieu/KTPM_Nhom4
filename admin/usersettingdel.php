<?php


include ('db.php');

			
			$id =$_GET['eid'];		
			$newsql ="DELETE FROM `login` WHERE id ='$id' ";
			if(mysqli_query($con,$newsql))
				{
				echo' <script language="javascript" type="text/javascript"> alert("Tài khoản và mật khẩu đã được xóa") </script>';
							
						
				}
			header("Location: usersetting.php");
		
?>


