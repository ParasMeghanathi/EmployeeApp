<!DOCTYPE html>
<html>
    <head>
        <title>View Employee</title>
		<link rel='stylesheet' type='text/css' href='style.css' />
    </head>
     <body bgcolor='#ADD8E6'>


    <center>
        <table  class="tb_view" cellpadding="5">
            <caption style="margin-bottom: 10px;">
                <div style="border-bottom: 2px solid #006400;text-align: center;">
                    <h1 style="color:#FF6347;font-variant: all-petite-caps;text-shadow: 0px 0px 1px #333;">Employee Details</h1>
                </div>
            </caption>
            <thead>
                <tr class="table-header"> 

                    <th>EmpName</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>ContactNumber</th>
                    <th>Job</th>
                </tr>
            </thead>
			
            <tbody>
                <?php
              

                $host = 'database1.cpmu2fpuoall.us-east-1.rds.amazonaws.com';
                $user = 'admin';
		$password = 'Student123';
               $database = 'emp_details';
               $port = 3306;
                $con = mysqli_connect($host, $user, $password, $database, $port);
                $query = "SELECT * FROM `emp`";
                $result = mysqli_query($con, $query);

                $c = 0;
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>

                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['salary']; ?></td>
                        <td><?php echo $data['phone']; ?></td>
                        <td><?php echo $data['job']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                <?php ?>
            </tbody>
        </table>

    </center>
	

</body>
</html>

