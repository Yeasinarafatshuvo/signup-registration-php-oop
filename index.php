<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5">
    <h4 class="text-center mb-5 text-decoration-underline" style="text-decoration: underline;">SIGN UP AND LOGIN</h4>
<div class="row">
        <div class="col-md-6">
        <h4>SIGN UP</h4>
           <form action="includes/signup.php">
                <div class="form-group">
                    <label for="uid">Enter Your Name</label>
                    <input type="text" name="uid" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Enter Your Email</label>
                    <input type="text" name="Email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Enter Your Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pwdrepeat">Repeat Your Password</label>
                    <input type="text" name="pwdrepeat" class="form-control">
                </div>
                <button type="submit" name="sign_up" class="btn btn-primary">Submit</button>
           </form>
        </div>
        <div class="col-md-6">
        <h4>LOGIN</h4>
        <form action="includes/login.php" method="POST">
            <div class="form-group">
                <div>
                    <label for="uid">Enter Your username</label>
                    <input type="text" name="uid" class="form-control">
                </div>
            </div>
            <div class="form-group">
            <div class="form-group">
                <div>
                    <label for="password">Enter Your Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
            </div>    
            <butto name="login" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>