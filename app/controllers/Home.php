<?php 

class Home extends Controller{
    private $usermodel;
    public function __construct()
    {
        $this->usermodel = $this->model("UserModel");
    }
    public function index($data=[])
    {
        $data = $this->usermodel->getAllUser();
        $this->view("home/index",$data);
    }
}