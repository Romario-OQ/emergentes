<!DOCTYPE html>
<html>
<head>
    <title>Calidad del Agua</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"">
</head>
<body>
<meta http-equiv="refresh" content="3" />
  <center>
    <from action= "" method="POST">
      <input type="date" name="data">
      <input type="submit" name="submit" value="Buscar">

    </from>
    <form action="reporte.php" method="post">                           	
			<div class="form-group">									
      <hr><button type="button2" class="btn btn-success">Reporte Completo</button>        
			</div>							
    </form>
    </from>
    <form action="reporte2.php" method="post">                           	
			<div class="form-group">									
      <hr><button type="button3" class="btn btn-success">Reporte Ultimo 5 dias</button>        
			</div>							
    </form>
    <form action="reporte3.php" method="post">                           	
			<div class="form-group">									
      <hr><button type="button4" class="btn btn-success">Reporte PH y Temp optimo</button>        
			</div>							
    </form>

    <form action="reporte4.php" method="post">                           	
			<div class="form-group">									
      <hr><button type="button4" class="btn btn-success">Reporte PH y Temp peligroso</button>        
			</div>							
    </form>
    
  <?php
      include('servidor.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $dataPesquisa = $_POST['emergentes'];
      $sql = "SELECT * FROM data WHERE data LIKE '%" .$dataPesquisa. "%'";
    }
    else{
      $dataActual = date('Y-m');
      $sql = "SELECT * FROM data WHERE data LIKE  '%" .$dataActual. "%'";
    }

    $stmt = $PDO->prepare($sql);
    $stmt->execute();
      //echo "table border="
    echo "<table border=\"1\">";
    echo "<tr> <th>Sensor ph</th> <th>Sensor Temperatura</th> <th>Fecha</th>";
    while($linha = $stmt->fetch(PDO::FETCH_OBJ)){
      echo "<tr>";
      echo "<td>" .$linha->sensor_ph. "</td>";
      echo "<td>" .$linha->sensor_temp. "</td>";
      echo "<td>" .$linha->data. "</td>";
      echo "</tr>";
    }
    echo "</table>";
  ?>
  </center>
<!--
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sensor PH</th>
      <th scope="col">Sensor Temperatura</th>
      <th scope="col">fecha</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>-->
</body>
</html>