<?php session_start(); ?>
	<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="s2.css" /> 
	</head>

	<body>
		<div class="container">
			<form>
				<div class="imgcontainer"> <span onclick="window.location.href = 'tabs1.php'" class="close" title="Close">&times;</span> </div>
				<div class="container">
					<table class="data-table">
						<caption class="title" style="text-align: center; font-size: 20px; ">Interest added to your deposit</caption>
						<thead>
							<tr>
								<th>Transaction_id</th>
								<th>Date</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
							<?php
							error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE ^ E_STRICT);
							include("dbcon.php");
							$depid = $_SESSION['depid'];
							$depid = mysqli_real_escape_string($db, $depid);
							if (mysqli_multi_query($db, "SELECT * from dep_interest where depid='$depid' order by adate ")  or die('SQL Error: ' . mysqli_error($db))) {
								do {
									/* store first result set */
									if ($result1 = mysqli_store_result($db)) {
										while ($row = mysqli_fetch_row($result1)) {
											echo '<tr>
											<td>'.$row[2].'</td>
											<td>'.$row[3].'</td>
											<td>'.$row[1].'</td>
											</tr>';
										}
										mysqli_free_result($result1);
									}
								} while (mysqli_next_result($db));
							}
							mysqli_close($db);
							?>
						</tbody>
					</table>
				</div>
				<br>
				<button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
			</form>
		</div>
	</body>