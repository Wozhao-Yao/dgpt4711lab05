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
    foreach ($records as $key=>$value)
    {
        $table->addRow([$value->id, 'HongKong', 'Southern']);
    }
    
    $content =  $table->generate();
    
    
    $output = $view->render('top') .
        $content .
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