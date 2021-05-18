<?php

namespace SeFormater;
class GetVehiculoMotor{

    protected function getVigencia($object){
        echo 'getVigencia';
    }

    protected function getObjetoAsegurado($object){
        echo 'getObjetoAsegurado';
    }

    protected function getCobertura($object){
        echo 'getCobertura';
    }

    protected function updateEachObjectToSingleLevel($object){
        echo 'updateEachObjectToSingleLevel';
    }

    public function seFormater($object){
        echo 'seFormater';
        $this->updateEachObjectToSingleLevel($object);
        $this->getCobertura($object);
        $this->getObjetoAsegurado($object);
        $this->getVigencia($object);
    }
}

?>