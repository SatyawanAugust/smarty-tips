<?php
ob_start();
require ("html2pdf/html2pdf.class.php");

$filename="latihan.pdf";
$content = ob_get_clean();

$content = "<h3>Data Karyawan CV. ASFA Solution</h3>";
$content .= "<table>
				<tr>
					<th width='40'>No</th>
					<th width='150'>NIP</th>
					<th width='230'>Nama</th>
					<th width='200'>Jabatan</th>
				</tr>
				<tr>
					<td>1.</td>
					<td>2013021601 – AFG</td>
					<td>Agus Saputra, S.Kom.</td>
					<td>Exe - Director / Senior Developer</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>2013021602 – AFG</td>
					<td>Feni Agustin, S.Kom.</td>
					<td>Exe - Vice Director / VP Operations</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>2013021603 – AFG</td>
					<td>Hadi Setiawan</td>
					<td>Exe - Operational Manager / HRD</td>
				</tr>
				<tr>
					<td>4.</td>
					<td>2013090801 – AFG</td>
					<td>Daniel Put Rahmanto, S.Kom.</td>
					<td>Lead Designer</td>
				</tr>
				<tr>
					<td>5.</td>
					<td>2013090802 - AFG</td>
					<td>Anthonius Suharta</td>
					<td>Web Developer</td>
				</tr>
				<tr>
					<td>6.</td>
					<td>2014150501 - AFG</td>
					<td>Yohana Fransiska, S.E.</td>
					<td>Content Writer</td>
				</tr>
				<tr>
					<td>7.</td>
					<td>2014100801 - AFG</td>
					<td>Sutandy</td>
					<td>Web Developer</td>
				</tr>
			</table>";

ob_end_clean();
// conversion HTML => PDF
try
{
	$html2pdf = new HTML2PDF('P', 'A4','fr', false, 'ISO-8859-15',array(2, 10, 2, 10)); //setting ukuran kertas dan margin pada dokumen anda
	// $html2pdf->setModeDebug();
	$html2pdf->setDefaultFont('Arial');
	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	$html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>