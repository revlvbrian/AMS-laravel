<?php

@include('lib')

deleteById($_GET['asset_id']);

header("Location: edit-asset.php");
exit();
?>