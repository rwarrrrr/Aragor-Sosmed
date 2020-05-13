<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="{{url('assets/img/ara.png')}}">
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/tambah_game.css')}}">
	<title>Tambah Game</title>
</head>
<body>
	<div class="card">
		<div class="atas">
			<h1>Tambah Game</h1>
		</div>
			<form method="post" action="{{url('/tambahgame')}}" enctype="multipart/form-data">
					{{ csrf_field() }}
				<table border="0" cellspacing="20px" cellpadding="3px">
					<tr>
						<td>
							Nama Game :
						</td>
						<td>
							<input type="text" name="nama" required="">
						</td>
					</tr>
					<tr>
						<td>
							File Game :
						</td>
						<td>
							<input type="file" name="game" required="">
						</td>
					</tr>
					<tr>
						<td>
							Gambar :
						</td>
						<td>
							<input type="file" name="gambar" required="">
						</td>
					</tr>
				</table>
				<center>
					<input type="submit" name="submit">
				</center>
			</form>
</div>
</body>
</html>