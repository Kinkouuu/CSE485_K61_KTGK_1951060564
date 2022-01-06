<?php
include('../backend/config.php');
$sql = "DELETE FROM monhoc WHERE bd_id='" . $_GET["bd_id"] . "'";
if (mysqli_query($conn, $sql)) {
    Header('location: http://localhost/CSE485_K61_KTGK_1951060564/');
} else {
    Header('location: http://localhost/CSE485_K61_KTGK_1951060564/error.php');
}
mysqli_close($conn);

?>