<?php
    session_start();

    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'University Information System'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
    }
?>


<html>
<head>
    <link rel="stylesheet" href="styleForm.css" type="text/css">
    <script type="text/javascript" src="file.js"></script>
</head>
<body>
    <div class="form-style-8">
    <h2>Student Application Form</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        
		<label>First Name
        <input type="text" name="fname" placeholder="Enter Your First Name" />
        </label>
		<label>Middle Name
        <input type="text" name="mname" placeholder="Enter Your Middle Name" />
        </label>
        <label>Last Name
        <input type="text" name="lname" placeholder="Enter Your Last Name " />
        </label>
		
		
		<label>Father's Name
        <input type="text" name="fathername" placeholder="Enter Your Father's Name" />
        </label>
		
		
		<label>Mother's Name
        <input type="text" name="mothername" placeholder="Enter Your Mother's Name" />
        </label>
        
		
		<label>Present Address</label><br>
		<label>House No.
        <input type="text" name="presenthouseno" />
        </label>
		<label>Location
        <input type="text" name="presentlocation" />
        </label>
        <label>Village/Street
        <input type="text" name="presentvillagestreet" />
        </label>
		<label>Thana
        <input type="text" name="presentthana"/>
        </label>
		<label>District
        <input type="text" name="presentdistrict" />
        </label>
        <label>Post Code
        <input type="text" name="presentpostcode" />
        </label>
		
		
		<label>Permanent Address</label><br>
		<label>House No.
        <input type="text" name="permanenthouseno" />
        </label>
		<label>Location
        <input type="text" name="permanentlocation" />
        </label>
        <label>Village/Street
        <input type="text" name="permanentvillagestreet" />
        </label>
		<label>Thana
        <input type="text" name="permanentthana"/>
        </label>
		<label>District
        <input type="text" name="permanentdistrict" />
        </label>
        <label>Post Code
        <input type="text" name="permanentpostcode" />
        </label>
		
		
		<label>Birth Date
            <input type="date" name="dob" />
        </label>
		
		
        <label>Gender<br>
            <input type="radio" name="gender" value="male" checked/>Male<br>
            <input type="radio" name="gender" value="female"/>Female<br>
        </label>
        <!--
        <input type="text" name="fname" placeholder="First Name" />
        <input type="text" name="lname" placeholder="Last Name" />
        <input type="email" name="field2" placeholder="Email" />
        <input type="url" name="field3" placeholder="Website" />
        <textarea placeholder="Message" onkeyup="adjust_textarea(this)"></textarea>-->
	<div class="form-style-8">
		<table>
		<tr>
			<th>Name of the Degreee</th>
			<th>Institue</th>
			<th>Board</th>
			<th>Year</th>
			<th>Result</th>
		</tr>
		<tr>
			<th>JSC/JDC</th>
			<td><input type="text" name="institutejsc"/></td>
			<td><input type="text" name="boardjsc"/></td>
			<td><input type="text" name="yearjsc"/></td>
			<td><input type="text" name="resultjsc"/></td>
			</tr>
		<tr>
			<th>SSC</th>
			<td><input type="text" name="institutessc"/></td>
			<td><input type="text" name="boardssc"/></td>
			<td><input type="text" name="yearssc"/></td>
			<td><input type="text" name="resultssc"/></td>
		</tr>
		<tr>
			<th>HSC</th>
			<td><input type="text" name="institutehsc"/></td>
			<td><input type="text" name="boardhsc"/></td>
			<td><input type="text" name="yearhsc"/></td>
			<td><input type="text" name="resulthsc"/></td>
			</tr>
		</table>
	</div>
	<input type="submit" name="submit" value="Insert Data" />
	</div>
	</form>
    </div>
	
</body>

