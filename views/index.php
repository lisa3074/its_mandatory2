<?php
require_once(__DIR__.'/top.php');
?>

<main class="signin">




    <form action="/login"
        method="POST"
        class="login_form">
        <?php
  if( isset($display_error) ){
       echo '<p class="url_decode">'.urldecode($display_error).'</p>';
    }
    //Make a random salt that should be stored in the db when user signs up. This salt will be unique for the specific user
  /*    $salt = hash("sha256",base64_encode(openssl_random_pseudo_bytes(10)));
     echo "<br>$salt"; */
?>
        <label>Email
            <input type="text"
                placeholder="Email"
                name="user_email" />
        </label>
        <label>Password
            <input type="text"
                placeholder="Password"
                name="password" />
        </label>
        <button>Log in</button>
        <p>Go to <a href="http://its.mandatory2/signup">sign up</a></p>
    </form>

</main>
<?php 
require_once(__DIR__.'/bottom.php');