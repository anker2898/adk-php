<?php

class Parameter extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->view->rows = [];
        $this->view->data = null;
        $this->view->dataRoles = [];
        $this->view->roles = [];
        $this->view->message = "";
        $this->view->messageHeader = "";
        $this->view->url = "";
        $this->view->title = "Gestión de usuario";
        $this->view->subtitle = "El siguiente mantenimiento se puede gestionar a los usuarios que utilizarán el sistema.";
    }

    public function render()
    {
        $this->view->rows = $this->model->get();
        $this->view->render('parameter/index');
    }

}
