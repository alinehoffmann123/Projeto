<?php

namespace App\Model;

use App\Db\Connection;

abstract class ModelPadrao
{
    abstract function getTable();

    function getAll()
    {
        $oconnection = Connection::get();
        $sselect = 'select * from '.$this->getTable();
        $oresult = pg_query($oconnection, $sselect);
        $adata = [];
        
        while ($aresultado = pg_fetch_assoc($oresult)){
            $adata[] = $aresultado;
        }
                return $adata;
    }

    protected function insert($aValues)
    {
        $oConnection = Connection::get();

        $sSql = 'insert into ' . $this->getTable() . ' (' . implode(',', array_keys($aValues)) . ') 
        values (' . implode(',', array_values($aValues)) . ') ';

        return pg_query($oConnection, $sSql);
               
    }

    protected function delete($aWhere)
    {
        $oConnection = Connection::get();
        $sSql='
                delete from '. $this->getTable().' Where 1=1
                    ';
        foreach ($aWhere as $sNomeColuna => $sValor){
            $sSql .= ' and '.$sNomeColuna.' = '.$sValor;
        }
        return pg_query ($oConnection, $sSql);
    }

    protected function update($aValues, $aWhere)
    {
        // Implementar
    }

    /**
     * Retorna o valor pronto para ser 
     * adicionado no comando SQL
     * @param mixed $xValue
     * @return mixed
     */
    protected function getBdValue($xValue)
    {
        if (!empty($xValue) || !is_null($xValue)) {
            if (is_string($xValue)) {
                return '\'' . pg_escape_string($xValue) . '\'';
            }

            return $xValue;
        }

        return 'NULL';
    }
}
