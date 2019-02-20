

<?php
$connect = mysqli_connect("localhost", "root", "root", "cinefa");

if(isset($_POST["query"]))
{
	$movie_maj = ucfirst($_POST["query"]);
	$movie_min = $_POST["query"];

	$search_maj = mysqli_real_escape_string($connect, $movie_maj);
	$search_min = mysqli_real_escape_string($connect, $movie_min);

	$query = "SELECT * FROM MOVIES WHERE TITLE LIKE '%".$search_maj."%' OR '%".$search_min."%'";
}
else
{
	$query = "SELECT *, DATE_FORMAT(release_date, '%d.%m.%Y') AS date FROM MOVIES";
}
$result = mysqli_query($connect, $query);
	while($movie = mysqli_fetch_array($result))
	{
		echo '
<div class="col-lg-3 col-md-6 mb-4">
<div class="card h-100">
<img class="card-img-top" src="' . $movie['liens_mov'] . '" height="325vh" alt="">
	<div class="card-body">
	<div class="card-title">' . $movie["title"] .'</div>
	<p class="card-text">Sortie le : '. $movie['release_date'] .'</p>
	</div>
	<div class="card-footer">
	<a href="movie_detail.php?idOfMovie='. $movie['id_movie'] .'" class="btn btn-primary">En savoir plus</a>
	</div>
</div>
</div>';
	}

?>