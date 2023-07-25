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
echo "El producto 1 ingresado es:".$Product1;
echo"<br>";
  echo "El precio del producto 1 es:".$Precio1;
echo"<br>";
  echo "El producto 2 ingresado es:".$Product2;
echo"<br>";
  echo "El precio del producto 2 es:".$Precio2;
echo"<br>";
echo "El producto 3 ingresado es:".$Product3;
echo"<br>";
  echo "El precio del producto 3 es:".$Precio3;
echo"<br>";
  echo "Total de los productos es:".$total;
echo"<br>";
 echo "El descuento (16%) es :".$descuento;
echo"<br>";
   echo "Total a pagar es:".$totalPagar;
 ?>
