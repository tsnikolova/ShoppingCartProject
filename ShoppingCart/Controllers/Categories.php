<?php
namespace Controllers;
use Models\Repositories\Data;
class Categories extends BaseController
{
    // "/categories/product/{$product}"
    public function product() {
        $product = $this->input->get(0, 'string');
        $this->saveHistoryPath(0, $product);
        $categories = Data::categories()->getCategoryByGrade($product);
        $data = array(
            'categories' => $categories,
            'product' => $product
        );
        $this->view->display('layouts.index', $data);
    }
}