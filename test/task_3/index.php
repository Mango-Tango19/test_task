<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Table</title>
</head>
<body>

<?php

require_once('open_connection_database.php');
$conn = OpenCon();

$num = 20;

$page = $_GET['page'];
$page = intval($page);


$sql = "SELECT * FROM test";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

$total_pages = intdiv($rows,$num);

if(empty($page) or $page < 0) $page = 1;
  if($page > $total_pages) $page = $total_pages;

$start = $page * $num - $num;

$res = mysqli_query($conn, "SELECT * FROM test LIMIT $start, $num");


while ( $postrow[] = mysqli_fetch_array($res))

echo "<table>";

for ($i = 0; $i < $num; $i++) {
echo "<tr>
        <td>".$postrow[$i]['id']."</td>
        <td>".$postrow[$i]['name']."</td>
        <td>".$postrow[$i]['value1']."</td>
        <td>".$postrow[$i]['value2']."</td>
        <td>".$postrow[$i]['value3']."</td>
    </tr>";
}
echo "</table>";

if ($page != 1) $first_page = '<a href= .?page=1><<</a><a href= .?page='. ($page - 1) .'><</a> ';

if ($page != $total_pages) $next_page = ' <a href= .?page='. ($page + 1) .'>></a><a href= .?page=' .$total_pages. '>>></a>';

if($page - 2 > 0) $page_next_left = ' <a href= .?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page_prev_left = '<a href= .?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';
if($page + 2 <= $total_pages) $page_next_right = ' | <a href= .?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total_pages) $page_prev_right = ' | <a href= .?page='. ($page + 1) .'>'. ($page + 1) .'</a>';

echo $first_page.$page_next_left.$page_prev_left.'<b>'.$page.'</b>'.$page_prev_right.$page_next_right.$next_page;

?>

</body>
</html>
