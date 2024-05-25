<?php
include_once('model.php');
class control extends model
{
	function __construct()
	{
		
		model::__construct();
		session_start();
		$url=$_SERVER['PHP_SELF']; 
		switch($url)
		{	
			//abcd/index
			case '/abcd/index.php';
			include_once('index.php');
			break;
			//abcd/signup
			case '/abcd/signup.php';
			if(isset($_REQUEST['ssubmit']))
			       {
			       	$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$password = $_REQUEST['password'];
					$phone = $_REQUEST['phone'];

					// Attempt insert query execution
					$sql = "INSERT INTO regiseek (name, email, password,phone) VALUES ('$name', '$email','$password','$phone')";
					if(mysqli_query($this->conn, $sql)){					  
						$_SESSION['status']="Registration Successfull";
						$_SESSION['status_code']="success";
						header("Location: loginjobseeker.php");
					} 
				}
				else if(isset($_REQUEST['esubmit']))
			       {
			       	$name = $_REQUEST['xname'];
					$email = $_REQUEST['xemail'];
					$password = $_REQUEST['xpassword'];
					$phone = $_REQUEST['xphone'];

					// Attempt insert query execution
					$sql = "INSERT INTO regiemp (name, email, password,phone) VALUES ('$name', '$email','$password','$phone')";
					if(mysqli_query($this->conn, $sql)){					  
						$_SESSION['status']="Registration Successfull";
						$_SESSION['status_code']="success";
						header("Location: loginjobseeker.php");
					} 
				}
			include_once('signup.php');
			break;



			//abcd/loginemployer
			case '/abcd/loginemployer.php';
				if(isset($_REQUEST['login']))
			       {
				        $unm=$_REQUEST['xemail'];
				        $pass=$_REQUEST['xpassword'];
				        // $enc_pass=md5($pass);z   
				        
				        $where=array("email"=>$unm,"password"=>$pass);
				        $res=$this->select_where('regiemp',$where);
				        $chk=$res->num_rows;  // check row wise cond
				        if($chk==1)
				        {
				          
				          // code for get user_id
				          $fetch=$res->fetch_object();
				          $id=$fetch->id;      
				          $unm=$_REQUEST['xemail'];
				          $pass=$_REQUEST['xpassword'];
				          $data=array("email"=>$unm,"password"=>$pass,"regiid"=>$id);
				          $res=$this->insert('loginempl',$data);
				          $_SESSION['id']=$id;
				          $_SESSION['email']=$unm;
				            setcookie('id',$id,time()+3600);
				            setcookie('xemail',$unm,time()+3600);
				            setcookie('xpassword',$pass,time()+3600);
				          echo "<script>
				          alert('Login Sucessfull');
				          window.location='index.php';	
				          </script>";
				        }
				        else
				        {
				          echo "<script>
				          alert('Login Failed');
				          </script>";
				        }
					}  
					include_once('loginemployer.php');
					break;			
		
					//abcd/loginjobseeker
			case '/abcd/loginjobseeker.php';
		    	if(isset($_REQUEST['login']))
		      		{
				        $email=$_REQUEST['email'];
				        $password=$_REQUEST['password'];
				        // $enc_password=md5($password);  
				        
				        $where=array("email"=>$email,"password"=>$password);
				        $res=$this->select_where('regiseek',$where);
				        $chk=$res->num_rows;  // check row wise cond
				        if($chk==1)
				        {
				          // code for get user_id
				          $fetch=$res->fetch_object();
				          $eid=$fetch->id;      
				          $email=$_REQUEST['email'];
				          $password=$_REQUEST['password'];
				          $data=array("email"=>$email,"password"=>$password,"regiid"=>$eid);
				          $res=$this->insert('loginseek',$data);
				          $_SESSION['eid']=$eid;
				          // $_SESSION['email']=$email;
				            setcookie('eid',$eid,time()+3600);
				            setcookie('email',$email,time()+3600);
				            setcookie('password',$password,time()+3600);
				          echo "<script>
				          alert('Login Sucessfull');
				          window.location='index.php';	
				          </script>";
				        }
				        else
				        {
				          echo "<script>
				          alert('Login Failed');
				          </script>";
				        }
				    }  
					include_once('loginjobseeker.php');
					break;

					//abcd/add-job
			case '/abcd/add-job.php':
			$id = $_SESSION['id'];
     	    if(isset($_REQUEST['submit']))
    			{  
				    $title = $_POST['title'];  
				    $c_name = $_POST['c_name'];  
				    $category = $_POST['category'];  
				    $desc = $_POST['desc'];  
				    $experience = $_POST['experience'];  

				    $tm=md5(time());
				    $fnm=$_FILES["logo"]["name"];
				    $dst="./assets/img/".$tm.$fnm;
				    $dst1="assets/img/".$tm.$fnm;
				    move_uploaded_file($_FILES["logo"]["tmp_name"],$dst);

				    $j_type = $_POST['j_type'];   
				    $email = $_POST['email'];  
				    $phone_no = $_POST['phone_no'];  
				    $address = $_POST['address'];  
				    $city = $_POST['city'];     
       			    $sql = "INSERT INTO p_job (regiid,title, c_name, category, decs, experience, logo, j_type, email, phone_no, address, city) VALUES ('$id','$title', '$c_name', '$category', '$desc', '$experience', '$dst1', '$j_type', '$email', '$phone_no', '$address', '$city');"; 
			        if(mysqli_query($this->conn, $sql)) {
			            //echo $eid;
			            echo "<script>
			            alert('Job Posted Sucessfully');
			            window.location='index.php';  
			            </script>";
			        }

			        else{
			        echo "ERROR: Could not connect. " . mysqli_connect_error();
			        } 
			      }
			include_once('add-job.php');
			break;


					//abcd/profile-settings.php
			case '/abcd/profile-settings.php':
			$eid = $_SESSION['eid'];
			echo $eid;
     	    if(isset($_REQUEST['submit']))
    			{  
				    $name = $_POST['name'];  
				    $gender = $_POST['gender'];  
				    $dob = $_POST['dob'];  
				    $address = $_POST['address'];  
				    $state = $_POST['state'];  
				    $district = $_POST['district']; 
				    $email = $_POST['email'];   
				    $mobile = $_POST['mobile'];

				    $tm=md5(time());
				    $fnm=$_FILES["image"]["name"];
				    $dst="./assets/img/".$tm.$fnm;
				    $dst1="assets/img/".$tm.$fnm;
				    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  
				    
				    // $image = $_POST['image'];  
				    $resume = $_POST['resume'];  
				    $reference = $_POST['reference'];    
				       
				        $sql = "INSERT INTO profile (regiid,name, gender, dob, address, state, district, email, mobile, image, resume, reference) VALUES ('$eid','$name', '$gender', ' $dob', '$address', '$state', '$district', '$email', '$mobile', '$dst1', '$resume', '$reference');";
      				if(mysqli_query($this->conn, $sql)) {
			            echo "<script>
			            alert('Profile Added Sucessfully');
			            window.location='index.php';  
			            </script>";
			        }

			        else{
			         echo "<script>
				          alert('Login Failed');
				          </script>";
			        } 
			      }
			include_once('profile-settings.php');
			break;

					//abcd/contact.php
			case '/abcd/contact.php':
			$eid = $_SESSION['eid'];
		
     	    if(isset($_REQUEST['submit']))
    			{  
				    $name = $_POST['name'];  
				    $subject = $_POST['subject'];  
				    $message = $_POST['message'];  				            
        			$sql = "INSERT INTO feedback (regiid,name, subject, message) VALUES ($eid,'$name', '$subject', '$message');";
       

    		 if(mysqli_query($this->conn, $sql)){

   			 header("Location: index.php");

			} else{
    			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}}
			include_once('contact.php');
			break;

					//abcd/contact.php
			case '/abcd/browse-job.php':
		
			include_once('browse-job.php');
			break;

					//abcd/profile-display.php
			case '/abcd/profile-display.php':
		
			include_once('profile-display.php');
			break;				

			case '/abcd/accept.php':
			include_once('accept.php');
			break;


			case '/abcd/seek_accept.php':
			include_once('seek_accept.php');
			break;

			case '/abcd/applied_job.php':
			include_once('applied_job.php');
			break;


			case '/abcd/seek_reject.php':
			include_once('seek_reject.php');
			break;				
			
			case '/abcd/profile.php':
		
			include_once('profile.php');
			break;

			case '/abcd/accept-emp.php':
		
			include_once('accept-emp.php');
			break;




			case '/abcd/managejob.php':
			//$id = $_SESSION['id'];
			include_once('managejob.php');
			break;	



			case '/abcd/manageresume.php':
			//$id = $_SESSION['id'];
			include_once('manageresume.php');
			break;
			case '/abcd/manage_resume.php':
			//$id = $_SESSION['id'];
			include_once('manage_resume.php');
			break;

			case '/abcd/apply.php':
			//$id = $_SESSION['id'];
			include_once('apply.php');
			break;	

			case '/abcd/extra_page.php':
			//$id = $_SESSION['id'];
			include_once('extra_page.php');
			break;	

			case '/abcd/reject.php':
			//$id = $_SESSION['id'];
			include_once('reject.php');
			break;	
			
			
			case '/abcd/employer_profile.php':
			//$id = $_SESSION['id'];
			include_once('employer_profile.php');
			break;

			case '/abcd/profile_view.php':
			//$id = $_SESSION['id'];
			include_once('profile_view.php');
			break;
			
			default:
			include_once('404.php');
			break;			
		}
	}
}
$obj=new control;
?>