<?php

interface FeedBackBiblioMSDAO{
    public function load ($id);
    public function queryAll ();
    public function insert ($feedback);
    
}