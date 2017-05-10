<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div align=center>
		<img align="center" src='HEADER.png'></img>
	</div>
	
	<?php
					$servername = "us-cdbr-iron-east-03.cleardb.net";
					$username = "b74ba3320e82ec";
					$password = "2d194843";
					$dbname = "ad_bb6ddb2f34daf52";
					// Create connection
					$conn = new mysqli($servername,$username,$password,$dbname);
					// Check connection
					if ($conn->connect_error) {
					die("Connection failed: ". $conn->connect_error);
					}
					
	?>
	<div>
	<table>
		<tr>
			<td width="410">
				<div width="400">
				    
					<h1>For data scientists</h1>
					<table>
					<?php
					$sql = "SELECT * from servicios where codigo_servicio='0001' or codigo_servicio='0002' or codigo_servicio='0003'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {?>
						<tr >
							<td width="140"><img width=80 align="center" src="<?php echo $row['imagen_servicio']?>"></img></td>
							<td width="420"><b><?php echo $row['nombre_servicio']?></b><br><?php echo $row['descripcion_servicio']?></td>
						</tr>
					<?php }
					} else {
					echo "0 results";
					}
					?> 
					</table>
				</div>
			</td>
			<td width="410">
				<div width="400">
					<h1>For data scientists</h1>
					<table>
					<?php
					$sql = "SELECT * from servicios  where codigo_servicio='0004' or codigo_servicio='0005' or codigo_servicio='0006'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {?>
						<tr >
							<td width="140"><img width=80 align="center" src="<?php echo $row['imagen_servicio']?>"></img></td>
							<td width="420"><b><?php echo $row['nombre_servicio']?></b><br><?php echo $row['descripcion_servicio']?></td>
						</tr>
					<?php }
					} else {
					echo "0 results";
					}
					$conn->close();
					?> 
					</table>
				</div>
			</td>
		</tr>
	</table>
	</div>
	<div align=center>
		<img align="center" src='BOT.png'></img>
	</div>
</body>
</html>