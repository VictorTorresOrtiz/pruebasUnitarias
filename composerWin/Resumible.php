<?php 


interface Resumible
{
    //ya no hace falta que las clases hijas de Dulcen tengan que implementar el muestraResumen
        
    /**
     * muestraResumen
     *
     * @return void
     */
    public function muestraResumen(): void;
}

?>
