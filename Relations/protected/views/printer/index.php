<?php

echo '<b>Nazwa drukarki</b> ' . $printer->name . '</br>';
echo '<b>Pomieszczenie</b> ' . $printer->room->name . '</br>';
echo '<b>Tonery</b></br>';

foreach($printer->toner as $toner)
{
    echo $toner->name . '</br>';
}

echo '<b>Użytkownicy</b></br>';

foreach($printer->users as $user)
{
    echo $user->name . '</br>';
}

