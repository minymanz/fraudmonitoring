<?php 
   Class user extends CI_Model {
	
      public function __construct() 
      { 
   		$this->db = $this->load->database('oracle', TRUE);
   		$this->db2 = $this->load->database('oracle2', TRUE);
      }

      function getcaseparam()
	  {
	  	$this->db->select('ID_PARAMETER, DESCRIPTION, AKTIF')
	  			 ->from('CASE_PARAMETER')
	  			 ->where('AKTIF','1');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearch()
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->order_by('KASUS.STATUS','ASC');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchnumber($telephone)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->like('PROFIL.TELEPHONE_NUMBER',$telephone)
	  			->order_by('KASUS.STATUS','ASC');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchnumbers($telephone, $status)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->like('PROFIL.TELEPHONE_NUMBER',$telephone)
	  			->where('KASUS.STATUS', $status);
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchdate($date, $enddate)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->where('{F}KASUS.CASE_TIME >=',"TO_DATE('$date','DD/MM/YYYY')", FALSE)
	  			->where('{F}KASUS.CASE_TIME <=',"TO_DATE('$enddate','DD/MM/YYYY')", FALSE)
	  			->order_by('KASUS.STATUS','ASC');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchdates($date, $enddate, $status)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->where('{F}KASUS.CASE_TIME >=',"TO_DATE('$date','DD/MM/YYYY')", FALSE)
	  			->where('{F}KASUS.CASE_TIME <=',"TO_DATE('$enddate','DD/MM/YYYY')", FALSE)
	  			->where('KASUS.STATUS', $status);
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchinputdate($date, $enddate)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->where('{F}KASUS.INPUT_DATE >=',"TO_DATE('$date','DD/MM/YYYY')", FALSE)
	  			->where('{F}KASUS.INPUT_DATE <=',"TO_DATE('$enddate','DD/MM/YYYY')", FALSE)
	  			->order_by('KASUS.STATUS','ASC');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchinputdates($date, $enddate, $status)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->where('{F}KASUS.INPUT_DATE >=',"TO_DATE('$date','DD/MM/YYYY')", FALSE)
	  			->where('{F}KASUS.INPUT_DATE <=',"TO_DATE('$enddate','DD/MM/YYYY')", FALSE)
	  			->where('KASUS.STATUS', $status);
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearcham($nama)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->like('LOWER("AM")', $nama)
	  			->order_by('KASUS.STATUS','ASC');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchams($nama, $status)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->like('LOWER("AM")', $nama)
	  			->where('KASUS.STATUS', $status);
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchcustomer($nama)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->like('LOWER("CUSTOMER")', $nama)
	  			->order_by('KASUS.STATUS','ASC');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getsearchcustomers($nama, $status)
	  {
	  	$this->db->select('KASUS.ID_CASE, PROFIL.TELEPHONE_NUMBER, PROFIL.CUSTOMER, PROFIL.AM, KASUS.CASE_TIME, KASUS.STATUS, KASUS.LAST_ACTIVITY')
	  			->from('KASUS')
	  			->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			->like('LOWER("CUSTOMER")', $nama)
	  			->where('KASUS.STATUS', $status);
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getkasusberulang()
	  {
	  	$this->db->select('PROFIL.TELEPHONE_NUMBER, COUNT({F}KASUS.ID_CASE) AS TOTAL')
            ->from('KASUS')
	  		->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
            ->group_by('PROFIL.TELEPHONE_NUMBER')
            ->having('COUNT({F}KASUS.ID_CASE) >', 1);
            
        $query = $this->db->get();
        return $query->result();
	  }

	  function getdetailkasusberulang($number)
	  {
	  	$this->db->select('PROFIL.TELEPHONE_NUMBER, KASUS.DESTINATION_NUMBER, KASUS.DESTINATION, KASUS.CASE_TIME, KASUS.FINISH_DATE, KASUS.DESCRIPTION, KASUS.STATUS')
            ->from('KASUS')
	  		->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  		->where('PROFIL.TELEPHONE_NUMBER',$number);
            
        $query = $this->db->get();
        return $query->result();
	  }

	  function getlistprofile()
	  {
	  	$this->db2->select('DES_PROFILE_FASTEL_AM.NOTEL AS NOTEL, DES_PROFILE_FASTEL_AM.NIP_NAS AS NIPNAS, DES_PROFILE_FASTEL_AM.STANDARD_NAME AS NAMACC, DES_PROFILE_FASTEL_AM.ALAMAT_DOSSIER AS ALAMAT, DES_PROFILE_FASTEL_AM.NIK_AM AS NIKAM, DES_PROFILE_FASTEL_AM.NAMA_AM AS NAMAAM, DES_PROFILE_FASTEL_AM.SEGMENT_6_LNAME AS SEGMEN, PMS_SLI_DES_LAST_3_MONTH.RATA_RATA AS AVERAGE')
	  			->from('DES_PROFILE_FASTEL_AM')
	  			->join('PMS_SLI_DES_LAST_3_MONTH','DES_PROFILE_FASTEL_AM.NOTEL = PMS_SLI_DES_LAST_3_MONTH.TELP','left');
	  	$query = $this->db2->get();
	  	return $query->result();
	  }

	   function limitgetlistprofile($limit, $start)
	  {
	  	$this->db2->limit($limit, $start);
	  	$this->db2->select('DES_PROFILE_FASTEL_AM.NOTEL AS NOTEL, DES_PROFILE_FASTEL_AM.NIP_NAS AS NIPNAS, DES_PROFILE_FASTEL_AM.STANDARD_NAME AS NAMACC, DES_PROFILE_FASTEL_AM.ALAMAT_DOSSIER AS ALAMAT, DES_PROFILE_FASTEL_AM.NIK_AM AS NIKAM, DES_PROFILE_FASTEL_AM.NAMA_AM AS NAMAAM, DES_PROFILE_FASTEL_AM.SEGMENT_6_LNAME AS SEGMEN, PMS_SLI_DES_LAST_3_MONTH.RATA_RATA AS AVERAGE')
	  			->from('DES_PROFILE_FASTEL_AM')
	  			->join('PMS_SLI_DES_LAST_3_MONTH','DES_PROFILE_FASTEL_AM.NOTEL = PMS_SLI_DES_LAST_3_MONTH.TELP','left');
	  	$query = $this->db2->get();
	  	if ($query->num_rows() > 0) 
	  	{
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	  }

	  function getnumber($id)
	  {
	  	$this->db->select('TELEPHONE_NUMBER')
	  			->from('PROFIL')
	  			->where('ID_CASE',$id);
	  	$query = $this->db->get();
	  	return $query->row()->TELEPHONE_NUMBER;
	  }

	  function getdate($id)
	  {
	  	$this->db->select('CASE_TIME')
	  			->from('KASUS')
	  			->where('ID_CASE',$id);
	  	$query = $this->db->get();
	  	return $query->row()->CASE_TIME;
	  }

	  function getprofile($id)
	  {
	  	$this->db->select('TELEPHONE_NUMBER, MAIN_NUMBER, NIPNAS, CUSTOMER, NIKAM, AM, INSTALLATION, SEGMEN, REVENUE')
	  			->from('PROFIL')
	  			->where('ID_CASE',$id);
	  	$query = $this->db->get();
	  	return $query->row();
	  }

	  function getactivity($id)
	  {
	  	$this->db->select('ACTIVITY.ACTIVITY_DATE AS TANGGAL, ACTIVITY.ACTIVITY_PARAMETER AS TYPE, ACTIVITY.DESCRIPTION AS DESCR, ACTIVITY.FILENAME')
	  			->from('ACTIVITY')
	  			->where('ACTIVITY.ID_CASE',$id)
	  			->order_by('ACTIVITY.INPUT_DATE','ASC');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getcasedetail($id)
	  {
	  	$this->db->select('KASUS.ID_CASE, KASUS.DESTINATION, KASUS.STATUS, KASUS.DESTINATION_NUMBER, KASUS.DURASI, KASUS.NUMBER_OF_CALL, KASUS.CASE_PARAMETER AS DES1, KASUS.CASE_TIME, KASUS.DESCRIPTION AS DES2, KASUS.FILENAME')
	  			->from('KASUS')
	  			->where('KASUS.ID_CASE',$id);
	  	$query = $this->db->get();
	  	return $query->row();
	  }

	  function getactparam()
	  {
	  	$this->db->select('ID_PARAMETER, DESCRIPTION, AKRONIM, STATUS, AKTIF')->from('ACTIVITY_PARAMETER')->where('AKTIF','1');
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getcounthistory($number, $tanggal)
	  {
	  	$this->db->select('KASUS.ID_CASE')
	  			 ->from('KASUS')
	  			 ->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			 ->where('PROFIL.TELEPHONE_NUMBER', $number)
	  			 ->where('{F}KASUS.CASE_TIME <',"TO_DATE('$tanggal','DD/MM/YYYY')", FALSE);
	  	$query = $this->db->get();
	  	return $query->num_rows();
	  }

	  function gethistory($number, $tanggal)
	  {
	  	$this->db->select('KASUS.CASE_TIME, KASUS.DESTINATION_NUMBER, KASUS.DESTINATION, KASUS.DURASI, KASUS.NUMBER_OF_CALL, KASUS.CASE_PARAMETER AS DESCRIPTION')
	  			 ->from('KASUS')
	  			 ->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			 ->where('PROFIL.TELEPHONE_NUMBER', $number)
	  			 ->where('{F}KASUS.CASE_TIME <',"TO_DATE('$tanggal','DD/MM/YYYY')", FALSE);
	  	$query = $this->db->get();
	  	return $query->result();
	  }

	  function getprofile2($mainnumber)
	  {
	  	$this->db2->select('DES_PROFILE_FASTEL_AM.NIP_NAS AS NIPNAS, DES_PROFILE_FASTEL_AM.STANDARD_NAME AS NAMACC, DES_PROFILE_FASTEL_AM.ALAMAT_DOSSIER AS ALAMAT, DES_PROFILE_FASTEL_AM.NIK_AM AS NIKAM, DES_PROFILE_FASTEL_AM.NAMA_AM AS NAMAAM, DES_PROFILE_FASTEL_AM.SEGMENT_6_LNAME AS SEGMEN, PMS_SLI_DES_LAST_3_MONTH.RATA_RATA AS AVERAGE')
	  			->from('DES_PROFILE_FASTEL_AM')
	  			->join('PMS_SLI_DES_LAST_3_MONTH','DES_PROFILE_FASTEL_AM.NOTEL = PMS_SLI_DES_LAST_3_MONTH.TELP','left')
	  			->where('DES_PROFILE_FASTEL_AM.NOTEL',$mainnumber);
	  	$query = $this->db2->get();
	  	return $query->row();
	  }

	  function getnullprofile()
	  {
	  	$this->db->select("NULL AS NIPNAS , NULL AS NAMACC, NULL AS ALAMAT, NULL AS NIKAM, NULL AS NAMAAM, NULL AS SEGMEN, NULL AS AVERAGE", false)
	  			->from('PROFIL');
	  	$query = $this->db->get();
	  	return $query->row();
	  }

	  function getcaseexist($telephonenumber)
	  {
	  	$this->db->select('PROFIL.TELEPHONE_NUMBER')
	  			 ->from('KASUS')
	  			 ->join('PROFIL','KASUS.ID_CASE = PROFIL.ID_CASE')
	  			 ->where('PROFIL.TELEPHONE_NUMBER', $telephonenumber)
	  			 ->where('KASUS.STATUS','0');
	  	$query = $this->db->get();
	  	if($query->num_rows() > 0)
      	{
      		return 1;
      	}
      	else
      	{
      		return 0;
      	}
	  }

	  function checkidcaseexist($id)
	  {
	  	$this->db->select('ID_CASE')
	  			 ->from('KASUS')
	  			 ->where('ID_CASE', $id);
	  	$query = $this->db->get();
	  	if($query->num_rows() > 0)
      	{
      		return 1;
      	}
      	else
      	{
      		return 0;
      	}
	  }


	  function insertcases($insertdata)
	  {
	  	$this->db->insert('KASUS', $insertdata);
	  }

	  function insertprofiles($profiledata)
	  {
	  	$this->db->insert('PROFIL', $profiledata);
	  }

	  function inseractivity($data)
	  {
	  	$this->db->insert('ACTIVITY', $data);
	  }

	  function getlastactivity($type)
	  {
	  	$this->db->select('STATUS, AKRONIM, DESCRIPTION')
	  			->from('ACTIVITY_PARAMETER')
	  			->where('ID_PARAMETER',$type);
	  	$query = $this->db->get();
	  	return $query->row();
	  }

	  function getstatusbyid($id)
	  {
	  	$this->db->select('STATUS')
	  			->from('KASUS')
	  			->where('ID_CASE',$id);
	  	$query = $this->db->get();
	  	return $query->row()->STATUS;
	  }

	  function insertlastactivity($id, $data)
	  {
	  	$this->db->where('ID_CASE', $id);
		$this->db->update('KASUS', $data);
	  }

	  function getcasenumbers($id)
	  {
	  	$this->db->select('PROFIL.ID_CASE, PROFIL.TELEPHONE_NUMBER')
	  			->from('PROFIL')
	  			->where('PROFIL.ID_CASE',$id);
	  	$query = $this->db->get();
	  	return $query->row();
	  }

	  function getmainnumber1($id)
	  {
	  	$this->db->select('PROFIL.MAIN_NUMBER')
	  			->from('PROFIL')
	  			->where('PROFIL.ID_CASE',$id);
	  	$query = $this->db->get();
	  	return $query->row()->MAIN_NUMBER;
	  }

	  function updateprofile($id, $data)
	  {
	  	$this->db->where('ID_CASE', $id);
		$this->db->update('PROFIL', $data);
	  }

} 

?>