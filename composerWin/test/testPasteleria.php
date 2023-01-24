<?php

use PHPUnit\Framework\TestCase;
include_once ('./composerWin/Pasteleria.php');

class testPasteleria extends TestCase {
    public function test(){
        $pastel = new Pasteleria("KKL");

        $this->assertSame("KKL", $pastel->getNombre());
        $this->assertNotSame("KK2323L", $pastel->getNombre());

    }

}
    
    
?>