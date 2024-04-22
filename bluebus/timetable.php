<!DOCTYPE html>
<html>

<head>
	<title>Time Table</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f8f9fa;
			margin: 0;
			padding: 0;
		}

		h1 {
			text-align: center;
			color: #343a40;
		}

		table {
			border-collapse: collapse;
			margin: 20px auto;
			background-color: #fff;
			border: 2px solid #dee2e6;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		}

		th,
		td {
			border: 1px solid #dee2e6;
			padding: 10px;
			text-align: center;
		}

		th {
			background-color: #f2f2f2;
			color: #343a40;
		}

		.highlight {
			background-color: #f8f9fa;
		}

		.special {
			background-color: #f0f0f0;
		}
	</style>
</head>

<body>
	<h1>TIME TABLE</h1>
	<table>
		<tr>
			<th>Bus No.</th>
			<th>Bus Routes</th>
			<th>Departure Timings</th>
            <th>Return Timings</th>
		</tr>
		<tr>
			<td class="highlight"><b>1</b></td>
			<td>Trikon baug to saurashtra univercity</td>
			<td></td>
			<td></td>
			<td rowspan="6" class="special"><b></b></td>
			<td colspan="6" class="special"></td>
			<td>Phy</td>
		</tr>
		<tr>
			<td class="highlight"><b>2</b></td>
            <td>Saurashtra univercity to Trikon baug</td>
            <td></td>
            <td></td>
            <td rowspan="6" class="special"><b></b></td>
			<td colspan="3" class="special"></td>
			<td class="special"></td>
		</tr>
		<tr>
			<td class="highlight"><b>3</b></td>
			<td>Trikon baug to Pradhyuman park</td>
			<td></td>
			<td></td>
            <td rowspan="6" class="special"><b></b></td>
			<td colspan="3" class="special"></td>
			<td class="special"></td>
			
		</tr>
		<tr>
			<td class="highlight"><b>4</b></td>
			<td>Pradhyuman park to trikon baug</td>
			<td></td>
			<td></td>
			<td colspan="3" ></td>
			<td></td>
		</tr>
		<tr>
			<td class="highlight"><b>5</b></td>
			<td>GSRTC Bus port to Aaji dam</td>
            <td></td>
			<td></td>
            <td rowspan="6" class="special"><b></b></td>
			<td colspan="3" class="special"></td>
			<td class="special"></td>

			
		</tr>
		
	</table>
</body>

</html>
