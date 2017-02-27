<?php
  include_once '../templates/header.php';
?>
  


    <?php
    include_once '../templates/leftSidebar.php';
    include_once '../templates/rightSidebar.php';
    include_once '../templates/projectBody.php';
    ?>


  <div class="container">
      <div class="progress" id="progress-bar-div">
          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          <span class="sr-only">60% Complete</span>
          </div>
      </div>
  </div>
  <script>

      $(document).ready(function () {

          var percent = 70;
          $("#progress-bar-div").children(".progress-bar").attr("aria-valuenow",percent);
          $("#progress-bar-div").children(".progress-bar").width(percent+"%");
          $("#progress-bar-div").children(".progress-bar").children(".sr-only").html(percent + "% complete");
      });

  </script>


<?php
  include_once '../templates/footer.php';
?>
