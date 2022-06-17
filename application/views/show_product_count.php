<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h5>Count of active and verified user</h5>
      <p><?php echo $active_and_verified_user ?></p>
    </div>
    <div class="col-sm-4">
      <h5>Count of active and verified users who have attached active products.</h5>        
      <p><?php echo $active_user_with_products ?></p>
    </div>
    <div class="col-sm-4">
      <h5>Count Active Product</h5>
      <p><?php echo $active_product ?></p>
    </div>
    <div class="col-sm-4">
      <h5>Count of active products which don't belong to any user.</h5>
      <p><?php echo $product_without_user ?></p>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h5>Amount of all active attached products</h5>
      <p><?php echo $amount_of_all_active_attached_products ?></p>
    </div>
    <div class="col-sm-4">
      <h5>Summarized price of all active attached products</h5>        
      <p><?php echo $summarized_prices_active_attached_product[0]['price'] ?></p>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <h5>Summarized prices of all active products per user</h5>
    <table>
        <tr>
            <th>User name</th>
            <th>Summarized prices</th>
        </tr>
        <?php  
            if(!empty($summarized_prices_for_active_product_per_user)){ 
                foreach($summarized_prices_for_active_product_per_user as $value){ ?>
                    <tr>
                        <td><?php echo ucfirst($value['user_name']); ?></td>
                        <td><?php echo '$'.$value['price']; ?></td>
                        
                    </tr>
                <?php } 
            }?>
    </table>
  </div>
</div>
</body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</html>