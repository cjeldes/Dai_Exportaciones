<?php

class Transaccion {

    private $nidacceso;
    private $sdescripcion;
    private $snomtabla;
    private $saccion;

    function __construct($nidacceso, $sdescripcion, $snomtabla, $saccion) {
        $this->nidacceso = $nidacceso;
        $this->sdescripcion = $sdescripcion;
        $this->snomtabla = $snomtabla;
        $this->saccion = $saccion;
    }

    function Ingreso() {
        $db = dbconnect();
        /* Definicion del query que permitira actualizar la clave */
        $sqlins = "insert into LOGTRANSACCIONES(IDACCESO,NOMTABLA,ACCION,DESCRIPCION) 
                    values(:id,:nomtabla,:accion,:descripcion)";

        /* Preparación SQL */
        $querysins = $db->prepare($sqlins);

        /* Asignación de parametros utilizando bindparam */
        $querysins->bindParam(':id', $this->nidacceso);
        $querysins->bindParam(':nomtabla', $this->snomtabla);
        $querysins->bindParam(':accion', $this->saccion);
        $querysins->bindParam(':descripcion', $this->sdescripcion);

        $valaux = $querysins->execute();

        return $valaux;
    }

    function Elimina($id) {

        $db = dbconnect();

        /* Definici�n del query que permitira eliminar un registro */
        $sqldel = "delete from LOGTRANSACCIONES where IDLOGTRANSACCIONES=:id";

        /* Preparaci�n SQL */
        $querydel = $db->prepare($sqldel);

        $querydel->bindParam(':id', $id);

        $valaux = $querydel->execute();

        return $valaux;
    }

    function Actualiza($snewpwd) {
        $db = dbconnect();
        $valaux = $querysel->execute();

        return $valaux;
    }

}
?>

