<?

$Destino="mar.ethel@gmail.com";
$Producto=$_POST['Producto'];
$Importe=$_POST['Importe'];
$Talla  =$_POST['Talla'];
$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Direccion=$_POST['Direccion'];
$CodigoPostal=$_POST['Codigo_Postal'];
$contenido="Producto:   ".$Producto."\nImporte:     ".$Importe."\nTalla:    ".$Talla."\nNombre: ".$Nombre."\nTelefono : ".$Telefono."\nCorreo:  ".$Correo."\nDireccion :    ".$Direccion."\nCodigo Postal : ".$CodigoPostal;


mail($Destino,"Pedido",$contenido);
header("location:Gracias.html");
?>