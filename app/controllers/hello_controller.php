<?php
class HelloController extends AppController
{
    public function beforeFilter()
    {
        die('111');
    }
    
    public function index()
    {
        $message = Hello::getMessage();
        $this->set(get_defined_vars());
    }
}
