<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="{{URL::asset('css/dashboard.css')}}"/>
        <script src="https://kit.fontawesome.com/da6bc92b.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="wrapper">
            <div class="wrapper_inner">
                <div class="vertical_wrap">
                    <div class="backdrop">
                        <div class="vertical_bar">
                            <div class="profile_info">
                                <div class="img_holder">
                                    <img src="../img/user.jpg" alt="profile_pic">
                                </div>
                                <p class="title">Kalayar Moe Myint</p>
                                <p class="sub_title">kalayarmoe13.ucsm@gmail.com</p>
                            </div>
                            <ul class="menu">
                                <li><a href="#">
                                    <span class="icon">
                                        <i class="fas fa-home"></i>
                                    </span>
                                    <span class="text">Dashboard</span>
                                </a></li>
                                <li><a href="#">
                                    <span class="icon"></span>
                                    <span class="text">Dashboard</span>
                                </a></li>
                                <li><a href="/userlist" class="active">
                                    <span class="icon">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <span class="text">User List</span>
                                </a></li>
                                <li><a href="#">
                                    <span class="icon"></span>
                                    <span class="text">Dashboard</span>
                                </a></li>
                                <li><a href="#">
                                    <span class="icon"></span>
                                    <span class="text">Account</span>
                                </a></li>
                                <li><a href="#">
                                    <span class="icon"><i class="fas fa-cog"></i>
                                    </span>
                                    <span class="text">Setting</span>
                                </a></li>
                            </ul>
                            <ul class="social">
                                <li><a href="#"><i class="fa-brands fa-facebook"></i>
                                </a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i>
                                </a></li>
                                <li><a href="#"><i class="fa-brands fa-instragram"></i>
                                </a></li>
                            </ul>
                        </div>

                    </div>

                </div>


            <div class="main_container">
                <div class="top_bar">
                    <div class="welcome"><h3>Welcome Back Kalayar!</h3></div>
                    <div class="logout">
                       <form action="/login">
                            <input type="submit" class="logoutLblPos" value="LogOut">
                       </form>
                    </div>
                </div>
                <<div class="content">
                    <div class="create">
                        <form action="/adduser">
                             <input type="submit" class="Create" value="ADD NEW +">
                        </form>
                     </div>
                     <div>
                        <form action="/create" method="post">
                            @csrf

                                <h3 class="label">Fill the user's information collectly!</h3>
                               <table class="add">
                                <tr>
                                    <td>
                                    <label for="name"><b>Name</b></label>
                                    </td>
                                    <td>
                                    <input type="text" name="name" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <label for="email"><b>Email</b></label>
                                    </td>
                                    <td>
                                    <input type="email" name="email" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                    <label for="phone"><b>Phone</b></label>
                                    </td>
                                    <td>
                                    <input type="phone" name="phone" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                    <label for="address"><b>Address</b></label>
                                    </td>
                                    <td>
                                    <input type="address" name="address" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <label for="name"><b>Choose user type:</b></label>
                                    </td>
                                    <td>
                                        <select name="user_type">
                                            <option value="Customer ">Customer</option>
                                            <option value="Vendor" >Vendor</option>

                                        </select>
                                    </td>
                                </tr>



                                <tr> <td colspan="2"> <input type="submit" class="btn_add" name="add" value="ADD"></td></tr>
                               </table>



                        </form>
                     </div>

            </div>

        </div>

<script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

