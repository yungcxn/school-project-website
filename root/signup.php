<?php
 include_once 'header.php';
?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Signup</h2>

    <form class="signup-form" action="includes/signup.inc.php" method="POST">
      <input type="text" name="first" placeholder="Vorname">
      <input type="text" name="last" placeholder="Nachname">
      <input type="text" name="place" placeholder="Ort">
      <input type="text" name="street" placeholder="Straße und Hausnummer">
      <input type="text" name="postcode" placeholder="PLZ">
      <input type="text" name="email" placeholder="E-Mail">
      <input type="text" name="uid" placeholder="Username">
      <input type="text" name="pwd" placeholder="Passwort">
      <button type="submit" name="submit">Sign up</button>
    </form>

  </div>
</section>

<?php
 include_once 'footer.php';
?>
