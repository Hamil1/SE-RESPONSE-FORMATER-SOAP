<?php

namespace SeFormater;
class GetVehiculoMotor{

    public function seFormater($firstLevel, $objetoAsegurado, $vigencia){
        
        $object = (object) array_change_key_case((array) $firstLevel, CASE_LOWER);
        
        if(isset($object->vigencia)){
            unset($object->vigencia);
        }

        if(isset($object->objetoasegurado)){
            unset($object->objetoasegurado);
        }

        if(isset($object->cobertura)){
            unset($object->cobertura);
        }

        $objetoAseguradoFormated = array_change_key_case(array_combine(array_keys((array) $objetoAsegurado), array_values((array) $objetoAsegurado)), CASE_LOWER);
        $vigenciaFormated = array_change_key_case(array_combine(array_keys((array) $vigencia), array_values((array) $vigencia)), CASE_LOWER);

        $vigenciaFormated['finvigencia'] = date("d/m/Y", strtotime($vigenciaFormated['finvigencia']));
        $vigenciaFormated['iniciovigencia'] = date("d/m/Y", strtotime($vigenciaFormated['iniciovigencia']));

        $objectResponse = (object) array_merge((array) $object, $objetoAseguradoFormated, $vigenciaFormated);

        return $objectResponse;

    }
}

?>