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
                  <h2>Create Menu</h2>
                  <form method="POST" action="">
        <?php include('includes/errors.php'); ?>
        <?php include('includes/success.php'); ?>
            <div class="form-group">
              <input type="text" name="menu_name" class="form-control" placeholder="Food Name">
            </div>
            <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <select class="form-control" id="exampleFormControlSelect1" name="menu_category">
<?php 
$query = "SELECT * FROM menu_cat ORDER BY id desc";
$results = mysqli_query($db, $query);
while ($row = $results->fetch_assoc()) {
    $cat_name = $row['category_name'];
    echo  "<option value='$cat_name'>$cat_name</option>";
}
?>
  </div>
  <div class="form-group">
              <input type="number" name="food_price" class="form-control" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-dark" name="menu">Create</button>
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