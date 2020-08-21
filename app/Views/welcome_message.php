<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link  rel="stylesheet" href="assets/css/project.css">
    <link  rel="stylesheet" href="assets/css/style.css">
    </head>


<!------ Include the above in your HEAD tag ---------->

<body style="background-image:url(assets/img/BgGreen.jpg); background-repeat: no-repeat;background-size: cover">
    <div id="login" >
    <!-- <img src="assets/img/BgGreen.jpg" class="d-block w-100" alt="bg">    -->
        <h1 class="text-center text-white pt-5" style="margin-bottom: 30px;margin-top:30px;">REENG GREEN</h1>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form action="<?php echo base_url('/login');?>" name="user_login" id="user_login" method="post" accept-charset="utf-8">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <button type="submit" id="send_form" class="class=btn btn-info btn-md">Submit</button>
                                
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

  
</body>
</html>