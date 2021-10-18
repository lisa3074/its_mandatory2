<?php
require_once(__DIR__.'/top.php');

?>

<main class="signup">



    <form action="/signup"
        method="POST"
        class="signup_form">
        <?php
  if( isset($display_error) ){
   echo '<p class="url_decode">'.urldecode($display_error).'</p>';
    }

?>
        <label>First name
            <input type="text"
                placeholder="First name"
                name="firstname" />
        </label>
        <label>Last name
            <input type="text"
                placeholder="last name"
                name="lastname" />
        </label>
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
        <button>Sign up</button>
        <p>Go to <a href="http://its.mandatory2/">log in</a></p>
    </form>

</main>
<?php
require_once(__DIR__.'/bottom.php');