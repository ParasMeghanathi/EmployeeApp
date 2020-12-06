<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
		
    </head>
    <?php
    if (isset($_POST['add'])) {
        $host = 'database1.cpmu2fpuoall.us-east-1.rds.amazonaws.com';
        $user = 'admin';
        $password = 'Student123';
        $database = 'emp_details';
        $port = 3306;
     

        $emp_name = $_POST['emp_name'];
        $emp_email = $_POST['emp_email'];
        $emp_salary = $_POST['emp_salary'];
        $emp_phone = $_POST['emp_phone'];
        $emp_job = $_POST['emp_job'];
		
        $conn = mysqli_connect($host, $user, $password, $database, $port);

		

        if ($conn) {
            
        } else {
            die("Database Connection Failed.");
        }
		
        $query = "INSERT INTO `emp`(`name`, `email`, `salary`, `phone`, `job`) VALUES ('" . $emp_name . "','" . $emp_email . "','" . $emp_salary . "','" . $emp_phone . "','" . $emp_job . "')";

        $res = mysqli_query($conn, $query);
		
		
        if ($res > 0) {
            header('location:view.php');
        }
    }
    ?>
    <body bgcolor='#ADD8E6'>
    <center>
        <h1 style="color:#FF6347;">EmployeeDetails</h1>
		
        <form method = "post">
            <table width = "400" border = "0" cellspacing = "1" 
                   cellpadding = "2">
				  

                <tr>
                    <td width = "100">EmployeeName:</td>
                    <td><input name = "emp_name" type = "text" 
                               id = "emp_name"></td>
                </tr>

                <tr>
                    <td width = "100">EmployeeEmail:</td>
                    <td><input name = "emp_email" type = "text" 
                               id = "emp_email"></td>
                </tr>

                <tr>
                    <td width = "100">EmployeeSalary</td>
                    <td><input name = "emp_salary" type = "text" 
                               id = "emp_salary"></td>
                </tr>
                <tr>
                    <td width = "100">EmployeePhone</td>
                    <td><input name = "emp_phone" type = "text" 
                               id = "emp_phone"></td>
                </tr>
                <tr>
                    <td width = "100">Job-Name</td>
                    <TD width="50%"><select name="emp_job" id = "emp_job"> 
                            <OPTION value="Manager">Manager</OPTION>
                            <OPTION value="Analyst">Analyst</OPTION>
                            <OPTION value="Clerk">Clerk</OPTION>
							<OPTION value="Salesman">Salesman</OPTION> 	
                        </select></TD>
                </tr>

                <tr>
                    <td width = "100"> </td>
                    <td> </td>
                </tr>

                <tr>
                    <td width = "100"> </td>
                    <td>
                        <input name = "add" type = "submit" id = "add" value = "AddEmployee">
						<input name = "clear" type = "reset" id = "add" value = "clear">
                    </td>
                </tr>

            </table>
        </form>
		</br>
        <a href="view.php"><input type="button" value="Click here to View Employee Details"></a>
    </center>
</body>
</html>
