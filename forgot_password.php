<?php require_once "includes/server.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
<style>
    body{
        font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
        background-color :#24a8e2;
    }
    .container{ 
        background-color: #ffffff;
        margin: auto;
        margin-top: 15%;
    position: relative;
    text-align: center;
     top: 50%;
    width: 20%;
    padding: 25px;
    padding-top:5px;
    }
    input[type=email]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
    .form-control {
  background-color: transparent;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
[type="text"] {color: #111;}
[type="password"] {color: #111;}
.btn--form {
    margin-top: 2rem;
  padding: .5rem 2.5rem;
  font-size: .95rem;
  font-weight: 600;
  text-transform: uppercase;
  color: #fff;
  background: #111;
  border-radius: 35px;
}
.btn:hover {background: linear-gradient(57deg, #4760e9 , #11cdde );}
.btn:focus {background: linear-gradient(57deg, #4760e9 , #11cdde );}
.alert{
    color: red;
}
</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col1">
                <form action="" method="POST" autocomplete="off">
                    <h2 class="text-center">Forgot Password</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert ">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter your email id" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="btn btn--form" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>