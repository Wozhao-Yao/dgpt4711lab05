<?php
namespace App\Controllers;

class Travel extends BaseController
{
    public function index()
    {
        // connect to the model
    $places = new \App\Models\Places();
        // retrieve all the records
    $records = $places->findAll();
    $view = \Config\Services::renderer();
    
    $table = new \CodeIgniter\View\Table();
       
    $parser = \Config\Services::parser();
        // tell it about the substitions
    //return $parser->setData(['records' => $records])
        // and have it render the template with those
    //->render('placeslist');
    $table->setHeading('ID', 'Name', 'Description');
    //add table row
    $table->addRow(['1', 'HongKong', 'Southern']);
    $table->addRow(['2', 'Macau', 'Southern']);
    $table->addRow(['3', 'Thailand', 'Thailand']);
    $content =  $table->generate();
    
    $output = $view->render('top') .
        $view->render('placeslist') .
        $view->render('bottom');
    return $output;
    }
    public function showme($id)
    {
        // connect to the model
      $places = new \App\Models\Places();
        // retrieve all the records
      $record = $places->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
      return $parser->setData($record)
      // and have it render the template with those
      ->render('oneplace');
    }
}