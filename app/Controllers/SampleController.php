<?php namespace App\Controllers;

use CesarV\Views\View;
use Symfony\Component\HttpFoundation\Response;

class SampleController 
{
    protected $views;
    
    public function __construct(View $views)
    {
        $this->views = $views;
    }
    
    public function getIndex()
    {
        return new Response($this->views->render('Sample', array('message' => 'Valar morghulis')));
    }
}