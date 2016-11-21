<?php
namespace app\index\ctrl;

use lying\base\Ctrl;

class IndexCtrl extends Ctrl
{
    public $layout = 'admin/main';
    
    protected function init()
    {
        
    }
    
    public function index()
    {
        $cookie = $this->make()->getCookie();
        var_dump($cookie);
        $_SESSION['cookie'] = serialize($cookie);
        
        //$this->redirect(['admin/index/index'], ['dsds&'=>3, 'dddd'=>'50%','name1'=>'suyaqi'], ['name'=>'su=yaqi']);
        return $this->render('index', [
            'name'=>'su',
            'ad'=>['name'=>'阿里云广告']
        ], [
            'title'=>'呵呵',
            'ad'=>['name'=>'鳄鱼鳄鱼男装']
        ]);
    }
    
    public function cookie()
    {
        var_dump(unserialize($_SESSION['cookie']));
    }
}