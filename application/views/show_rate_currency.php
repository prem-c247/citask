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

<hr>
<div class="container">
  <div class="row">
    <h5>Summarized prices of all active products per user</h5>
  
    <table>
        <tr>
            <th>From Currency</th>
            <th>To Currency</th>
            <th>Amount</th>
            <th>Rate</th>
            <th>Converted Amount</th>
        </tr>
        <tr>
            <?php if($currency_data!=null){ ?>
                <td><?= $currency_data->query->from ?></td>
                <td><?= $currency_data->query->to ?></td>
                <td><?= $currency_data->query->amount ?></td>
                <td><?= $currency_data->info->rate ?></td>
                <td><?= $currency_data->result ?></td>
            <?php }else { ?>
                <td col-span='4'>No data found or passed wrong parameter</td>
            <?php } ?>

        </tr>
        <?php  
          ?>
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