<?php 
session_start();
if(!isset($_SESSION['ID'])){
    header('Location: ./login.php');
    }
?>
<!Doctype HTML>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/dashboard.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

    <div id="mySidenav" class="sidenav">
        <p class="logo"><span>25th</span>-Century</p>
        <a href="sell.php" class="icon-a"><i class="fas fa-rupee-sign"></i> &nbsp;&nbsp;Sell</a>
        <a href="index.php" class="icon-a"><i class="fas fa-home"></i> &nbsp;&nbsp;Home</a>
        <a href="support.php" class="icon-a"><i class="fas fa-phone-square-alt"></i> &nbsp;&nbsp;Contact</a>
        <a href="index.php#services"><i class="fas fa-concierge-bell"></i> &nbsp;&nbsp;services</a>
        <a href="index.php#featured"><i class="fas fa-star"></i> &nbsp;&nbsp;featured</a>
        <a href="<?php
                if(isset($_SESSION['ID'])){
                echo "./logout.php";
                }else{
                echo "./login.php";
                }
                ?>">
                <?php
                if(isset($_SESSION['ID'])){
                echo "<i class='fas fa-power-off'></i>logout";
                }else{
                echo "<i class='fas fa-power-off'></i>login";
                }
                ?>
            </a>
        

    </div>
    <div id="main">
        
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".nav").click(function() {
            $("#mySidenav").css('width', '70px');
            $("#main").css('margin-left', '70px');
            $(".logo").css('visibility', 'hidden');
            $(".logo span").css('visibility', 'visible');
            $(".logo span").css('margin-left', '-10px');
            $(".icon-a").css('visibility', 'hidden');
            $(".icons").css('visibility', 'visible');
            $(".icons").css('margin-left', '-8px');
            $(".nav").css('display', 'none');
            $(".nav2").css('display', 'block');
        });

        $(".nav2").click(function() {
            $("#mySidenav").css('width', '300px');
            $("#main").css('margin-left', '300px');
            $(".logo").css('visibility', 'visible');
            $(".icon-a").css('visibility', 'visible');
            $(".icons").css('visibility', 'visible');
            $(".nav").css('display', 'block');
            $(".nav2").css('display', 'none');
        });
    </script>

</body>


</html>