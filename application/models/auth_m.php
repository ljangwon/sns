<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 사용자인증 모델
 *
 * @author Jongwon Byun <advisor@cikorea.net>
 */
class Auth_m extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

	/**
	 * 아이디, 비밀번호 체크
	 *
	 * @author Jongwon Byun <advisor@cikorea.net>
	 * @param array $auth 폼전송 받은 아이디, 비밀번호
	 * @return array
	 */
    function login($auth)
    {
    	$sql = "SELECT name FROM st_master WHERE name = '".$auth['username']."' AND password = '".$auth['password']."' ";
   		$query = $this->db->query($sql);

		if ( $query->num_rows() > 0 )
     	{
			//맞는 데이터가 있다면 해당 내용 반환
     		return $query->row();
     	}
     	else
     	{
     		//맞는 데이터가 없을 경우
	    	return FALSE;
     	}
    }

}

/* End of file auth_m.php */
/* Location: ./application/models/auth_m.php */