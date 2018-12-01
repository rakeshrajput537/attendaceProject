
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-brand">

                <a href="../home/index.php">ACADMICO</a>

            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav navbar-right">
            <?php

                if(!isset($_SESSION["type"])){
                    echo '<li><a href="../login/index.php">Login</a></li>';
                }
                else{
                    echo '<li><a href="../index.php">Home</a></li>';
                }


                if(isset($_SESSION["type"])){
                    echo '<li><a href="../includes/logout.php">Log Out</a></li>';
                }
                else{
                    echo '<li><a href="../about/index.php">About Us</a></li>';
                } 

            ?>
            </ul>
        </div>
    </div>
</nav>