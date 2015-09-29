<?php
namespace Controllers;
use GFramework\App;
use GFramework\Validation;
use GFramework\ValidationRules;
use GFramework\View;
use Models\Repositories\Data;
class Index extends BaseController {
    // "/"
    public function index(){
        $this->saveHistoryPath(0, 'Всички продукти');
        $categories = Data::categories()->all();
        $data = array(
            'categories' => $categories,
            'product' => 'all'
        );
        $this->view->display('layouts.index', $data);
    }
}