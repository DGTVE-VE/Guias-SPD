<?php

interface FeedBackBiblioDAO{
    public function load ($id);
    public function queryAll ();
    public function insert ($feedback);
    
}