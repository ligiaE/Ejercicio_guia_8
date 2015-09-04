<!DOCTYPE html>
<html lang="en">
<head>
<meta  charset="utf-8" />
<title>desarrollo del ejercicio 8</title>

                        <p>el ejercicio ocho se trata de Pedir al usuario cuántas millas desea convertir en milímetros, centímetros, metros, kilómetros, yardas, pies y pulgas. Desplegar en todas estas conversiones.<br />
                         1 km equivale a 0,6214 millas.---- millas equivale a 1760 yardas. <br /> 1 yarda equivale a 3ft. ---- 1 yarda equivale a 36 pulgadas.     </p>
                        
                            
                        <form action="desarrolllo_8.php" method="post" name="frmKm">
<label>Digite la cantidad de millas a convertir</label>
 <input id="Mi" name="Mi" onKeypress="if (event.keyCode < 45 || event.keyCode >57) event.returnValue = false;" maxlength="10" required="required"/><br>

<button type="submit">las equivalencias es</button>
</form>
     

        
</div></body>
</html>