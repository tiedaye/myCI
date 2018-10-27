<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
    public function login()
    {
        $this->load->view('login');
    }
    public function regist()
    {
        $this->load->view('regist');
//        $xx = $this->input->get("name");
//        echo $xx;

    }
    public function save()
    {
        $name = $this->input->post("username");
        $pwd1 = $this->input->post("pwd1");
        $pwd2 = $this->input->post("pwd2");
        $data = array(
            "name"=>$name
        );
        $flag = TRUE;
        if($name == ""){
            $data["name_error"] = "用户名不能为空";
            $flag = FALSE;
//            redirect("welcome/regist?name=zhang&age=12");
        }
        if($pwd1 != $pwd2 ){
            $data["pwd1_error"] = "两次密码不一致";
            $flag = FALSE;
            }
        if($pwd1 == "" ){
            $data["pwd2_error"] = "密码不能为空";
            $flag = FALSE;
        }
//        if($flag) {
//            echo "success";
//        }else{
//            $this->load->view("regist",$data);
//        }
        if(count($data) == 1) {
            $this->load->model("User_model");
            $row = $this->User_model->save($name,$pwd1);
            if($row > 0){
                echo "success";
            }else{
                echo "failed";
            }
        }else{
            $this->load->view("regist",$data);
        }
        }
    public function login_check(){
            $name = $this->input->post("username");
            $pwd = $this->input->post("password");
            $this->load->model("User_model");
            $row = $this->User_model->get_data_by_name($name,$pwd);
//            var_dump($row);
        //将用户信息存到session里面
        $this->session->set_userdata('user',$row);
            $this->load->view("welcome_message",array(
//                "user"=>$row
                   "age"=>13
            ));
    }

    }
