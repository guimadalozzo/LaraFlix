<!DOCTYPE html>
<html>
<head>
	<title>Atores</title>
</head>
<body>
	<h1>Atores</h1>
	<ul>
		
		@foreach($atores as $ator)
			<li>{{ $ator->nome }}</li>
			<li>{{ $ator->dt_nascimento	}}</li>
			<br>
		@endforeach
	</ul>
</body>
</html>


