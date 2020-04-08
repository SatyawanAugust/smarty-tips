<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>POS Application Web Base | Putri Jaya Accessories</title>
	<meta name="description" content="Point of sale" />
	<meta name="keywords" content="Point of sale" />
	<meta name="author" content="Agus Saputra" />
	<link rel="shortcut icon" href="images/favicon.jpg">
	<link rel="stylesheet" type="text/css" href="design/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="design/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="design/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="design/css/component.css" />
	<script src="design/js/jquery-1.8.1.min.js" type="text/javascript"></script>
	<script src="design/js/modernizr.custom.js"></script>
	
</head>

<body>
		
<div class="container">
<!-- Push Wrapper -->
<div class="mp-pusher" id="mp-pusher">
		
	
<!-- mp-menu -->
<nav id="mp-menu" class="mp-menu">
	<div class="mp-level">
		<h2 class="icon icon-world">Menu</h2>
		<ul>
			<li><a href="identity.php">Identitas Outlet</a></li>
			<li><a href="users.php">Manajemen Users</a></li>
			<li>
				<a href="#">Master Data</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Master Data</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="categories.php">Kategori</a>
						</li>
						<li>
							<a href="brands.php">Brand</a>
						</li>
						<li>
							<a href="suppliers.php">Supplier</a>
						</li>
						<li>
							<a href="products.php">Produk</a>
						</li>
						<li>
							<a href="members.php">Member</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">Transaksi Penjualan</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Transaksi Penjualan</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="sales_transactions.php?module=trx&act=add">Tambah Transaksi</a>
						</li>
						<li>
							<a href="sales_transactions.php?module=trx&act=pending">Transaksi Pending</a>
						</li>
						<li>
							<a href="sales_transactions.php">Cari Transaksi</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">Transaksi Pembelian</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Transaksi Pembelian</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="buy_transactions.php?module=trx&act=add">Tambah Transaksi</a>
						</li>
						<li>
							<a href="buy_transactions.php">Cari Transaksi</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">Retur Produk</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Retur Produk</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="retur_transactions.php?module=trx&act=add">Tambah Retur</a>
						</li>
						<li>
							<a href="retur_transactions.php">Cari Retur</a>
						</li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#">Refund</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Refund</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="refunds.php?module=refund&act=add">Tambah Refund</a>
						</li>
						<li>
							<a href="refunds.php?module=refund&act=search">Cari Refund</a>
						</li>
					</ul>
				</div>
			</li>	
			<li>
				<a href="#">Master Biaya</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Master Biaya</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="accounts.php">Akun Biaya</a>
						</li>
						<li>
							<a href="funds.php">Pengeluaran Biaya</a>
						</li>
						<li>
							<a href="funds.php?module=fund&act=search">Cari Pengeluaran Biaya</a>
						</li>
					</ul>
				</div>
			</li>	
			<li>
				<a href="#">Stock Opname</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Stock Opname</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="stock_opname.php">Tambah Stock Opname</a>
						</li>
						<li>
							<a href="stock_opname.php?module=stock&act=search">Pencarian Stock Opname</a>
						</li>
						<li>
							<a href="stock_product.php">Cetak Produk</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li><a href="barcodes.php">Cetak Barcode</a></li>
			
			<li>
				<a href="debts.php">Kartu Hutang</a>
			</li>
			<li>
				<a href="receivables.php">Kartu Piutang</a>
			</li>
			<li>
				<a href="#">Laporan</a>
				<div class="mp-level">
					<h2 class="icon icon-world">Laporan</h2>
					<a class="mp-back" href="#">back</a>
					<ul>
						<li>
							<a href="order_reports.php">Laporan Pendapatan</a>
						</li>
						<li>
							<a href="fund_reports.php">Laporan Pengeluaran</a>
						</li>
						<li>
							<a href="profit_reports.php">Laba dan Proyeksi Kerugian</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li><a href="change_password.php">Ubah Password</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
			
	</div>
</nav>
<!-- /mp-menu -->

<div class="scroller">
	<div class="scroller-inner">
		<div style="padding-left: 18px; padding-top: 10px;">
			
			<table>
				<tr>
					<td width="160">
						<img src="images/outlets/logo.jpg" width="150">
					</td>
					<td>
						<span style="font-size: 18px; font-weight: bold;">
							CV. ASFA SOLUTION
						</span><br>
						<div style="padding-bottom: 10px;">Jl. Pegadaian No. 38 RT. 01 RW. 01 Arjawinangun - Cirebon 45162, Telp. (0231) - 358630</div>
					</td>
				</tr>
			</table>
			
		</div>
				
				<!-- Top Navigation -->
				<div class="codrops-top clearfix">
					<!--<a href="#" id="trigger" class="menu-trigger">Open Menu</a>-->
					<a class="codrops-icon codrops-icon-prev" href="#" id="trigger"><span>Open Menu</span></a> |
					<a href="home.php"><span>Home</span></a>
					<span class="right"><a class="codrops-icon codrops-icon-drop" href="logout.php"><span>Logout</span></a></span>
				</div>
				
				<p style="padding: 20px;">
				
					Hi, Selamat datang di aplikasi Point of Sales (POS) Web Base. <br>
					Anda dapat melakukan pengolahan data outlet melalui menu yang dapat Anda klik pada pojok kiri atas (Open Menu).
					
				</p>
			</div><!-- /scroller-inner -->
		</div><!-- /scroller -->

	</div><!-- /pusher -->
</div><!-- /container -->

	<script src="design/js/classie.js"></script>
	<script src="design/js/mlpushmenu.js"></script>
	<script>
		new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ), {
			type : 'cover'
		} );
	</script>
</body>
</html>