<?php
echo "<H1>Log in with your email and password</H1><br>";
 ?>
 <form method="post" action="verify.php" autocomplete="on">
   <p><label for="email">Email</label>
     <input type="email" name="email" id="email"/>
   </p>
   <p><label for="password">Password</label>
     <input type="password" name="password" id="password"/><br><br>
     <input type="submit" name="submit" id="submit" value="Log in"/>
   </p>
   <p>
     Don't have an account?  <a href="signup.php"><text>Sign up</text></a>
   </p>
 </form>
