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
                  <h2>Menu</h2>
                  <table>
                      <thead>
                          <td>S/N</td>
                          <td>Food Name</td>
                          <td>Category</td>
                          <td>Price</td>
                          <td>Edit</td>
                          <td>Delete</td>
                      </thead>
                      <?php 
$query = "SELECT * FROM menu ORDER BY id desc";
$results = mysqli_query($db, $query);
$sn=0;
while ($row = $results->fetch_assoc()) {
    $sn++;
    $id = $row['id'];
    $menu_name = $row['menu_name'];
    $menu_category = $row['menu_category'];
    $food_price = $row['food_price'];
    echo  "<tr>
    <td>$sn</td>
    <td>$menu_name</td>
    <td>$menu_category</td>
    <td>$food_price</td>
    <td><a href='edit_menu.php?id=$id'>Edit</a></td>
    <td><a href='delete_menu.php?id=$id'>Delete</a></td>
    </tr>";
}
?>

                  </table>
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