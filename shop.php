<?php
 include_once 'header.php';
?>
  <section class="main-container">

      <?php

        if (isset($_SESSION['u_uid'])){
          echo "<p>You are logged in</p>";
        }

      ?>


      <article class="article1">

        <h2>Test</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et porta velit.
          Sed auctor vel neque eget pulvinar. Proin pellentesque rhoncus mi, a lacinia lorem dapibus ut. Vivamus nibh arcu, aliquet at laoreet sit amet,
          fermentum sed nisl. Quisque vel odio leo. Aliquam in fermentum ipsum. Sed euismod viverra euismod. Suspendisse at mauris in metus pharetra interdum et et tortor.
          Maecenas molestie justo vel ipsum iaculis auctor. Maecenas a sem a erat ultrices maximus. Maecenas dapibus mauris sit amet tempus facilisis.
          Aenean fermentum urna lectus, a sagittis nibh accumsan at.
        </p>
        <p>
          Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc fermentum ut lectus in venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          Donec suscipit sem ac arcu laoreet porttitor. Phasellus a sem non nulla fringilla auctor. In hac habitasse platea dictumst.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur elit orci, pellentesque hendrerit scelerisque id, maximus sit amet orci.
          Aenean dolor justo, faucibus sit amet eros vel, molestie ultrices tortor. Integer id vestibulum lacus. Nunc vulputate elit dui, in ullamcorper diam porttitor quis.
          Donec dictum a massa nec bibendum. Fusce lectus ante, interdum nec malesuada id, egestas nec sapien.
        </p>

      </article>



  </section>

<?php
 include_once 'footer.php';
?>
