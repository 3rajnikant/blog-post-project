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
<thead><tr><th id="match"><a href="">Matches</a></th><th id="news"><a href="">News</a></th><th><a href="{{url('/standing')}}">Standing</a></th></tr></thead>
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group A</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> Manchaster United</td><td>5</td><td>4</td><td>0</td><td>1</td><td>10</td><td>2</td><td>8</td><td>12</td></tr>
	<tr><td><b>2</b> FC Basel</td><td>5</td><td>3</td><td>0</td><td>2</td><td>9</td><td>5</td><td>4</td><td>9</td></tr>	
	<tr><td><b>3</b> CSKA Moscow</td><td>5</td><td>3</td><td>0</td><td>2</td><td>7</td><td>8</td><td>-1</td><td>9</td></tr>	
	<tr><td><b>4</b> Benfica</td><td>5</td><td>0</td><td>0</td><td>5</td><td>1</td><td>12</td><td>-11</td><td>0</td></tr>
</tbody>	
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group B</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> Paris Saint Germain</td><td>5</td><td>5</td><td>0</td><td>0</td><td>24</td><td>1</td><td>23</td><td>15</td></tr>
	<tr><td><b>2</b> FC Bayern</td><td>5</td><td>4</td><td>0</td><td>1</td><td>10</td><td>5</td><td>5</td><td>12</td></tr>	
	<tr><td><b>3</b> Celtic FC</td><td>5</td><td>1</td><td>0</td><td>4</td><td>5</td><td>17</td><td>-12</td><td>3</td></tr>	
	<tr><td><b>4</b> Anderlecht</td><td>5</td><td>0</td><td>0</td><td>5</td><td>1</td><td>17</td><td>-16</td><td>0</td></tr>
</tbody>	
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group C</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> Chelsea</td><td>5</td><td>4</td><td>0</td><td>1</td><td>10</td><td>2</td><td>8</td><td>12</td></tr>
	<tr><td><b>2</b> AS Roma</td><td>5</td><td>3</td><td>0</td><td>2</td><td>9</td><td>5</td><td>4</td><td>9</td></tr>	
	<tr><td><b>3</b> Atletico Madrid</td><td>5</td><td>3</td><td>0</td><td>2</td><td>7</td><td>8</td><td>-1</td><td>9</td></tr>	
	<tr><td><b>4</b> Qarabag FK</td><td>5</td><td>0</td><td>0</td><td>5</td><td>1</td><td>12</td><td>-11</td><td>0</td></tr>
</tbody>	
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group D</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> FC Barcelona</td><td>5</td><td>3</td><td>2</td><td>0</td><td>7</td><td>1</td><td>6</td><td>11</td></tr>
	<tr><td><b>2</b> Juventus</td><td>5</td><td>2</td><td>2</td><td>1</td><td>5</td><td>5</td><td>0</td><td>8</td></tr>	
	<tr><td><b>3</b> Sporting</td><td>5</td><td>2</td><td>1</td><td>2</td><td>8</td><td>7</td><td>1</td><td>7</td></tr>	
	<tr><td><b>4</b> Olympiacos</td><td>5</td><td>0</td><td>1</td><td>4</td><td>4</td><td>11</td><td>-7</td><td>1</td></tr>
</tbody>	
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group E</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> Liverpool</td><td>5</td><td>2</td><td>3</td><td>0</td><td>16</td><td>6</td><td>10</td><td>9</td></tr>
	<tr><td><b>2</b> Sevilla</td><td>5</td><td>2</td><td>2</td><td>1</td><td>11</td><td>11</td><td>0</td><td>8</td></tr>	
	<tr><td><b>3</b> Spartak Moskva</td><td>5</td><td>1</td><td>3</td><td>1</td><td>9</td><td>6</td><td>3</td><td>6</td></tr>	
	<tr><td><b>4</b> Maribor</td><td>5</td><td>0</td><td>2</td><td>3</td><td>2</td><td>15</td><td>-13</td><td>2</td></tr>
</tbody>	
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group F</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> Manchaster City</td><td>5</td><td>5</td><td>0</td><td>0</td><td>13</td><td>3</td><td>10</td><td>15</td></tr>
	<tr><td><b>2</b> Shakhtar Donetsk</td><td>5</td><td>3</td><td>0</td><td>2</td><td>7</td><td>8</td><td>-1</td><td>9</td></tr>	
	<tr><td><b>3</b> Napoli</td><td>5</td><td>2</td><td>0</td><td>3</td><td>10</td><td>9</td><td>1</td><td>6</td></tr>	
	<tr><td><b>4</b> Feyenoord</td><td>5</td><td>0</td><td>0</td><td>5</td><td>3</td><td>13</td><td>-10</td><td>0</td></tr>
</tbody>	
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group G</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> Besiktas</td><td>5</td><td>3</td><td>2</td><td>0</td><td>9</td><td>4</td><td>5</td><td>11</td></tr>
	<tr><td><b>2</b> Porto</td><td>5</td><td>2</td><td>1</td><td>2</td><td>10</td><td>8</td><td>2</td><td>7</td></tr>	
	<tr><td><b>3</b> RB Leipzig</td><td>5</td><td>2</td><td>1</td><td>2</td><td>9</td><td>9</td><td>0</td><td>7</td></tr>	
	<tr><td><b>4</b> Monaco</td><td>5</td><td>0</td><td>2</td><td>3</td><td>4</td><td>11</td><td>-7</td><td>2</td></tr>
</tbody>	
</table>
<table class="table table-striped">
<thead>
<tr><th><h4>Group H</h4></th><th>MP</th><th>W</th><th>D</th><th>L</th><th>GF</th><th>GA</th><th>GD</th><th>Pts</th></tr>
</thead>
<tbody>
	<tr><td><b>1</b> Tottenham</td><td>5</td><td>4</td><td>1</td><td>0</td><td>12</td><td>4</td><td>8</td><td>13</td></tr>
	<tr><td><b>2</b> Real Madrid</td><td>5</td><td>3</td><td>1</td><td>1</td><td>14</td><td>5</td><td>9</td><td>10</td></tr>	
	<tr><td><b>3</b> Dortmund</td><td>5</td><td>0</td><td>2</td><td>3</td><td>5</td><td>10</td><td>-5</td><td>2</td></tr>	
	<tr><td><b>4</b> Apoel Nicosia</td><td>5</td><td>0</td><td>2</td><td>3</td><td>2</td><td>14</td><td>-12</td><td>2</td></tr>
</tbody>	
</table>									
		
	
	
		
		
	
	
		
		
	


</div>
</body>
</html>
@endsection