<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{URL::asset('css/main.css')}}"/>
    </head>
    <body>


            <form class="loginbox" action="/login/{username}/{password}" method="POST" >
                @csrf
                <img src="../img/user.png" width="150px" height="100px">
                <div class="Uname">
                    <input type="text" name="username" placeholder="Enter Your Name" required/>

                </div>
                <div class="Password">
                    <input type="password" name="password" placeholder="Enter Your Password" required/>
                </div>
                <input type="submit" name="submit" value="LOGIN" class="btn-login"/>
            </form>
        </body>
</html>
