<?php 
    session_start();
    include_once('../includes/db.php');
    if (isset($_POST['s_submit'])){
        $uid = $_POST['s_uid'];
        $pwd = $_POST['s_pwd'];

        $sql = "SELECT * FROM student_reg WHERE enroll_id = " . $uid . ";";
        
        $result = $conn->query($sql);
        if($result->num_rows == 0) {
             echo "STUDENT NOT REGISTERD";
        } else {
            while($row = $result->fetch_assoc()) {
                if($row["stu_pwd"] != $pwd){
                    echo "STUDENT NOT REGISTERD";
                }
                else{
                    $_SESSION['uid'] = $row["enroll_id"];
                    $_SESSION['type'] = $_POST['s_submit'];
                    echo "redirect stu";
                }
            }
        }
    }
    else{
        if (isset($_POST['t_submit'])){ 
            $uid = $_POST['t_uid'];
            $pwd = $_POST['t_pwd'];

            $sql = 'SELECT * FROM faculty_reg WHERE fac_id = "' . $uid . '";';
            
            $result = $conn->query($sql);
            if($result->num_rows == 0) {
                 echo "FACULTY NOT REGISTERD";
            } else {
                while($row = $result->fetch_assoc()) {
                    if($row["fac_pwd"] != $pwd){
                        echo "FACULTY NOT REGISTERD";
                    }
                    else{
                        $_SESSION['uid'] = $row["fac_id"];
                        $_SESSION['type'] = $_POST['t_submit'];
                        echo "redirect fac";
                    }
                }
            }
        }   
    }
?>
