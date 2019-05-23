<?php
require 'includes/helpers.php';
require 'logic.php';
?>

<!DOCTYPE html >
<html lang='en'>
<head>

    <title> Area & Perimeter of Triangle Calculator </title>
    <meta charset='utf-8'>

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'
          rel='stylesheet'
          integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO'
          crossorigin='anonymous'>

    <link href='/styles/calculator.css' rel='stylesheet'>
    <a href='/'><img src='/images/calculator.png' id='logo' alt='Calculator Logo'></a>

</head>
<body>

<h1> Area and Perimeter of Rectangle Calculator </h1>

<form method='GET' action='calc.php'>
    <label> Length: <input type="number" name="length" id="length" step="0.01" value="<?php echo $length; ?>">
    </label><br>
    <br>
    <label> Width: <input type="number" name="width" id="width" step="0.01" value="<?php echo $width; ?>"> </label><br>
    <br>
    <label> Round up the Answer?</label>
    <input type="checkbox" name="round" <?php if (isset($round) and $round) echo 'checked'?> <br>
    <br>

    <label> Select Area or Perimeter Calculation </label>
    <select name="Type of Calculation" id="Type_of_Calculation" value='' >
        <option value="Area"  <?php if (isset($Type_of_Calculation) == 'Area') echo 'selected="selected"'; ?>>  Area</option>
        <option value="Perimeter" <?php if (isset($Type_of_Calculation) == 'Perimeter') echo 'selected="selected"'; ?> > Perimeter</option>
    </select><br>
    <br>
    <input type="submit" value='calc'>
</form>

<br> <br/>

<?php if ($hasErrors) : ?>
    <div class='alert alert-danger'>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
    </div>

<?php elseif ($Type_of_Calculation == "Area"): ?>
    <h2> The area of the rectangle: <em> <?php echo $area; ?>  </em></h2>
<?php elseif ($Type_of_Calculation == "Perimeter"): ?>
    <h2> The perimeter of the rectangle: <em> <?php echo $perimeter; ?>  </em></h2>

<?php endif ?>
<br> <br/>

<footer>
    <a href='https://github.com/tachyon99dwa15/p2'>View this project on Github</a>
</footer>

</body>
</html>