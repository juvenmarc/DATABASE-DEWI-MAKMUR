<?php
				
				//include 'rosella.php'; 
				include 'datajaticina.php'; 
				?>
				<table id="rosella datatable" class="table table-striped table-bordered">
											<thead>
												<tr><th colspan="30" style="vertical-align:middle" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
												&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Jenis Bahan : Jaticina&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
												&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Lead Time : 5 Hari</th></tr>
												<tr>
												<tr>
													<th rowspan="3" style="vertical-align:middle">Month</th>
													<th colspan="8" style="text-align:center">Minggu 1</th>
													<th colspan="7" style="text-align:center">Minggu 2</th>
													<th colspan="7" style="text-align:center">Minggu 3</th>
													<th colspan="7" style="text-align:center">Minggu 4</th>
												</tr>
												<tr><th colspan="29" style="text-align:center">Periode</th></tr>
												<tr>
													<td align="right">0</td>
													<td>1</td>
													<td>2</td>
													<td>3</td>
													<td>4</td>
													<td>5</td>
													<td>6</td>
													<td>7</td>
													<td>1</td>
													<td>2</td>
													<td>3</td>
													<td>4</td>
													<td>5</td>
													<td>6</td>
													<td>7</td>
													<td>1</td>
													<td>2</td>
													<td>3</td>
													<td>4</td>
													<td>5</td>
													<td>6</td>
													<td>7</td>
													<td>1</td>
													<td>2</td>
													<td>3</td>
													<td>4</td>
													<td>5</td>
													<td>6</td>
													<td>7</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>GR</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php if($bahanmingguan=$bahanagu/4){
													echo number_format($bahanmingguan,2) ;}?><br>Gram</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php if($bahanmingguan=$bahanagu/4){
													echo number_format($bahanmingguan,2) ;}?><br>Gram</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php if($bahanmingguan=$bahanagu/4){
													echo number_format($bahanmingguan,2) ;}?><br>Gram</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php if($bahanmingguan=$bahanagu/4){
													echo number_format($bahanmingguan,2) ;}?><br>Gram</td>
													<td></td>
													<td></td>
												</tr>
												<tr>
													<td>OH</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php
													echo "$bahanagu <br>Gram";?></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php if($bahanminggu2=$bahanagu-$bahanmingguan){
													echo number_format($bahanminggu2,2) ;}?><br>Gram</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php if($bahanminggu3=$bahanminggu2-$bahanmingguan){
													echo number_format($bahanminggu3,2) ;}?><br>Gram</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php if($bahanminggu4=$bahanminggu3-$bahanmingguan){
													echo number_format($bahanminggu4,2) ;}?><br>Gram</td>
													<td></td>
													<td></td>												</tr>
												<tr>
													<td>NR</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right">0</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right">0</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right">0</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right">0</td>
													<td></td>
													<td></td>												</tr>
												<tr>
													<td>PORec</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td align="right"><?php
													echo "$bahanagu <br>Gram";?></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>												</tr>
												<tr>
													<td>PORel</td>
													<td></td>
													<td align="right"><?php
													echo "$bahanagu <br>Gram";?></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr> <td colspan="30" style="vertical-align:middle">Note : Periode 0 merupakan periode dasar</td>
												</tr>
											</tbody>
										</table>