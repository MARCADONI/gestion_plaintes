<?php

use App\Models\Plainte;

function code($name)
{
    $nom = strtoupper(substr($name, 0, 3));
    $nombre = rand(0, 99999);
    switch (strlen($nombre)) {
        case 1:
            $password = $nom . '0000' . $nombre;
            break;
        case 2:
            $password = $nom . '000' . $nombre;
            break;
        case 3:
            $password = $nom . '00' . $nombre;
            break;
        case 4:
            $password = $nom . '0' . $nombre;
            break;
        case 5:
            $password = $nom . $nombre;
            break;
    }
    return $password;
}
function numrp()
{
    $lastPlainte = Plainte::all()->last();
    if ($lastPlainte != null) {
        $num = $lastPlainte->numéro_rp;
        $num = substr($num, 0, 3);
        $num = $num + 1;
        switch (strlen($num)) {
            case 1:
                $num = '00' . $num;
                break;

            case 2:
                $num = '0' . $num;
                break;
        }
        return $num . '/' . date('Y');
    } else {
        return '001/' . date('Y');
    }
}
