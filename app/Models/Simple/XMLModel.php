<?php
namespace App\Models\Simple;

/**
 * SimpleModel persisted as XML document
 *  
 */
class XMLModel extends SimpleModel
{

	/**
	 * Constructor.
	 * @param string $origin Filename of the CSV file
	 * @param string $keyField  Name of the primary key field
	 * @param string $entity	Entity name meaningful to the persistence
	 */
	function __construct($origin = null, $keyField = 'id', $entity = null)
	{
		parent::__construct($origin, $keyField, $entity);

		// and populate the collection
		$this->load();
	}

	/**
	 * Load the collection state from an XML document
	 */
	protected function load()
	{
<<<<<<< HEAD

		
		if (($tasks = simplexml_load_file($this->_origin)) !== FALSE)
=======
		if (file_exists(realpath($this->origin)))
>>>>>>> master
		{

			$xml = simplexml_load_file(realpath($this->origin));

			$first = true;
			foreach ($xml->children() as $child)
			{
				$record = new \stdClass();
				foreach ($child->children() as $kid)
				{
					$key = $kid->getName();
					$value = (string) $kid;
					$record->$key = $value;
					if ($key == $this->keyField)
						$id = $value;
					if ($first)
						$this->fields[] = $key;
				}
				$this->data[$id] = $record;
				$first = false;
			}
		}

<<<<<<< HEAD
		// rebuild the keys table
		$this->reindex();

		
		if (file_exists(realpath($this->_origin))) {

		    $this->xml = simplexml_load_file(realpath($this->_origin));
		    if ($this->xml === false) {
			      // error so redirect or handle error
			      header('location: /404.php');
			      exit;
			}

		    $xmlarray =$this->xml;

		    //if it is empty; 
		    if(empty($xmlarray)) {
		    	return;
		    }

		    //get all xmlonjects into $xmlcontent
		    $rootkey = key($xmlarray);
		    $xmlcontent = (object)$xmlarray->$rootkey;

		    $keyfieldh = array();
		    $first = true;

		    //if it is empty; 
		    if(empty($xmlcontent)) {
		    	return;
		    }

		    $dataindex = 1;
		    $first = true;
		    foreach ($xmlcontent as $oj) {
		    	if($first){
			    	foreach ($oj as $key => $value) {
			    		$keyfieldh[] = $key;	
			    		//var_dump((string)$value);
			    	}
			    	$this->_fields = $keyfieldh;
			    }
		    	$first = false; 

		    	//var_dump($oj->children());
		    	$one = new stdClass();

		    	//get objects one by one
		    	foreach ($oj as $key => $value) {
		    		$one->$key = (string)$value;
		    	}
		    	$this->_data[$dataindex++] =$one; 
		    }	


		 	//var_dump($this->_data);
		} else {
		    exit('Failed to open the xml file.');
		}

=======
>>>>>>> master
		// --------------------
		// rebuild the keys table
		$this->reindex();
	}

	/**
	 * Store the collection state s an XML document
	 */
	protected function store()
	{
<<<<<<< HEAD
		
		// rebuild the keys table
		$this->reindex();
		//---------------------
		
		if (($handle = fopen($this->_origin, "w")) !== FALSE)
		{
		
			fputcsv($handle, $this->_fields);
			foreach ($this->_data as $key => $record)
				fputcsv($handle, array_values((array) $record));
			fclose($handle);
		}
		// --------------------
		
		$xmlDoc = new DOMDocument( "1.0");
        $xmlDoc->preserveWhiteSpace = false;
        $xmlDoc->formatOutput = true;
        $data = $xmlDoc->createElement($this->xml->getName());
        foreach($this->_data as $key => $value)
        {
            $task  = $xmlDoc->createElement($this->xml->children()->getName());
            foreach ($value as $itemkey => $record ) {
                $item = $xmlDoc->createElement($itemkey, htmlspecialchars($record));
                $task->appendChild($item);
                }
                $data->appendChild($task);
            }
            $xmlDoc->appendChild($data);
            $xmlDoc->saveXML($xmlDoc);
            $xmlDoc->save($this->_origin);
		}
	}
=======
		$xmlDoc = new DOMDocument("1.0");
		$xmlDoc->preserveWhiteSpace = false;
		$xmlDoc->formatOutput = true;
		$data = $xmlDoc->createElement('root');
		foreach ($this->data as $key => $value)
		{
			$record = $xmlDoc->createElement('record');
			foreach ($value as $itemkey => $datum)
			{
				$item = $xmlDoc->createElement($itemkey, htmlspecialchars($datum));
				$record->appendChild($item);
			}
			$data->appendChild($record);
		}
		$xmlDoc->appendChild($data);
		$xmlDoc->save($this->origin);
		//echo $xmlDoc->saveXML();
	}

}
>>>>>>> master
