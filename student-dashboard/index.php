<?php 
    session_start();
    if(isset($_SESSION['type'])){
        $uid = $_SESSION['uid'];
    }
    else{
        $newURL = "../login/index.php";
        header('Location: '.$newURL);
    }
    include_once('../includes/header.php'); 
    include_once('../nav/index.php');
?>
<body>
    <div class="container">
        <div class="row">
            <?php 
            include_once('sideNav.php');
            ?>
            <div class="col-lg-9 col-md-9">
                <div class="container-fluid">
                    <?php    
                    $sql = "SELECT class FROM student_reg WHERE enroll_id =".$uid.";";
                    $result = $conn->query($sql);
                    if($result->num_rows == 0) {
                            echo "Error in database.Please contact Administrator";
                    } else {
                        $row = $result->fetch_assoc();
                        $class = $row["class"];

                        $sql2 = 'SELECT * FROM class WHERE class ="'.$class.'";';    

                        echo '<div class="col-md-8 col-lg-8"><table class="table table-striped table-bordered"><tr>';
                        echo "<th>Subjects</th><th>July</th></tr>";

                        $result = $conn->query($sql2);
                        if($result->num_rows == 0) {
                                echo "Error in database.Please contact Administrator";
                        } else {
                            while($row = $result->fetch_assoc()) {
                                $sub = $row["sub"];
                                
                                $sql3 = "SELECT * FROM ".$class."_".$sub." WHERE enroll_id =".$uid.";";
                                $result2 = $conn->query($sql3);

                                while($row2 = $result2->fetch_assoc()){
                                    echo "<tr><td>".$sub."</td><td>".$row2["july"]."</td></tr>";
                                }

                            }

                        }
                        echo "</table></div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
<?php
    include_once('../includes/footer.php');
?>