<?php
/**
    if($_SERVER["REQUEST_METHOD"] == "POST"
        && isset($_POST['submit'])
        && !array_key_exists('flag', $_SESSION)
        && empty($_SESSION['flag'])
        ){
        var_dump($_SESSION);
        $_SESSION['flag']='1';
        $_SESSION['fname']= $_POST['fname'];
        $_SESSION['lname']= $_POST['lname'];
        $_SESSION['gender']= $_POST['gender'];
        $_SESSION['dob']= $_POST['dob'];
        $_SESSION['nid']= $_POST['nid'];
        $_SESSION['cgpa']= $_POST['cgpa'];
        $_SESSION['semester']= $_POST['semester'];

        echo $_SESSION['fname']."<br>".$_SESSION['lname']."<br>".$_SESSION['gender']."<br>".$_SESSION['dob']."<br>".$_SESSION['nid']."<br>".$_SESSION['cgpa']."<br>".$_SESSION['semester'];
        
        var_dump($_SESSION);
    }
    else{
        var_dump($_SESSION);
        echo "<br>cannot echo";
    } */
        $_POST['sid'] = "null";
        echo $_POST['fname']."<br>".$_POST['mname']."<br>".$_POST['lname']."<br>".$_POST['fathername']."<br>".$_POST['mothername']."<br>".$_POST['presenthouseno']."<br>".$_POST['presentlocation']."<br>".$_POST['presentvillagestreet']."<br>".$_POST['presentthana']."<br>".$_POST['presentdistrict']."<br>".$_POST['presentpostcode']."<br>".$_POST['permanenthouseno']."<br>".$_POST['permanentlocation']."<br>".$_POST['permanentvillagestreet']."<br>".$_POST['permanentthana']."<br>".$_POST['permanentdistrict']."<br>".$_POST['permanentpostcode']."<br>".$_POST['dob']."<br>".$_POST['gender']."<br>".$_POST['institutejsc']."<br>".$_POST['boardjsc']."<br>".$_POST['yearjsc']."<br>".$_POST['resultjsc']."<br>".$_POST['institutessc']."<br>".$_POST['boardssc']."<br>".$_POST['yearssc']."<br>".$_POST['resultssc']."<br>".$_POST['institutehsc']."<br>".$_POST['boardhsc']."<br>".$_POST['yearhsc']."<br>".$_POST['resulthsc'];
    if(isset($_POST['submit'])){
        
        $sql = "INSERT INTO students (`sid`, `fname`, `mname`, `lname`, `fathername`, `mothername`, `presenthouseno`, `presentlocation`, `presentvillagestreet`, `presentthana`, `presentdistrict`, `presentpostcode`, `permanenthouseno`, `permanentlocation`, `permanentvillagestreet`, `permanentthana`, `permanentdistrict`, `permanentpostcode`, `dob`, `jscinstitute`, `jscboard`, `jscyear`, `jscresult`, `sscinstitute`, `sscboard`, `sscyear`, `sscresult`, `hscinstitute`, `hscboard`, `hscyear`, `hscresult`, `gender`) VALUES('". $_POST['sid'] ."',' ". $_POST['fname']."',' ".$_POST['mname']."',' ".$_POST['lname']."',' ".$_POST['fathername']."',' ".$_POST['mothername']."',' ".$_POST['presenthouseno']."',' ".$_POST['presentlocation']."',' ".$_POST['presentvillagestreet']."',' ".$_POST['presentthana']."',' ".$_POST['presentdistrict']."',' ".$_POST['presentpostcode']."',' ".$_POST['permanenthouseno']."',' ".$_POST['permanentlocation']."',' ".$_POST['permanentvillagestreet']."',' ".$_POST['permanentthana']."',' ".$_POST['permanentdistrict']."',' ".$_POST['permanentpostcode']."',' ".$_POST['dob']."',' ".$_POST['institutejsc']."',' ".$_POST['boardjsc']."',' ".$_POST['yearjsc']."',' ".$_POST['resultjsc']."',' ".$_POST['institutehsc']."',' ".$_POST['boardhsc']."',' ".$_POST['yearhsc']."',' ".$_POST['resulthsc']."',' ".$_POST['institutessc']."',' ".$_POST['boardssc']."',' ".$_POST['yearssc']."',' ".$_POST['resultssc']."',' ".$_POST['gender']."')";

        $query = mysqli_query($conn, $sql);

        if(!$query)
        echo mysqli_error($conn);

    }
?>
</html>