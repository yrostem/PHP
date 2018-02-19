<form method="POST">
    <select name="dieren[]" multiple>
        <option name="beer">Beer</option>
        <option name="leeuw">Leeuw</option>
        <option name="hond">Hond</option>
        <option name="haai">Haai</option>
        <option name="meeuw">meeuw</option>
    </select>
    <button name="submit">Kijk</button>
</form>
<?php
foreach ($_POST['dieren'] as $dieren) {
	if (isset($dieren)){
    if ($dieren == "Beer"){
        echo "<img src='https://www.wnf.nl/upload_mm/a/3/a/5780_fullimage_bruine_beer_115248_sanchez___lopez_1_435x292.jpg'>";
    }
    elseif ($dieren == "Leeuw"){
        echo "<img src='https://media.nu.nl/m/v6hxka2a9tzr_wd640.jpeg'>";
    }
    elseif ($dieren == "Hond"){
        echo "<img src='https://dierendokterscom-dierendokters487.netdna-ssl.com/images/1.layout_dieren/hoe_doe_ik_dat_hond.jpg'>";
    }
    elseif ($dieren == "Haai"){
        echo "<img src='https://www.natgeojunior.nl/wp-content/uploads/2017/07/witte_haai2.jpg'>";
    }
    elseif ($dieren == "meeuw"){
        echo "<img src='https://upload.wikimedia.org/wikipedia/commons/6/60/Larus_portrait.jpg'>";
    }
}
}
?>