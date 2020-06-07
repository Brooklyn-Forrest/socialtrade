<html lang="en">

<?php
$upOne = dirname(__DIR__, 1);
include $upOne . "/nav.php";
?>
<link rel="stylesheet" type="text/css" href="\socialtrade\index.css">
<script src="\socialtrade\functions.js"></script>

<div id="main" style="background: black !important;">
    <hr>
    <div id="box-div">
        <h3>The Organizer</h3>
        <div id="inner-wrapper">
            <div style="width: 60px !important; float: left; vertical-align: top">
                <div><button class="tab active tablinks" onclick="showTab(event, 'Mood', 'tabcontent')">Mood</button></div>
                <div><button class="tab tablinks" onclick="showTab(event, 'Goals', 'tabcontent')">Goals</button></div>
                <div><button class="tab tablinks" onclick="showTab(event, 'Items', 'tabcontent')">Items</button></div>
            </div>
            <div class="dtab activet" id="Mood"><h4>Mood</h4></div>
            <div class="dtab" id="Goals"><h4>Goals</h4></div>
            <div class="dtab" id="Items"><h4>Items</h4></div>
        </div>
    </div>
</div>

</html>