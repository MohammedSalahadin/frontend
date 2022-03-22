  <?php
  require('../header.php');
   
   ?>

  
  <div class="d-flex flex-row-reverse overflow-auto">

    <?php
    require('../components/monitor-table/monitorMessageBox.php')
    ?>

    <div class="container">
      <div class=" p-1 rounded text-center mt-3 bg--primary">
        <h3 class="" style="color: gray;">ISSUE MONITOR</h3>
      </div>

      <?php
      require('../components/monitor-table/monitorTable.php')
      ?>
    </div>
  </div>

     <?php
      require('../footer.php')
      ?>
  