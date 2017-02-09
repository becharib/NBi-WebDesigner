<?php
class Inscrit extends TableObject {
    static public $tableName = "inscrits";
    static public $keyFieldsNames = array('login');
    public $hasAutoIncrementedKey = false;
}
?>
