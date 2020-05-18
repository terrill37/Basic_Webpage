<!DOCTYPE html>
<html>
<body>

<!-- visit w3schools.com/html/ for html tutorial-->

<script src="https://kit.fontawesome.com/<access-code>" crossorigin="anonymous"></script>
<!-- the line above allows usage of icons
     visit https://kit.fontawesome.com and create an account to get the access link to basic icons
     use access value they assign you upon signing up 
     not required for code to work-->

<style>

.navbar{                               
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
    }

.navbar a{
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

.navbar a2{
    float: right;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    }

.dropdown{
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn{
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    }

.navbar a:hover, .dropdown:hover .dropbtn{
    background-color: red;
    }

.dropdown-content{
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }
.dropdown-content a{
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    }

.dropdown-content a:hover{
    background-color: #ddd
    }

.dropdown:hover .dropdown-content{
    display: block;
}                                                                                   

</style>

<div class="navbar">
    <a2 class="a2" href="/<username>"> <!-- FIXME use your user name in the following lines -->
        Home
        <i class="fas fa-home"></i>
    </a2>
    <a href="https://www.cmu.edu/physics/">
        CMU Physics
        <i class="fas fa-atom"></i>
    </a>  
    <div class="dropdown">
        <button onclick="window.location.href='#';" class="dropbtn">Projects
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <!--<a href="/projects">projects<a>-->
            <a href="#">Link1</a>
            <a href="#">Link2</a>
            <a href="#">Link3</a>
        </div>
    </div>
</div>                                                                                         

<h1>Your WebPage</h1>
<h2>Homepage</h2>

<img src="Profile_pic.jpeg" alt="Profile Picture" style="width:304px;height:304px;">
<!-- in root directory include image file named as 'Profile_pic.jpeg' for image to show up-->

</br>

<?php
    //visit w3schools.com/php/ for php tutorial  
    echo "Hello World! <br>";

?>

</body>
</html>

