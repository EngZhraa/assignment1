<?php

    if(isset($_GET['submit'])) {

        if(empty($_GET['username'])){
            echo "اسم الدخول مطلوب رجاءا";
        } else {
            echo htmlspecialchars($_GET['username']);
        }

        if(empty($_GET['username'])){
            echo "يرجى إدخال كلمة المرور";
        } else {
            echo htmlspecialchars($_GET['password']);
        }
    }

?>


<!DOCTYPE html>
<html>
  <?php include("../includes/temps/header.php"); ?>

    <form action="login.php" method="">
        <label>اسم المستحدم أو البريد الالكتروني</label>
        <input type="text" id="username" name="username" placeholder="رجاءا ادخل إسم المستخدم" />
        <br />

        <label>كلمة المرور</label>
        <input type="text" id="password" name="password" placeholder="يرجى إدخال كلمة المرور" />
        <br />

        <button type="submit" name="submit">دخول</button>
    </form>

  <?php include("../includes/temps/footer.php"); ?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>