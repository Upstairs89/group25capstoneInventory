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
                  <h2>Pending Orders</h2>
                  <table>
                      <thead>
                          <td>S/N</td>
                          <td>Customer Id</td>
                          <td>Customer Name</td>
                          <td>Customer email</td>
                          <td>Customer Address</td>
                          <td>Customer Number</td>
                          <td>Order</td>
                          <td>Date</td>
                          <td>Time</td>
                          <td>Status</td>
                          <td>Aprove</td>
                          <td>Delete</td>
                      </thead>
                      <?php 
$query = "SELECT * FROM orders WHERE order_status='pending' ORDER BY id desc";
$results = mysqli_query($db, $query);
$sn=0;
while ($row = $results->fetch_assoc()) {
    $sn++;
    $id = $row['id'];
    $customer_id = $row['customer_id'];
    $customer_name = $row['customer_name'];
    $customer_email = $row['customer_email'];
    $customer_address = $row['customer_address'];
    $customer_number = $row['customer_number'];
    $customer_order = $row['customer_order'];
    $order_date = $row['order_date'];
    $order_time = $row['order_time'];
    $order_status = $row['order_status'];
    echo  "<tr>
    <td>$sn</td>
    <td>$customer_id</td>
    <td>$customer_name</td>
    <td>$customer_email</td>
    <td>$customer_address</td>
    <td>$customer_number</td>
    <td>$customer_order</td>
    <td>$order_date</td>
    <td>$order_time</td>
    <td>$order_status</td>
    <td><a href='approve.php?id=$id'>Approve</a></td>
    <td><a href='delete_order.php?id=$id'>Delete</a></td>
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