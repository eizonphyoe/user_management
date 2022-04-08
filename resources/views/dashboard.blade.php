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
                <table class="tb">
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>User_Type</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($data as $d )
                    <tr>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->phone}}</td>
                        <td>{{$d->address}}</td>
                        <td>{{$d->user_type}}</td>
                        <td>{{$d->created_at}}</td>
                        <td>{{$d->updated_at}}</td>
                        <td><a href="/update/{{$d->id}}">Update</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this user?')" href="/delete/{{$d->id}}">Delete</a></td>
                    </tr>
                    @endforeach

                </table>

            </div>

        </div>

<script src="{{asset('js/app.js')}}"></script>
    </body>
</html>

