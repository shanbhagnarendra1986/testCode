<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Myinfo extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
//	 uid, reg_date, email,first_name,last_name,mobile,address,city,country,state,pincode,dob,cor_id,points_rank,mis_rank,cha_rank,status
	public function index()
	{   
		$this->load->model('myinfo_model');
		$this->load->model('general');
        if($this->input->post('contact_info')){
	    $update_data['uid']=1; // this is to be taken from session later as of now hard coded
	    $update_data['first_name']=$this->input->post('first_name');
		$update_data['last_name']=$this->input->post('last_name');
		$update_data['mobile']=$this->input->post('mobile');
		$update_data['address']=$this->input->post('address');
		$update_data['city']=$this->input->post('city');
		$update_data['country']=$this->input->post('country');
		$update_data['state']=$this->input->post('state');
	    $update_data['pincode']=$this->input->post('pincode');
	    $this->myinfo_model->updateUserContactInfo($update_data);
	    redirect('myinfo');

	    }
	
	//personal details
	    if($this->input->post('personal_info')){
	    $update_data['uid']=1; // this is to be taken from session later as of now hard coded
	    $update_data['date']=$this->input->post('date');
		$update_data['month']=$this->input->post('month');
	    $update_data['year']=$this->input->post('year');
		$update_data['weight']=$this->input->post('weight');
		$update_data['height']=$this->input->post('height');
  	    $this->myinfo_model->updateUserpersonalInfo($update_data);
	      	
	    }
	
		
		$user_info=$this->myinfo_model->get_info(1); //  uid is to be taken from session later as of now hard coded
        foreach($user_info as $uinfo){
		$data['first_name']=$uinfo->first_name;
		$data['last_name']=$uinfo->last_name;
		$data['reg_date']=$uinfo->reg_date;
		$data['mobile']=$uinfo->mobile;
		$data['address']=$uinfo->address;
		$data['city']=$uinfo->city;
		$data['country_sel']=$uinfo->country;
		$data['state_sel']=$uinfo->state;
	    $data['pincode']=$uinfo->pincode;
		$data['dob']=$uinfo->dob;
		$data['cor_id']=$uinfo->cor_id;
		$data['points_rank']=$uinfo->state;
		$data['mis_rank']=$uinfo->state;
		$data['cha_rank']=$uinfo->state;
		$data['status']=$uinfo->state;
		$data['dob']=$uinfo->dob;
		}
		$country=$this->general->get_country();
		$states=$this->general->get_country_state($data['country_sel']);
		//print_r($country);  
	    $data['country_list']=$country;
		$data['state_list']=$states;
		
	//personal details
		$dobArray=explode('-',$data['dob']); 
		
		$day=$this->general->buildDayDropdown("date",$dobArray[2]);
        $data['dob_dropdown_day'] = $day;
		$month=$this->general->buildMonthDropdown("month",$dobArray[1]);
		$data['dob_dropdown_month'] = $month; 
		$year=$this->general->buildYearDropdown("year",$dobArray[0]);
        $data['dob_dropdown_year'] = $year;
        $personal_info=$this->myinfo_model->employee_personalInfo(1);
		foreach($personal_info as $pinfo){
		$data['weight']=$pinfo->weight;
		$data['height']=$pinfo->height;
		}
		$this->load->helper('url');
		$this->load->view('myinfo',$data);
    //print_r($this->input);
		
	}
}

/* End of file welcome.php 
/* Location: ./application/controllers/welcome.php */