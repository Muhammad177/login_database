<!DOCTYPE html>
<html>
<head>

</head>
<body>
 

	
	<br/>
	<br/>
 
	@foreach($profile as $p)
	<form action="/update" method="post">
		{{ csrf_field() }}
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Email <input type="text" required="required" name="email" value="{{ $p->email }}"> <br/>
		No.Hp <input type="number" required="required" name="no_hp" value="{{ $p->no_hp }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>