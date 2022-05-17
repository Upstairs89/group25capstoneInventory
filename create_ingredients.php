<?php 
include('app_logic.php');
include ("includes/header.php");
?>
      <div class="container-fluid">
          <div class="row">
          <?php 
include ("includes/dashboard_left.php");
?>
              <div class="col-lg-9 dashboard-right">
                  <h2>Create Ingredients Stock</h2>
                  <form method="POST" action="">
        <?php include('includes/errors.php'); ?>
        <?php include('includes/success.php'); ?>
            <div class="form-group">
              <input type="text" name="ingredient_name" class="form-control" placeholder="Ingredient Name">
            </div>
            <div class="form-group">
              <input type="number" name="ing_quantity" class="form-control" placeholder="Ingredient Quantity">
            </div>
            <button type="submit" class="btn btn-dark" name="ing_stock">Create</button>
          </form>
                 
              </div>
          </div>
      </div>
      <?php 
include ("includes/footer.php");
?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>