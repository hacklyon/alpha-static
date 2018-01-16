<?php

$loc = "https://drive.google.com/uc?authuser=0&id=1a5jDaZkpavE0JL3dbl_VEFxd2ET97Zx9";

if (isset($_GET['download'])) $loc = $loc . "&export=download";

die($loc);
header("Location: " . $loc);

?>