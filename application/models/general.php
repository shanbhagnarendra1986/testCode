<?php
Class General extends CI_Model
{
	function get_country($countryId="")
	{

		$this -> db -> select('*');
		$this -> db -> from('countries');
		$this -> db -> where('published = 1'); 
		if($countryId){
			$this -> db -> where('virtuemart_country_id	 = '."'".$countryId."'"); 

		}
		//$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	function get_country_state($countryId="",$stateId="")
	{

		$this -> db -> select('*');
		$this -> db -> from('country_states');
		$this -> db -> where('published = 1'); 
		if($countryId){
			$this -> db -> where('virtuemart_country_id	 = '."'".$countryId."'"); 

		}
		if($stateId){
			$this -> db -> where('virtuemart_state_id	 = '."'".$stateId."'"); 

		}
		//$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
	
	 function buildDayDropdown($name='',$value='')
    {  echo $value;
        $days=1;
		$day[]="Day";
        while ( $days <= '31'){
            $day[]=$days;$days++;
        }
        return form_dropdown($name, $day, $value);
    }
    function buildYearDropdown($name='',$value='')
    {        
        $years = range(1900, date("Y"));
        foreach($years as $year)
        {
            $year_list[$year] = $year;
        }    
        
        return form_dropdown($name, $year_list, $value);
    }
	 
    function buildMonthDropdown($name='',$value='')
    {
        $month=array(
            '00'=>"Month",
			'01'=>'January',
            '02'=>'February',
            '03'=>'March',
            '04'=>'April',
            '05'=>'May',
            '06'=>'June',
            '07'=>'July',
            '08'=>'August',
            '09'=>'September',
            '10'=>'October',
            '11'=>'November',
            '12'=>'December');
        return form_dropdown($name, $month, $value);
    }
	
	
	
	
	
}
?>