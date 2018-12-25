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
	<link rel="stylesheet" href="styleTable.css" type="text/css">
    <script type="text/javascript" src="file.js"></script>
</head>
<body>
    <div class="form-style-8">
    <h2>Teacher Application Form</h2>
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
        
		
		<label>Present Address</label>
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
        <input type="number" step="1" name="presentpostcode" />
        </label>
		
		
		<label>Permanent Address</label>
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
        <input type="number" step="1" name="permanentpostcode" />
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
        <br>

		<div class="data-table">
		<label>Educational Qualifications(Before graduation)</label>
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
			<td><input type="number" step="1" name="yearjsc"/></td>
			<td><input type="text" name="resultjsc"/></td>
			</tr>
		<tr>
			<th>SSC</th>
			<td><input type="text" name="institutessc"/></td>
			<td><input type="text" name="boardssc"/></td>
			<td><input type="number" step="1" name="yearssc"/></td>
			<td><input type="text" name="resultssc"/></td>
		</tr>
		<tr>
			<th>HSC</th>
			<td><input type="text" name="institutehsc"/></td>
			<td><input type="text" name="boardhsc"/></td>
			<td><input type="number" step="1" name="yearhsc"/></td>
			<td><input type="text" name="resulthsc"/></td>
			</tr>
		</table>
	</div>
	
	<br>
	<div class="data-table">
		<label>Educational Qualifications(Graduation and After graduation)</label>
		<table>
		<tr>
			<th>Name of the Degreee</th>
			<th>Major</th>
			<th>Minor</th>
			<th>Institute</th>
			<th>Year</th>
			<th>Result</th>
		</tr>
		<tr>
			<th>B.Sc.</th>
			<td><input type="text" name="bscmajor"/></td>
			<td><input type="text" name="bscminor"/></td>
			<td><input type="text" name="bscinstitute"/></td>
			<td><input type="number" step="1" name="bscyear"/></td>
			<td><input type="text" name="bscresult"/></td>
			</tr>
		<tr>
			<th>M.Sc.</th>
			<td><input type="text" name="mscmajor"/></td>
			<td><input type="text" name="mscminor"/></td>
			<td><input type="text" name="mscinstitute"/></td>
			<td><input type="number" step="1" name="mscyear"/></td>
			<td><input type="text" name="mscresult"/></td>
		</tr>
		<th>Ph. D.</th>
			<td><input type="text" name="phdmajor"/></td>
			<td><input type="text" name="phdminor"/></td>
			<td><input type="text" name="phdinstitute"/></td>
			<td><input type="number" step="1" name="phdyear"/></td>
			<td><input type="text" name="phdresult"/></td>
			</tr>
		</table>
	</div>
	
	<br>
	<div class="data-table">
		<label>Experience</label>
		<table>
		<tr>
			<th>Position</th>
			<th>Organization</th>
			<th>Time From</th>
			<th>Time To</th>
			<th>Remarks</th>
		</tr>
		<tr>
			<th>Lecturer</th>
			<td><input type="text" name="lecturerorganization"/></td>
			<td><input type="number" step="1" name="lecturertimefrom"/></td>
			<td><input type="number" step="1" name="lecturertimeto"/></td>
			<td><input type="text" name="lecturerremarks"/></td>
			</tr>
		<tr>
			<th>Asst. Professor</th>
			<td><input type="text" name="assistorganization"/></td>
			<td><input type="number" step="1" name="assisttimefrom"/></td>
			<td><input type="number" step="1" name="assisttimeto"/></td>
			<td><input type="text" name="assistremarks"/></td>
		</tr>
		<th>Associate Professor</th>
			<td><input type="text" name="associateorganization"/></td>
			<td><input type="number" step="1" name="associatetimefrom"/></td>
			<td><input type="number" step="1" name="associatetimeto"/></td>
			<td><input type="text" name="associateremarks"/></td>
			</tr>
		<th>Professor</th>
			<td><input type="text" name="professororganization"/></td>
			<td><input type="number" step="1" name="professortimefrom"/></td>
			<td><input type="number" step="1" name="professortimeto"/></td>
			<td><input type="text" name="professorremarks"/></td>
			</tr>
		<th>Post-Doc</th>
			<td><input type="text" name="postdocorganization"/></td>
			<td><input type="number" step="1" name="postdoctimefrom"/></td>
			<td><input type="number" step="1" name="postdoctimeto"/></td>
			<td><input type="text" name="postdocremarks"/></td>
			</tr>
		</table>
	</div>
	
	<br>
	<div class="data-table">
		<label>Research Publication</label>
		<table>
		<tr>
			<th>List of Authors</th>
			<th>Type</th>
			<th>Publication Information</th>
			<th>Page Number</th>
			<th>Year</th>
		</tr>
		<tr>
			<td><input type="text" name="listofauthors"/></td>
			<td><input type="text" name="type"/></td>
			<td><input type="text" name="pubinfo"/></td>
			<td><input type="number" step="1" name="pagenumber"/></td>
			<td><input type="number" step="1" name="yearpub"/></td>
			</tr>
		</table>
	</div>
	
	<br>
	<div class="data-table">
		<label>Graduate Work</label>
		<table>
		<tr>
			<th>Degree</th>
			<th>Thesis Title</th>
			<th>Research Area</th>
			<th>Month</th>
			<th>Year</th>
		</tr>
		<tr>
			<td><input type="text" name="graduatedegree"/></td>
			<td><input type="text" name="graduatethesistitle"/></td>
			<td><input type="text" name="graduateresearcharea"/></td>
			<td><input type="text" name="graduatemonth"/></td>
			<td><input type="number" step="1" name="graduateyear"/></td>
			</tr>
		</table>
	</div>
	
	<input type="submit" name="submit" value="Insert Data" />
	
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
        //echo $_POST['fname']."<br>".$_POST['mname']."<br>".$_POST['lname']."<br>".$_POST['fathername']."<br>".$_POST['mothername']."<br>".$_POST['presenthouseno']."<br>".$_POST['presentlocation']."<br>".$_POST['presentvillagestreet']."<br>".$_POST['presentthana']."<br>".$_POST['presentdistrict']."<br>".$_POST['presentpostcode']."<br>".$_POST['permanenthouseno']."<br>".$_POST['permanentlocation']."<br>".$_POST['permanentvillagestreet']."<br>".$_POST['permanentthana']."<br>".$_POST['permanentdistrict']."<br>".$_POST['permanentpostcode']."<br>".$_POST['dob']."<br>".$_POST['gender'];
    $_POST['tid'] = "null";
    if(isset($_POST['submit'])){
        
        $sql = "INSERT INTO teachers (`tid`, `fname`, `mname`, `lname`, `fathername`, `mothername`, `presenthouseno`, `presentlocation`, `presentvillagestreet`, `presentthana`, `presentdistrict`, `presentpostcode`, `permanenthouseno`, `permanentlocation`, `permanentvillagestreet`, `permanentthana`, `permanentdistrict`, `permanentpostcode`, `dob`, `jscinstitute`, `jscboard`, `jscyear`, `jscresult`, `sscinstitute`, `sscboard`, `sscyear`, `sscresult`, `hscinstitute`, `hscboard`, `hscyear`, `hscresult`, `gender`, `bscmajor`, `bscminor`, `bscinstitute`, `bscyear`, `bscresult`, `mscmajor`, `mscminor`, `mscinstitute`, `mscyear`, `mscresult`, `phdmajor`, `phdminor`, `phdinstitute`, `phdyear`, `phdresult`, `lecturerorganization`, `lecturertimefrom`, `lecturertimeto`, `lecturerremarks`, `assistorganization`, `assisttimefrom`, `assisttimeto`, `assistremarks`, `associateorganization`, `associatetimefrom`, `associatetimeto`, `associateremarks`, `professororganization`, `professortimefrom`, `professortimeto`, `professorremarks`, `postdocorganization`, `postdoctimefrom`, `postdoctimeto`, `postdocremarks`, `listofauthors`, `type`, `pubinfo`, `pagenumber`, `yearpub`, `graduatedegree`, `graduatethesistitle`, `graduateresearcharea`, `graduatemonth`, `graduateyear`) VALUES('". $_POST['tid'] ."',' ". $_POST['fname']."',' ".$_POST['mname']."',' ".$_POST['lname']."',' ".$_POST['fathername']."',' ".$_POST['mothername']."',' ".$_POST['presenthouseno']."',' ".$_POST['presentlocation']."',' ".$_POST['presentvillagestreet']."',' ".$_POST['presentthana']."',' ".$_POST['presentdistrict']."',' ".$_POST['presentpostcode']."',' ".$_POST['permanenthouseno']."',' ".$_POST['permanentlocation']."',' ".$_POST['permanentvillagestreet']."',' ".$_POST['permanentthana']."',' ".$_POST['permanentdistrict']."',' ".$_POST['permanentpostcode']."',' ".$_POST['dob']."',' ".$_POST['institutejsc']."',' ".$_POST['boardjsc']."',' ".$_POST['yearjsc']."',' ".$_POST['resultjsc']."',' ".$_POST['institutessc']."',' ".$_POST['boardssc']."',' ".$_POST['yearssc']."',' ".$_POST['resultssc']."',' ".$_POST['institutehsc']."',' ".$_POST['boardhsc']."',' ".$_POST['yearhsc']."',' ".$_POST['resulthsc']."',' ".$_POST['gender'].", ".$_POST['bscmajor']."',' ".$_POST['bscminor']."',' ".$_POST['bscinstitute']."',' ".$_POST['bscyear']."',' ".$_POST['bscresult']."',' ".$_POST['mscmajor']."',' ".$_POST['mscminor']."',' ".$_POST['mscinstitute']."',' ".$_POST['mscyear']."',' ".$_POST['mscresult']."',' ".$_POST['phdmajor']."',' ".$_POST['phdminor']."',' ".$_POST['phdinstitute']."',' ".$_POST['phdyear']."',' ".$_POST['phdresult']."',' ".$_POST['lecturerorganization']."',' ".$_POST['lecturertimefrom']."',' ".$_POST['lecturertimeto']."',' ".$_POST['lecturerremarks']."',' ".$_POST['assistorganization']."',' ".$_POST['assisttimefrom']."',' ".$_POST['assisttimeto']."',' ".$_POST['assistremarks']."',' ".$_POST['associateorganization']."',' ".$_POST['associatetimefrom']."',' ".$_POST['associatetimeto']."',' ".$_POST['associateremarks']."',' ".$_POST['professororganization']."',' ".$_POST['professortimefrom']."',' ".$_POST['professortimeto']."',' ".$_POST['professorremarks']."',' ".$_POST['postdocorganization']."',' ".$_POST['postdoctimefrom']."',' ".$_POST['postdoctimeto']."',' ".$_POST['postdocremarks']."',' ".$_POST['listofauthors']."',' ".$_POST['type']."',' ".$_POST['pubinfo']."',' ".$_POST['pagenumber']."',' ".$_POST['yearpub']."',' ".$_POST['graduatedegree']."',' ".$_POST['graduatethesistitle']."',' ".$_POST['graduateresearcharea']."',' ".$_POST['graduatemonth']."',' ".$_POST['graduateyear']."')";

        $query = mysqli_query($conn, $sql);

        if(!$query)
        echo mysqli_error($conn);

    }
?>
</html>