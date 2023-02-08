<?php
if (isset($_POST['Pilih'])) {
echo "Game Kesukaanmu adalah :<br>";
if (isset($_POST['game01'])) {
echo "+ " . $_POST['game01'] . "<br>";
}
if (isset($_POST['game02'])) {
echo "+ " . $_POST['game02'] . "<br>";
}
if (isset($_POST['game03'])) {
echo "+ " . $_POST['game03'] . "<br>";
}
if (isset($_POST['game04'])) {
echo "+ " . $_POST['game04'] . "<br>";
}
}
?>