<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Calculator</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit" name="submit" value="Calculate">
        <br>
        <select name="operator">
         <option value="add">+</option>
         <option value="subtract">-</option>
         <option value="multiply">*</option>
         <option value="divide">/</option>
    </form>
    <br>
    Result: 
    <?php 
    if (isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $operator = $_POST['operator'];
      if ($operator == 'add') {
        $result = $num1 + $num2;
      } elseif ($operator == 'subtract') {
        $result = $num1 - $num2;
      } elseif ($operator == 'multiply') {
        $result = $num1 * $num2;
      } elseif ($operator == 'divide') {
        $result = $num1 / $num2;
      }
    }
        ?>
        <?php
if (isset($result)) {
  echo "Result: $result";
}
?>
</body>
</html>