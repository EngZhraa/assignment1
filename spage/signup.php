<?php 

	$email = $phone = $password = '';
	$errors = array('email' => '', 'phone' => '', 'password' => '');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'يرجى إدخال البريد الالكتروني';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'يجب ادخال صيغة البريد الالكتروني بشكل صحيح';
			}
		}

		// check phone
		if(empty($_POST['phone'])){
			$errors['phone'] = 'يرجى ادخال رقم الهاتف';
		} else{
			$phone = $_POST['phone'];
			if(!preg_match('/^[0-9\s]+$/', $phone)){
				$errors['phone'] = 'يرجى الادخال بصيغة الارقام ففط';
			}
		}

        // check password
		if(empty($_POST['password'])){
			$errors['password'] = 'A phone number is required';
		} else{
			$password = $_POST['password'];
			if(!preg_match('/^[a-zA-Z0-9\s]+$/', $password)){
				$errors['password'] = 'Password is required';
			}
		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	
	<?php include('../includes/temps/header.php'); ?>

	<section>
		<h1>تسجيل مستخدم جديد</h1>
		<form class="" action="signup.php" method="POST">
			<label>البريد الالكتروني</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class=""><?php echo $errors['email']; ?></div>
			<label>رقم الهاتف</label>
			<input type="text" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
			<div class=""><?php echo $errors['phone']; ?></div>
			<label>كلمة المرور</label>
			<input type="password" name="password" value="<?php echo htmlspecialchars($password) ?>">
			<div class=""><?php echo $errors['password']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="تسجيل" class="">
			</div>
		</form>
	</section>

	<?php include('../includes/temps/footer.php'); ?>


</html>