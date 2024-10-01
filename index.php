<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cake</title>
</head>
<style>
    table{
        width:80%;
        border:1px solid;
        margin: 20px auto;

    }
    th, td{
        border: 1px solid #000;
        padding:10px;
        text-align: left;
    }

</style>
<body>
    <h1>D-I-Y Cake </h1>
<?php 
    $CakeShape =  ["Heart", "Rectangular", "Square", "Round"];
    $CakeFlavors =  ["Chocolate", "Vanilla", "Lemon", "Cheesecake"];
    $CakeToppings =  ["Cookies", "Spun-sugar Flowers", "Mini Chocolate Candies", "Marshmallows"];
?>
  <table>
        <thead>
            <tr>
                <th style="font-size: larger;">Cake Shape</th>
                <th style="font-size: larger;">Cake Flavor</th>
                <th style="font-size: larger;">Cake Toppings</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-size: large;">
                    <?php foreach ($CakeShape as $shape) : ?>
                        <input type="radio" name="cake_shape" value="<?php echo $shape; ?>">
                         <?php echo $shape; ?><br>
                    <?php endforeach; ?>
                </td>
                <td style="font-size: large;">
                    <?php foreach ($CakeFlavors as $flavor) : ?>
                        <input type="radio" name="cake_flavor" value="<?php echo $flavor; ?>">
                         <?php echo $flavor; ?><br>
                    <?php endforeach; ?>
                </td>
                <td style="font-size: large;">
                    <?php foreach ($CakeToppings as $topping) : ?>
                        <input type="radio" name="cake_topping" value="<?php echo $topping; ?>"> 
                        <?php echo $topping; ?><br>
                    <?php endforeach; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
