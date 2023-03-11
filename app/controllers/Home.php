<?php

class Home extends Controller
{
    public function index()
    {
        //$users = new User();
        //$users->insert($data);

        $data['title'] = "Home";

        $this->view('home', $data);
    }
}
