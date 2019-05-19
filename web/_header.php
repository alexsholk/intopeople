<?php

$selected = $selected ?? null;
$lang = $lang ?? 'nl';

?>
<div class="header">
    <div class="main-wrap">
        <a class="logo" href="/"></a>
        <nav class="main-menu">
            <a href="#"<?= $selected == 1 ? ' class="active"' : '' ?>>Over Ons</a>
            <a href="#"<?= $selected == 2 ? ' class="active"' : '' ?>>Nearshore Development</a>
            <a href="#"<?= $selected == 3 ? ' class="active"' : '' ?>>Payrolling</a>
            <a href="#"<?= $selected == 4 ? ' class="active"' : '' ?>>Detachering</a>
            <a href="#" class="contact<?= $selected == 5 ? ' active' : '' ?>">Contact</a>
        </nav>
        <a href="#" class="lang lang-<?= $lang ?>"></a>
        <div class="top-text">
            <div class="sub-menu">
                <a href="#">Schrijf je in</a>
                <a href="#">Voor onze e-nieuwsbrief</a>
            </div>
        </div>
        <div class="middle-text">
            <h1>
                projectcoördinatie, consultancy
                en begeleiding van nearshore activiteiten
            </h1>
        </div>
        <div class="bottom-text">
            <p>Lees meer over onze ervaring in volgende richtingen:</p>
            <div class="sub-menu">
                <a href="#"></a>
            </div>
        </div>
    </div>
</div>