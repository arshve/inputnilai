<?php
include"../../../koneksi/koneksi.php";

$sql = "SELECT matkul.nama_matkul, nilai.formatif, nilai.uts, nilai.uas FROM matkul, nilai WHERE nilai.nama_matkul=matkul.id_matkul";
$hasil = mysql_query($sql);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Nilai Mahasiswa</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
		</style>
		<script type="text/javascript">
$(function () {
    Highcharts.chart('container', {
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Data extracted from a HTML table in the page'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});
		</script>
	</head>
	<body>
<script src="chart/highcharts.js"></script>
<script src="chart/data.js"></script>
<script src="chart/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<table id="datatable">
    <thead>
        <tr>
            <th></th>
            <th>Formatif</th>
            <th>UTS</th>
            <th>UTS</th>
        </tr>
    </thead>
    <?php
        while($buff=mysql_fetch_array($hasil)) {
    ?>
    <tbody>
        <tr>
            <th><?php echo $buff['nama_matkul'];?></th>
            <td><?php echo $buff['formatif'];?></td>
            <td><?php echo $buff['uts'];?></td>
            <td><?php echo $buff['uas'];?></td>
        </tr>
    </tbody>
    <?php
        }
    ?>
</table>
	</body>
</html>
