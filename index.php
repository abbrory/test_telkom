<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>FilterDropDown example Bootstrap</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
		<script src="js/filterDropDown.js"></script>
		<script>
			// initialising dt table
			$(document).ready(function() {
			
				$('#example').DataTable({					
					// Definition of filter to display					
					filterDropDown: {										
						columns: [
							{ 
								idx: 0
							},
							{ 
								idx: 1
							}
						],
						bootstrap: true
					}
				} );
			} );
		</script>		
	</head>
	

	<body>
		<div class="container">
				<table class="table" id="example" class="display" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>LOKASI</th>
						<th>KATEGORI</th>
						<th>T</th>
						<th>R</th>
						<th>A</th>
						<th>T</th>
						<th>R</th>
						<th>A</th>
						<th>T</th>
						<th>R</th>
						<th>A</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$tbl_transaksi = mysqli_query($koneksi, "SELECT * from tbl_transaksi");
				$no=1;
				foreach ($tbl_transaksi as $row){
					echo "<tr>
						<td>".$row['lokasi']."</td>
						<td>".$row['kategori']."</td>
						<td>".$row['HI_T']."</td>
						<td>".$row['HI_R']."</td>
						<td>".$row['HI_A']."</td>
						<td>".$row['B_T']."</td>
						<td>".$row['B_R']."</td>
						<td>".$row['B_A']."</td>
						<td>".$row['T_T']."</td>
						<td>".$row['T_R']."</td>
						<td>".$row['T_A']."</td>
						</tr>";
					$no++;
				}
				?>

				</tbody>
				<tfoot>					
					<tr>
						<th>LOKASI</th>
						<th>KATEGORI</th>
						<th>T</th>
						<th>R</th>
						<th>A</th>
						<th>T</th>
						<th>R</th>
						<th>A</th>
						<th>T</th>
						<th>R</th>
						<th>A</th>
					</tr>				
				</tfoot>
			</table>

			
		</div>
		
		
	</body>
</html>