<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;
class Mouvement extends Model
{
    use HasFactory;

    public static function getALL()
    {

        $sql = 'SELECT * FROM data_Mouvements';
        $resultat = Connection::connection($sql);
        $resultat->execute();
        return $resultat->fetchAll(PDO::FETCH_OBJ);
    }

    public static function getReferemce()
    {

        $sql = 'SELECT DISTINCT ref_mvt FROM data_Mouvements';
        $resultat = Connection::connection($sql);
        $resultat->execute();
        return $resultat->fetchAll(PDO::FETCH_OBJ);

    }

    public static function getByReference($ref)
    {
        $sql = "SELECT * FROM data_Mouvements where data_Mouvements.ref_mvt='$ref'";
        $resultat = Connection::connection($sql);
        $resultat->execute();
        return $resultat->fetchAll(PDO::FETCH_OBJ);
    }
}
