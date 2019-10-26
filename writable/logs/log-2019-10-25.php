<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-25 22:19:48 --> Call to undefined function App\Models\Simple\enpty()
#0 C:\Users\y9478\dgpt4711lab05\app\Models\Simple\XMLModel.php(18): App\Models\Simple\SimpleModel->__construct()
#1 C:\Users\y9478\dgpt4711lab05\app\Controllers\Travel.php(9): App\Models\Simple\XMLModel->__construct()
#2 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Travel->index()
#3 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Travel))
#4 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\y9478\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\y9478\\...')
#7 {main}
CRITICAL - 2019-10-25 22:20:00 --> Call to undefined function App\Models\Simple\enpty()
#0 C:\Users\y9478\dgpt4711lab05\app\Models\Simple\XMLModel.php(18): App\Models\Simple\SimpleModel->__construct()
#1 C:\Users\y9478\dgpt4711lab05\app\Controllers\Places.php(9): App\Models\Simple\XMLModel->__construct()
#2 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(844): App\Controllers\Places->index()
#3 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Places))
#4 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\y9478\dgpt4711lab05\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 C:\Users\y9478\dgpt4711lab05\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\y9478\\...')
#7 {main}
