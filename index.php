<!DOCTYPE html>
<html>
<body>

<script src="https://kit.fontawesome.com/<access_Code>" crossorigin="anonymous"></script>
<!-- the line above allows usage of icons
     visit https://kit.fontawesome.com and create an account to get the access link to basic icons
     use access value they assign you upon signing up 
     not required for code to work-->

<link href="StyleSheet.css" rel="stylesheet">

<div class="navbar">
    <div class="navbar-right">
        <a class="active" href="/wterrill/">
            Home
            <i class="fas fa-home"></i>
        </a>
    </div>
    <a href="https://www.cmu.edu/physics/">
        CMU Physics
        <i class="fas fa-atom"></i>
    </a>  
    <div class="dropdown">
        <button onclick="window.location.href='projects/';" class="dropbtn">Projects
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <!--<a href="/projects">projects<a>-->
            <a href="#">link1</a>
            <a href="#">link2</a>
        </div>
    </div>
</div>                                                                                         

<h1>User_Name</h1>
<h2>Homepage</h2>

<img src="Profile_pic.jpeg" alt="Profile Picture" style="width:304px;height:304px;">
</br>

<?php
    echo "Hello World! <br>";
?>

</body>
</html>

