<?php
        $Producto1 = $_POST['Product1'];
        $Precio1 = $_POST['Precio1'];
        
        $Producto2 = $_POST['Product2'];
        $Precio2 = $_POST['Precio2'];
        
        $Producto3 = $_POST['Product3'];
        $Precio3 = $_POST['Precio3'];
        
        $total = $Precio1 + $Precio2 + $Precio3;
        $descuento = $total * 0.16;
        $totalPagar = $total - $descuento;
echo "Producto1:".$Product1;
echo"<br>";
  echo "Precio1:".$Precio1;
echo"<br>";
  echo "Producto2:".$Product2;
echo"<br>";
  echo "Precio2:".$Precio2;
echo"<br>";
echo "Producto2:".$Product3;
echo"<br>";
  echo "Precio2:".$Precio3;
echo"<br>";
  echo "Total a pagar:".$total;
echo"<br>";
 echo "Descuento (16%):".$descuento;
echo"<br>";
   echo "Total a pagar:".$totalPagar;
 ?>
