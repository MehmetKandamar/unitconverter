<?php
include 'convertdata.php';
?>
<?php
if(isset($_POST["submit"])) {
    $unit = $_POST["unit"];
    $value = $_POST["val"];
    $fromUnit = $_POST["unit1"];
    $toUnit = $_POST["unit2"];
    //$value is the value to convert, $fromUnit is the unit of the value to convert, $toUnit is the unit to convert to
    if ($unit==1) {
        echo $value ." ".$fromUnit. " is equal to " .length_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==2) {
        echo  $value ." ".$fromUnit. " is equal to " .mass_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==3) {
        echo  $value ." ".$fromUnit. " is equal to " .area_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==4) {
        echo  $value ." ".$fromUnit. " is equal to " .volume_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==5) {
        echo  $value ." ".$fromUnit. " is equal to " .speed_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==6) {
        echo  $value ." ".$fromUnit. " is equal to " .temperature_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==7) {
        echo  $value ." ".$fromUnit. " is equal to " .pressure_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==8) {
        echo  $value ." ".$fromUnit. " is equal to " .time_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==9) {
        echo  $value ." ".$fromUnit. " is equal to " .energy_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==10) {
        echo  $value ." ".$fromUnit. " is equal to " .disk_storage($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==11) {
        echo  $value ." ".$fromUnit. " is equal to " .frequency_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }elseif ($unit==12) {
        echo  $value ." ".$fromUnit. " is equal to " .angles_converter($value, $fromUnit, $toUnit)." ".$toUnit;
    }else{
        echo "The units you want to convert are not supported by our system!!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<title> ANY-CONVERT </title>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="heading">
    <h1>Unit Converter</h1>
</div>
<div class="Length">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="1">Length</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="nm">Nanometer</option>
                <option value="um">Micrometer</option>
                <option value="mm">Millimeter</option>
                <option value="cm">Centimeter</option>
                <option value="in">Inch</option>
                <option value="ft">Foot</option>
                <option value="m">Meter</option>
                <option value="km">Kilometer</option>
                <option value="yd">Yard</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="nm">Nanometer</option>
                <option value="um">Micrometer</option>
                <option value="mm">Millimeter</option>
                <option value="cm">Centimeter</option>
                <option value="in">Inch</option>
                <option value="ft">Foot</option>
                <option value="m">Meter</option>
                <option value="km">Kilometer</option>
                <option value="yd">Yard</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Mass">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="2">Mass</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="mg">Milligram</option>
                <option value="g">Gram</option>
                <option value="lb">Pound</option>
                <option value="kg">Kilogram</option>
                <option value="t">Tonne</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="mg">Milligram</option>
                <option value="g">Gram</option>
                <option value="lb">Pound</option>
                <option value="kg">Kilogram</option>
                <option value="t">Tonne</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Area">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="3">Area</option>

            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="m2">Square Meter</option>
                <option value="km2"> Square Kilometer</option>
                <option value="cm2">Square Centimeter</option>
                <option value="mm2">Square Millimeter</option>
                <option value="ft2">Square Foot</option>
                <option value="mi2"> Square Mile</option>
                <option value="ac">Acre</option>
                <option value="ha"> hectare</option>

            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="m2">Square Meter</option>
                <option value="km2"> Square Kilometer</option>
                <option value="cm2">Square Centimeter</option>
                <option value="mm2">Square Millimeter</option>
                <option value="ft2">Square Foot</option>
                <option value="mi2"> Square Mile</option>
                <option value="ac">Acre</option>
                <option value="ha"> hectare</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Volume">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="4">Volume</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="l">Millilitre</option>
                <option value="ml">Litre</option>
                <option value="m3">Cubic Meter</option>
                <option value="gal">Gallon</option>
                <option value="oz">fluid ounces</option>
                <option value="ft3">cubic feet</option>
                <option value="cm3">cubic centi meter</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="l">Millilitre</option>
                <option value="ml">Litre</option>
                <option value="m3">Cubic Meter</option>
                <option value="gal">Gallon</option>
                <option value="oz">fluid ounces</option>
                <option value="ft3">cubic feet</option>
                <option value="cm3">cubic centi meter</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Speed">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="5">Speed</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="mps">Meters per Second</option>
                <option value="kph"> Kilometers Per Hour</option>
                <option value="mph">Miles Per Hour</option>
                <option value="knots">Knots</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="mps">Meters per Second</option>
                <option value="kph"> Kilometers Per Hour</option>
                <option value="mph">Miles Per Hour</option>
                <option value="knots">Knots</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Temperature">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="6">Temperature</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="k">Kelvin</option>
                <option value="c">celsius</option>
                <option value="f">fahrenheit</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="k">Kelvin</option>
                <option value="c">celsius</option>
                <option value="f">fahrenheit</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Pressure">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="7">Pressure</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="pa">Pascal</option>
                <option value="kpa">kilopascal</option>
                <option value="mpa">MegaPascal</option>
                <option value="bar">Bar</option>
                <option value="mbar"> Millibar</option>
                <option value="psi">Pound-force per square inch</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="pa">Pascal</option>
                <option value="kpa">kilopascal</option>
                <option value="mpa">MegaPascal</option>
                <option value="bar">Bar</option>
                <option value="mbar"> Millibar</option>
                <option value="psi">Pound-force per square inch</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Time">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="8">Time</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="s"> Second</option>
                <option value="yr">Year </option>
                <option value="month">Month</option>
                <option value="week">Week</option>
                <option value="day"> Day</option>
                <option value="hr">Hour</option>
                <option value="min"> Minute</option>
                <option value="ms">Millisecond</option>
                <option value="dec">decade</option>
                <option value="cen">Century</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="s"> Second</option>
                <option value="yr">Year </option>
                <option value="month">Month</option>
                <option value="week">Week</option>
                <option value="day"> Day</option>
                <option value="hr">Hour</option>
                <option value="min"> Minute</option>
                <option value="ms">Millisecond</option>
                <option value="dec">decade</option>
                <option value="cen">Century</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Energy">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="9">Energy-Power</option>

            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="j">Joule</option>
                <option value="kj"> Kilojoule</option>
                <option value="gcal">Gram calorie</option>
                <option value="whr">Watt Hour</option>
                <option value="kwhr">Kilowatt Hour</option>
                <option value="ev">Electronvolt</option>
                <option value="kcal">kilocalorie</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="j">Joule</option>
                <option value="kj"> Kilojoule</option>
                <option value="gcal">Gram calorie</option>
                <option value="whr">Watt Hour</option>
                <option value="kwhr">Kilowatt Hour</option>
                <option value="ev">Electronvolt</option>
                <option value="kcal">kilocalorie</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Disk">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="10">Disk Storage</option>

            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="bit">Bit</option>
                <option value="byte">Byte</option>
                <option value="kb">Kilobyte</option>
                <option value="mb">megabyte</option>
                <option value="gb"> gigabyte</option>
                <option value="tb">terabyte</option>
                <option value="pb"> petabyte</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="bit">Bit</option>
                <option value="byte">Byte</option>
                <option value="kb">Kilobyte</option>
                <option value="mb">megabyte</option>
                <option value="gb"> gigabyte</option>
                <option value="tb">terabyte</option>
                <option value="pb"> petabyte</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Frequency">
    <form method="post" class="conv" action="convert.php">
        Unit :<label>
            <select name="unit">
                <option value="11">Frequency</option>

            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="hz">hertz </option>
                <option value="khz"> kilo hertz</option>
                <option value="mhz">mega hertz</option>
                <option value="ghz">giga hertz</option>
            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="hz">hertz </option>
                <option value="khz"> kilo hertz</option>
                <option value="mhz">mega hertz</option>
                <option value="ghz">giga hertz</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
<div class="Angles">
    <form method="post" class="conv">
        Unit :<label>
            <select name="unit">
                <option value="12">Plane Angles</option>
            </select>
        </label>
        Convert :<label>
            <input type="text" name="val">
        </label>
        Convert from:<label>
            <select name="unit1">
                <option value="0">----------Select----------</option>
                <option value="deg">Degrees</option>
                <option value="rad">Radian</option>
                <option value="grad">Gradiant</option>

            </select>
        </label>
        convert to:<label>
            <select name="unit2">
                <option value="0">----------Select----------</option>
                <option value="deg">Degrees</option>
                <option value="rad">Radian</option>
                <option value="grad">Gradiant</option>
            </select>
        </label>
        <input type="submit" name="submit">
    </form>
</div>
</body>
</html>
