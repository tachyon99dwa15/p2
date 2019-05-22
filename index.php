<?php
require 'includes/helpers.php';
require 'logic.php';
?>

<!DOCTYPE html >
<html lang='en'>
<head>

    <title> Area & Perimeter of Triangle Calculator </title>
    <meta charset='utf-8'>
</head>
<body>

<h1> Area and Perimeter of Rectangle Calculator </h1>

<form method='GET' actions='calc.php'>
    <label> Length: <input type="number" name="length" id="length" min="0" step=".1" value = "<?php echo $length;?>"> </label><br>
    <br>
    <label> Width: <input type="number" name="width" id="width" min="0" step=".1" value="<?php echo $width;?>"> </label><br>
    <br>
    <label> Round up the Answer?</label>
    <input type="checkbox" name="round" {{ ('round') ? 'checked' : '' }} > <br>
    <br>

    <label> Select Area or Perimeter Calculation </label>
    <select name="Type of Calculation" id="Type_of_Calculation" value='{{ $Type_of_Calculation }}'>
    <option value="Area"> Area</option>
    <option value="Perimeter"> Perimeter</option>
    </select ><br>
    <br>
    <input type="submit" value='calc'>
</form>

<?php if ($hasErrors) : ?>
    <div class='alert alert-danger'>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach ?>
        </ul>
        <?php if ($Type_of_Calculation == "Area"): ?>
        <h2> The area of the rectangle: <em> {{ $area }} </em></h2>
        <?php elseif ($Type_of_Calculation == "Perimeter"): ?>
        <h2> The perimeter of the rectangle: <em>{{ $perimeter }}</em></h2>
        <?php endif ?>
    </div>
<?php endif ?>
<br> <br/>

<footer>
    <a href='https://github.com/tachyon99dwa15/p2'>View this project on Github</a>
</footer>

</body>
</html>