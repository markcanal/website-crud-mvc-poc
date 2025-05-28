<?php

namespace Agostech\CrudMvcPoc\Controller;

class HomeController extends BaseController
{
    public function index()
    {
        $this->render('home', [
            'message' => 'Heloo layout na bago'
        ]);
    }
}
