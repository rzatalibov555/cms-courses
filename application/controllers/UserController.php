<?php 

class UserController extends CI_controller
{
	public function index()
	{
		$this->load->view('user/index');
	}

    public function sign_in()
    {
        $this->load->view('user/sign-in');
    }

    public function sign_up()
    {
        $this->load->view('user/sign-up');
    }
	
//	public function single()
//	{
//		$this->load->view('user/single-page');
//	}

	public function contact()
	{
		$this->load->view('user/contact');
	}

    public function about()
    {
        $this->load->view('user/about');
    }

    public function error404()
    {
        $this->load->view('user/error');
    }

    public function blog()
    {
        $this->load->view('user/blog');
    }

    public function blog_single($id)
    {
        $this->load->view('user/blog-details');
    }

    public function course_single($id){
        $this->load->view('user/course-details');
    }

    public function instructor(){
        $data['all_teachers'] = $this->db->order_by('t_id','DESC')->get('items3')->result_array();
        $this->load->view('user/instructor',$data);
    }

    public function instructor_single($id){
        $data['single_teacher'] = $this->db->where('t_id',$id)->get('items3')->row_array();
        $this->load->view('user/instructor-details',$data);
    }












}




