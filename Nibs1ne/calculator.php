<?php

  include 'Calculatorinc.php';

  $num1 = $_POST['num1Inserted'];
  $num2 = $_POST['num2Inserted'];
  $cal = $_POST['calInserted'];

  $calculator = new Calc($num1, $num2, $cal);
  $calculator->calcMethod();

 ?>

 <script>
  
  window.location.href = 'index.php?RESULT=<?php echo $calculator->getResult(); ?>';

</script>