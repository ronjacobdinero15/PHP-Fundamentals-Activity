<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr, th, td {
            border: 2px solid black;
        }
        table {
            width: 50%;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>
        
    <form action="handleOrder.php" method="POST">
        <label for="order">Select an order</label>
        <select name="order">
            <option value="50">Burger</option>
            <option value="75">Fries</option>
            <option value="150">Steak</option>
        </select>

        <div>
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity"/>
        </div>

        <div>
            <label for="cash">Cash</label>
            <input type="number" name="cash"/>
        </div>

        <button name="submitBtn">Submit</button>
    </form>
</body>
</html>