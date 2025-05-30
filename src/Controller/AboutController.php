<?php

namespace Agostech\CrudMvcPoc\Controller;

class AboutController extends BaseController
{
    public function index()
    {
        $this->render('about', [
            'message' => 'What is this? ABout'
        ]);
    }
}
