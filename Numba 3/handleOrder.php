<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>
    <div style="border: 2px solid black;">
        <?php 
            if(isset($_POST['submitBtn'])) {
                $order = $_POST['order'];
                $quantity = $_POST['quantity'];
                $cash = $_POST['cash'];

                $total = $order * $quantity;
                $change = $cash - $total;

                $enoughBalance = $cash >= $total;

                if($enoughBalance) { 
                    // Show receipt if balance is enough
        ?>
                    <h1 style="text-align: center;">RECEIPT</h1>
                    <div>
                        <p>Total price: <?php echo $total;?></p>
                        <p>You paid: <?php echo $cash;?></p>
                        <p>CHANGE: <?php echo $change;?></p>
                        <div id="current_date">
                            <script>
                                document.getElementById("current_date").innerHTML = Date();
                            </script>
                        </div>
                    </div>
        <?php 
                } else { 
                    // Show error message if balance is not enough
        ?>
                    <p style="color:red; text-align:center;">You do not have enough balance!</p>
        <?php 
                }
            } 
        ?>
    </div>
</body>
</html>
