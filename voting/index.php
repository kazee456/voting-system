<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOTING SYSTEM </title>
    <!-- bootsrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <link rel="stylesheet" href="forms.css">
</head>
<body class="bg-dark">
    <h1 class="text-center text-info">voting system</h1>
<div class="bg-info py-5">
    <h2 class="text-center">Login</h2>
    <div class="container text-center">
        <form action="./actions/login.php"method="POST">
            <div class="mb-3">
                <input type="text"class="form-control w-50 m-auto" name="username"
                 placeholder="Enter your username"required="required"> 
            </div>
            <div class="mb-3">
                <input type="text"class="form-control w-50 m-auto" name="mobile" 
                placeholder="Enter your mobile number"required="required"maxlength="10"minlength="0" > 
            </div>
            <div class="mb-3">
                <input type="password"class="form-control w-50 m-auto" name="password" 
                placeholder="Enter your password"required="required"> 
            </div>
            <div class="mb-3">
                <select name="std"class="form-select w-50 m-auto">
                    <option value="group">group</option>
                    <option value="voter">voter</option>
                </select>
            </div>
            <button type="submit"class="btn btn-dark">login</button>
               <p>Don't have an account?</p><a href="./partials/registration.php"class="text-white">Register here</a>
        </form>
    </div>
</div>




</body>
</html>