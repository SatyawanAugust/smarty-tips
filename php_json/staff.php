<html>
	<head>
		<title>PHP JSON</title>
		
		<script src="jquery-1.8.1.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#frm_staff").submit(function(e){
					var nip = $("#nip").val();
					var nama = $("#nama").val();
					var jabatan = $("#jabatan").val();
					var table = $("#show");
					var table_body = table.find('tbody');
				
					$.ajax({
						type: "POST",
						dataType: "JSON",
						url: "save_staff.php",
						data: {
							nip: nip,
							nama: nama,
							jabatan: jabatan
						},
						success: function(data){
						
							$("#nip").val('');
							$("#nama").val('');
							$("#jabatan").val('');
							
							table_body.empty();
							
							var nip = data[0];
							var nama = data[1];
							var jabatan = data[2];
							
							//alert(result);
							var tblRow =
								"<tr valign='top'>"
								  +"<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>"+nip+"</td>"	
								  +"<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>"+nama+"</td>"
								  +"<td style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>"+jabatan+"</td>"
								+"</tr>"
							
							$(tblRow).appendTo(table_body);
						},
						error: function(jqXHR, textStatus, errorThrown)
						{
						
						}
					});
					e.preventDefault();
				});
			});
		</script>
	</head>
	
	<body>
	
	<form id="frm_staff" name="frm_staff" action="#" method="POST">
		<table cellpadding="7" cellspacing="7">
			<tr>
				<td style="padding-top: 15px;">NIP :<br>
					<input type="text" name="nip" id="nip" style="display: block; width: 244px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
				</td>
			</tr>
			<tr>
				<td style="padding-top: 15px;">Nama :<br>
					<input type="text" name="nama" id="nama" style="display: block; width: 244px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
				</td>
			</tr>
			<tr>
				<td style="padding-top: 15px;">Jabatan :<br>
					<input type="text" name="jabatan" id="jabatan" style="display: block; width: 244px; height: 34px; padding: 6px 12px; font-size: 14px; line-height: 1.428571429; color: #555; background-color: #fff; border: 1px solid #ccc; border-radius: 4px;">
				</td>
			</tr>
			<tr>
				<td><button type="submit" class="btn btn-primary">Simpan</button></td>
			</tr>
		</table>
	</form>
	
	<table width="700" id="show">
		<thead>
			<tr>
				<th width="110" style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>NIP</th>
				<th width="270" style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>Nama</th>
				<th width="100" style='border-left: 1px solid #CCCCCC; border-top: 1px solid #CCCCCC;'>Jabatan</th>
			</tr>
		<thead>
		<tbody>
		</tbody>
	</table>
</html>