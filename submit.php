<?php
// Start the session
    session_start();

// Set session variables
    $_SESSION["name"] = 'Yapeaud';

// Check if the form is submitted
    if(isset($_POST['send'])){

        //Retrieve data from a form
            $username = $_POST['name'];
            
            if($username == $_SESSION["name"] ){
                echo 'Welcome ' . $username;
            }
            else{
                echo 'The name is not correct';
                ?>
                    <div><a href="exercise2.php" class="btn btn-link">Se connecter</a></div>
                <?php
            }
    }
?>
