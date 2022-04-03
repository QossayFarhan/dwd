<?php

use Model\Employee as EmployeeModel;

 class LoginController extends Controller
{

    public function loginPage()
    {
        $employees = new EmployeeModel;
        $employees = $employees->getEmployee();
        $this->render('Views/login.php', ['employees'=>$employees]);
    }

    public function login()
    {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $employee = new EmployeeModel;
        $employee_exist = $employee->login($email, $password);
        if($employee_exist)

        {
            echo "<script> 
                alert(' Login success');
                
            </script>";
            header("Location: /".ROOT_FOLDER_NAME."/loginsuccess");
        }
    }

    public function loginSuccess()
    {
        $this->render('Views/loginSuccess.php');
    }

    public function registrationPage()
    {
        $this->render('Views/registration.php');
    }

    public function registration()
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $employee = new EmployeeModel;
        $employee_created = $employee->createEmployee($name, $email, $password);
        // echo "<script> alert('employee_created: '", $employee_created,")</script>";
        if($employee_created)
        {

             header("Location: /".ROOT_FOLDER_NAME."/registered");
        }
    }

    public function registered()
    {
        $this->render('Views/registered.php');
    }

    public function preview()
    {
        $employee = new EmployeeModel;
        $result = $employee->getEmployee();

            //  echo $row['name'], " ", $row['email'], '<br>';
            $this->render('Views/preview.php', $result);
    }

    
        
    }

?>