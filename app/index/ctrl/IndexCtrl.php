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
        
        $this->make()->getLogger()->log('6666666666666666666666666666666');
        //$this->redirect(['admin/index/index'], ['dsds&'=>3, 'dddd'=>'50%','name1'=>'suyaqi'], ['name'=>'su=yaqi']);
        /*return $this->render('index', [
            'name'=>'su',
            'ad'=>['name'=>'阿里云广告']
        ], [
            'title'=>'呵呵',
            'ad'=>['name'=>'鳄鱼鳄鱼男装']
        ]);*/
    }
    
    
    
}