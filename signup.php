<?php $email="" ?>
<form method="post" autocomplete="on">
  <p><label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?= htmlentities($email) ?>"/>
  </p>
  <p><label for="fname">First Name</label>
    <input type="fname" name="fname" id="fname"/>
  </p>
  <p><label for="lname">Last Name</label>
    <input type="lname" name="lname" id="lname"/>
  </p>
  <p><label for="number">Phone number</label>
    <input type="text" name="number" id="number"/>
  </p>
  <p><label for="dob">Date of Birth</label>
    <input type="date" name="dob" id="dob" max="<?php echo date('Y-m-d',strtotime('-18 years'));?>" min="<?php echo date('Y-m-d',strtotime('-90 years'));?>"/>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Register"/>
  </p>
  <?php
      print_r($_POST);
   ?>
