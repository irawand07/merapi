<?php
include "koneksi.php";

// Select all the rows in the markers table
$query = "select * from merapi WHERE 1";
$result = mysqli_query($kon,$query);
if (!$result) {
  die('Invalid query: ' . mysqli_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<penanda>';

// Iterate through the rows, printing XML nodes for each
while ($row = mysqli_fetch_assoc($result))
{
  // ADD TO XML DOCUMENT NODE+
  echo '<posisi ';
  echo 'nama="' . ($row['nama']) . '" ';
  echo 'alamat="' . ($row['alamat']) . '" ';
	echo 'daya="' . $row['dayatampung'] . '" ';
   echo 'lintang="' . $row['lintang'] . '" ';
  echo 'bujur="' . $row['bujur'] . '" ';
  echo '/>';
}
// End XML file
echo '</penanda>';
?>