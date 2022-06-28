<?php
    require $_SERVER['DOCUMENT_ROOT'].'/VUSHAL ASSIGNEMENT'.'/config/init.php';
    $user = new User();

	if(isset($_GET)&& !empty($_GET) && $_GET['name']=='submit')
    {    	
		$u_id = $_SESSION['user_id']; // session user id 
		$check_id=$user->getUserById($u_id);   // fetch userdetail using user id
		$cr_email  = $check_id[0]->email; // fetch email
		$cr_pass = sha1($cr_email.$_POST['current_password']); // current password  	
    	$new_pass=$_POST['new_password'];// new password
    	$re_pass=$_POST['re_password']; // verify password
    	
    	if($check_id)
    	{	    
    		if($check_id[0]->password==$cr_pass)    
    		{
    			if($new_pass==$re_pass)
    			{   
					$password = sha1($cr_email.$_POST['password']);

					$data=array('id' => ($_SESSION['user_id']),
    				'password'=>$password
    				);
	    			if($new_pass!=''&&$re_pass!='') 			
	    			{
	    				$u_id = $user->updateUser($data, $u_id);    					
	    				redirect(Setting,'success','Credential changed successfully');		
	    			}
	    			else
	    			{
	    				redirect(Setting,'error','Please enter new password');
		    		}
	    		}
	    		else
	    		{    	
	    			redirect(Setting,'error','New pass doesnt match');
	    		}    			
		    	redirect(Setting,'error','Enter new password');    
    		}
    		else	
    		{
    			redirect(Setting,'error','Current password doesnt match');
    		}
    	}    	
    	else
    	{    	   
    		redirect(Setting,'error','Current password doesnt match');
    	}
    	
    }
