<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $content = 'content/dashboard';
        $data = array(
            'content' => $content,

        );
        $this->load->view('home/app',$data);
    }

    public function services()
    {
        $content = 'content/services';
        $data = array(
            'content' => $content,

        );
        $this->load->view('home/app',$data);
    }

    public function about()
    {
        $content = 'content/about';
        $data = array(
            'content' => $content,

        );
        $this->load->view('home/app',$data);

    }

    public function contact()
    {
        $content = 'content/contact';
        $data = array(
            'content' => $content,

        );
        $this->load->view('home/app',$data);

    }

}
