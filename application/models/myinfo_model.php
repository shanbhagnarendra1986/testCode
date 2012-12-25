<?php
Class Myinfo_model extends CI_Model
{
	function get_info($userId)
	{

		$this -> db -> select('uid, reg_date, email,first_name,last_name,mobile,address,city,country,state,pincode,dob,cor_id,points_rank,mis_rank,cha_rank,status');
		$this -> db -> from('users');
		$this -> db -> where('uid = '."'".$userId."'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	function user_personalInfo($userId){
		$this -> db -> select('weight,height');
		$this -> db -> from('personal_detail');
		$this -> db -> where('uid = '."'".$userId."'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

        if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
   
   }
	function updateUserContactInfo($updateData){
	    $uid           =         $updateData['uid'];
	    //$email         =         $updateData['email'];
		$first_name    =         $updateData['first_name'];
		$last_name     =         $updateData['last_name'];
		$mobile        =         $updateData['mobile'];
		$address       =         $updateData['address'];
		$city          =         $updateData['city'];
		$country       =         $updateData['country'];
		$state         =         $updateData['state'];
		$pincode       =         $updateData['pincode'];
		$update_query="UPDATE users set first_name='".$first_name."',last_name='".$last_name."',mobile='".$mobile."',address='".$address."',city='".$city."',country='".$country."',state='".$state."',pincode='".$pincode."' where uid='".$uid."'";
		$query = $this->db->query($update_query);
		return $query;
		
	}

   	function updateUserpersonalInfo($updateData){
	     $uid   =  $updateData['uid'];
	    //$email         =         $updateData['email'];
		 $date    =         $updateData['date'];
		 $month     =         $updateData['month'];
		 $year        =   $updateData['year'];
	     $weight        =   $updateData['weight'];
		 $height        =   $updateData['height'];
        //$date = $_POST['fldYear'] . '-' . $_POST['fldMonth'] . '-' . $_POST['fldDay'];
		
		$dob = $year. '-' .$month. '-' .$date;
		 $update_query1="UPDATE users set dob='".$dob."' where uid='".$uid."'";
		$query1 = $this->db->query($update_query1);
		
	    $update_query2="UPDATE personal_detail set weight='".$weight."',height='".$height."'  where uid='".$uid."'";
		$query2 =$this->db->query($update_query2);
		
		return $query1." ".$query2;
		
	}
    function updateLifeHistory($updateData){
     $uid   =  $updateData['uid'];
	 $exercise=$updateData['exercise'];
	 $alcohol=$updateData['alcohol'];
	 $smoking=$updateData['smoking'];
	 $lif_entry_date=date('Y-m-d');
	   $update_query1="UPDATE life_history set lif_entry_date='".$lif_entry_date."',smoking='".$smoking."',alcohol='".$alcohol."',exercise='".$exercise."'  where uid='".$uid."'";
		$query1 = $this->db->query($update_query1);
	}	
	
	
		function user_lifeHistory($userId){
		$this -> db -> select('lif_entry_date,smoking,alcohol,exercise');
		$this -> db -> from('life_history');
		$this -> db -> where('uid = '."'".$userId."'"); 
		$this -> db -> limit(1);
		$query = $this -> db -> get();

        if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
   
   }

	
	
}
?>
