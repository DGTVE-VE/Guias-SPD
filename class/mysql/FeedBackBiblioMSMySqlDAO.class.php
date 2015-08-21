<?php

class FeedBackBiblioMSMySqlDAO implements FeedBackBiblioMSDAO{
    public function insert($feedback) {
        $sql = 'INSERT INTO feedback_biblio_ms (id_biblio, calificacion) '
                . 'VALUES (?, ?)';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($feedback->idBiblio);
        $sqlQuery->setNumber($feedback->calificacion);

        $id = $this->executeInsert($sqlQuery);
        $feedback->id = $id;
        return $id;
    }

    public function load($id) {
        $sql = 'SELECT * FROM feedback_biblio_ms WHERE NUMERO = ?';
        $sqlQuery = new SqlQuery($sql);
        $sqlQuery->setNumber($id);
        return $this->getRow($sqlQuery);
    }

    public function queryAll() {
        $sql = 'SELECT * FROM feedback_biblio_ms';
        $sqlQuery = new SqlQuery($sql);        
        return $this->getList($sqlQuery);
    }
    
    /**
     * Read row
     *
     * @return BibliografiaMySql 
     */
    protected function readRow($row) {
        $feedback = new FeedBackBiblio();
        $feedback->id = $row['id'];
        $feedback->idBiblio = $row['id_biblio'];
        $feedback->calificacion = $row['calificacion'];
    }

    protected function getList($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        $ret = array();
        for ($i = 0; $i < count($tab); $i++) {
            $ret[$i] = $this->readRow($tab[$i]);
        }
        return $ret;
    }

    /**
     * Get row
     *
     * @return BibliografiaMySql 
     */
    protected function getRow($sqlQuery) {
        $tab = QueryExecutor::execute($sqlQuery);
        if (count($tab) == 0) {
            return null;
        }
        return $this->readRow($tab[0]);
    }

    /**
     * Execute sql query
     */
    protected function execute($sqlQuery) {
        return QueryExecutor::execute($sqlQuery);
    }

    /**
     * Execute sql query
     */
    protected function executeUpdate($sqlQuery) {
        return QueryExecutor::executeUpdate($sqlQuery);
    }

    /**
     * Query for one row and one column
     */
    protected function querySingleResult($sqlQuery) {
        return QueryExecutor::queryForString($sqlQuery);
    }

    /**
     * Insert row to table
     */
    protected function executeInsert($sqlQuery) {
        return QueryExecutor::executeInsert($sqlQuery);
    }

}