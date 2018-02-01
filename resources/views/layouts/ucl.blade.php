@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="col-md-9">
<h2>UEFA Champions League</h2>
<table class="table table-striped">
<thead>
<tr>
<th id="match"><a href="">Matches</a></th>
<th id="news"><a href="">News</a></th>
<th><a href="{{url('/standing')}}">Standing</a></th>
</tr>
</thead>
<tbody>
	
</tbody>
</table>
</div>
</body>
</html>

@endsection