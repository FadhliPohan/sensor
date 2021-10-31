<?php
include 'inc/koneksi.php';
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=Hasil.xls");  //File name extension was wrong
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);
?>
					<table class='table table-bordered' id="example">
						<thead>
							<tr>
							<td>Time</td>
							<td>Temperature</td>
							<td>Soil Moisture</td>
							<td>Humidity</td>
							<td>Intensity</td>
							<td>Defuzzification</td>
							<td>Duration Drip (Seconds)</td>
							</tr>
						</thead>
						<tbody>
							<?php
							
							$data=mysqli_query("select * from tbl_hasil_menit");
							while($row=mysqli_fetch_array($data)){
								echo"
								<tr>
									<td>".$row['tanggal']."</td>
									<td>".$row['suhu']."</td>
									<td>".$row['sm']."</td>
									<td>".$row['humidity']."</td>
									<td>".$row['li']."</td>
										<td>".$row['defuz']."</td>
									<td>".$row['nilai']." Detik</td>
									
								</tr>
								";
							}
							?>
						</tbody>
					
					</table>
                     
