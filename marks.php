<?php
include_once 'conn.php';
$en = $_GET['e'];

$sql = "SELECT * FROM marks;";
        $result = mysqli_query($conn, $sql);
        $checkresult = mysqli_num_rows($result);

        if($checkresult > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($row['enrollment']== $en)
                {
                    $ds = $row['ds'];
                    $coa = $row['coa'];
                    $fcs = $row['fcs'];
                    $ee = $row['ee'];
                    $dm = $row['dm'];
                    $pl = $row['pl'];
                    $dsl = $row['dsl'];
                    $mp = $row['mp'];
                    $sgpa3 = $row['sgpa3'];

                    $ephy = $row['ephy'];
                    $pps = $row['pps'];
                    $phyl = $row['phyl'];
                    $ppsl = $row['ppsl'];
                    $ew = $row['ew'];
                    $odeac = $row['odeac'];
                    $dem = $row['dem'];
                    $deml = $row['deml'];
                    $sgpa2 = $row['sgpa2'];

                    $lac = $row['lac'];
                    $ec = $row['ec'];
                    $beee = $row['beee'];
                    $eg = $row['eg'];
                    $eng = $row['eng'];
                    $beeel = $row['beeel'];
                    $engl = $row['engl'];
                    $ecl = $row['ecl'];
                    $sgpa1 = $row['sgpa1'];

                    $cgpa1 = round($sgpa1,2);
                    $cgpa2 = round(($sgpa1+$sgpa2)/2,2);
                    $cgpa3 = round(($sgpa1+$sgpa2+$sgpa3)/3,2);
                }
            }
        }

        $sql = "SELECT * FROM info;";
        $result = mysqli_query($conn, $sql);
        $checkresult = mysqli_num_rows($result);

        if($checkresult > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($row['enroll']== $en)
                {
                    $name = $row['name'];
                    $father = $row['father'];
                    $mother = $row['mother'];
                    $mob = $row['mobno'];
                    $email = $row['email'];
                    $batch = $row['batch'];
                    $blood = $row['blood'];
                    $address = $row['address'];
                    $dob = $row['dob'];
                    $course = $row['course'];
                }
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $name ?>'s information</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> 
</head>
<body style="background-image:url('bg.jpg');">
<img src="logo.png" style="width:20%">
<div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
	<!--Main Col-->
	<div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-90 mx-6 lg:mx-0">
	

		<div class="p-4 md:p-12 text-center lg:text-left">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" style="background-image: url('\\idimage\\<?php echo $en ?>.jpg')"></div>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0"><?php echo $name ?></h1>
			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
            <p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg> <?php echo $course ?></p>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg> <?php echo $en ?> <details>Batch: <?php echo $batch ?> <br> Father's name: <?php echo $father ?> <br>Mother's name: <?php echo $mother ?><br>E-mail: <?php echo $email ?><br>Mobile: <?php echo $mob ?> <br> Blood Group: <?php echo $blood ?><br>D.O.B.: <?php echo $dob ?><br></details></p>
			<p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/></svg> <?php echo $address ?>, <b>India</b> </p>
			

			<!-- Use https://simpleicons.org/ to find the svg for your preferred product --> 

		</div>

	</div>
	
	<!--Img Col-->
	<div class="w-full lg:w-2/5">
		<!-- Big profile image for side bar (desktop) -->
		<img src="\idimage\<?php echo $en ?>.jpg" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
		<!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
		
	</div>
	
	
	<!-- Pin to top right corner -->
	  <div class="absolute top-0 right-0 h-12 w-18 p-4">
		<button class="js-change-theme focus:outline-none">🌙</button>
	  </div>

</div>
    
	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.link',{
		  placement: 'bottom'
		})

		//Toggle mode
		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');
		
		
		toggle.addEventListener('click', () => {

		  if (body.classList.contains('text-gray-900')) {
			toggle.innerHTML = "☀️";
			body.classList.remove('text-gray-900');
			body.classList.add('text-gray-100');
			profile.classList.remove('bg-white');
			profile.classList.add('bg-gray-900');
		  } else
		  {
			toggle.innerHTML = "🌙";
			body.classList.remove('text-gray-100');
			body.classList.add('text-gray-900');
			profile.classList.remove('bg-gray-900');			
			profile.classList.add('bg-white');
			
		  }
		});
		
    </script>



<details style="color:white; padding: 17px; border: 1px solid white; border-radius:30px ; margin: 0px 10px">
    <summary style="font-size: 150%; text-align: center;"><b >Semester End Examinations December 2021</b></summary>


    <div style="background-color:black; color:white; ">
<div style="margin :15% 10%; border:3px solid white;">

<table style="margin-bottom:0px; width:100%;" class="table table-sm borderless table-hover">
<tbody>
    <tr> 
        <!-- Institute name-->
        <td style="padding-top: 11px; text-align:center; font-size:14pt;font-weight:bold;" colspan="2">MIT School of Engineering</td>
    </tr>
    <tr>
        <td style="text-align:center; font-weight:bold; font-size:20pt;" colspan="2">GRADE CARD</td>
    </tr>
    <tr><!-- Program name-->
    <td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">B. Tech. (Information Technology)</td>
</tr>
<tr><!-- Semester name-->
<td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">Third Semester</td>
</tr>
<tr><!-- Exam season name-->
<td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">Semester End Examinations December 2021</td>
</tr>
</tbody>
</table>

<div style="margin:2% 10%;">
<table style="border-collapse: collapse; width:100%;">
<tbody>
    <tr>
        <td style="padding:2px;font-weight:bold;text-align:left;border: 1px solid white; width:15%">Course Code</td>
        <td style="padding:5px;font-weight:bold;text-align:left;border: 1px solid white; padding-left: 5px; width:50%">Course Name</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8.5%">CR</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8.5%">GR</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:10%">Result</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8%">Rmk</td>
    </tr>
    <!-- Results rows	-->
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT301</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296738">Data Structures</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $ds ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT302</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296770">Computer Organization &amp; Architecture</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">3</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $coa ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT303</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296802">Fundamentals of Communication Systems</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $fcs ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT304</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296834">Economics for Engineers</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $ee ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTMT305</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296866">Discrete Mathematics</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $dm ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT311</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296898">Programming Laboratory</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">2</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $pl ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT312</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296930">Data Structures Laboratory</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">2</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $dsl ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT321</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296962">Mini Project - I</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">1</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $mp ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
</tbody>
</table>


<table style="border-collapse: collapse; width:100%;">
<tbody>
    <tr style="border-bottom: 1px solid white; width:12%">
        <td style="border-left: 1px solid white;"></td>
        <td style="padding:5px;text-align:left; font-weight:bold; width:35%;">Credits Completed: 24</td>
        <td style="padding:5px;text-align:center; font-weight:bold; width:29%;">Credits Registered: 24</td>
        <td style="padding:5px;text-align:right; font-weight:bold; border-right: 1px solid white; width:24%;">SGPA: <?php echo $sgpa3 ?></td>
    </tr>
</tbody>
</table>


<table style="margin-top: 25px; border-collapse: collapse; width:70%;" align="center">
<tbody>
    <tr style="border-top: 1px solid white;">
        <td style="padding:5px;text-align:center; font-weight:bold; font-size:12pt; text-decoration: underline; border-left: 1px solid white;border-right: 1px solid white;" colspan="2">Cumulative Record</td>
    </tr>
    <tr>
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white; padding-left:4px">Credits Completed: 60</td>
        <td style="width:20%; font-weight:bold;border-right: 1px solid white; padding-right: 4px"> <?php if($cgpa3>=8){echo "First Class with Distinction"; }else{echo "First Class";} ?> </td>
    </tr>
    <tr>
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white;border-right: 1px solid white;" colspan="2">Credits Registered: 60</td>
    </tr>
    <tr style="border-bottom: 1px solid white;">
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white; padding-left:4px">CGPA: <?php echo $cgpa3 ?></td>
        <td style="width:20%; text-align:left; font-weight:bold;border-right: 1px solid white; padding-right: 4px"></td>
    </tr>
</tbody>
</table>
</div>
</div>
</details>


<br><br>



<details style="color:white; padding: 17px; border: 1px solid white; border-radius:30px ; margin: 0px 10px">
    <summary style="font-size: 150%; text-align: center;"><b>End Semester Examinations June - July 2021</b></summary>

    <div style="margin :15% 10%; border:3px solid white;color:white">
<table style="margin-bottom:0px; width:100%;" class="table table-sm borderless table-hover">
<tbody>
    <tr> 
        <!-- Institute name-->
        <td style="padding-top: 11px; text-align:center; font-size:14pt;font-weight:bold;" colspan="2">MIT School of Engineering</td>
    </tr>
    <tr>
        <td style="text-align:center; font-weight:bold; font-size:20pt;" colspan="2">GRADE CARD</td>
    </tr>
    <tr><!-- Program name-->
    <td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">B. Tech. (Information Technology)</td>
</tr>
<tr><!-- Semester name-->
<td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">Second Semester</td>
</tr>
<tr><!-- Exam season name-->
<td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">End Semester Examinations June - July 2021</td>
</tr>
</tbody>
</table>


<div style="margin:2% 10%;">
<table style="border-collapse: collapse; width:100%;">
<tbody>
    <tr>
        <td style="padding:2px;font-weight:bold;text-align:left;border: 1px solid white; width:15%">Course Code</td>
        <td style="padding:5px;font-weight:bold;text-align:left;border: 1px solid white; padding-left: 5px; width:50%">Course Name</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8.5%">CR</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8.5%">GR</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:10%">Result</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8%">Rmk</td>
    </tr>
    <!-- Results rows	-->
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">20BTPY002	</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296738">Engineering Physics	</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $ephy ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTCS006</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296770">Programming for Problem Solving	</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">3</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $pps ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">20BTPY012</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296802">Physics Laboratory</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $phyl ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTCS016</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296834">Programming Lab	</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $ppsl ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTME017</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296866">Engineering Workshop	</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $ew ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTMT201</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296898">Ordinary Differential Equations and Advanced Calculus	</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">2</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $odeac ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT202</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296930">Digital Electronics and Microprocessors</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">2</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $dem ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTIT212</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296962">Digital Electronics and Microprocessors Laboratory</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">1</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $deml ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
</tbody>
</table>


<table style="border-collapse: collapse; width:100%;">
<tbody>
    <tr style="border-bottom: 1px solid white; width:12%">
        <td style="border-left: 1px solid white;"></td>
        <td style="padding:5px;text-align:left; font-weight:bold; width:35%;">Credits Completed: 18</td>
        <td style="padding:5px;text-align:center; font-weight:bold; width:29%;">Credits Registered: 18</td>
        <td style="padding:5px;text-align:right; font-weight:bold; border-right: 1px solid white; width:24%;">SGPA: <?php echo $sgpa2 ?></td>
    </tr>
</tbody>
</table>


<table style="margin-top: 25px; border-collapse: collapse; width:70%;" align="center">
<tbody>
    <tr style="border-top: 1px solid white;">
        <td style="padding:5px;text-align:center; font-weight:bold; font-size:12pt; text-decoration: underline; border-left: 1px solid white;border-right: 1px solid white;" colspan="2">Cumulative Record</td>
    </tr>
    <tr>
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white; padding-left:4px">Credits Completed: 18</td>
        <td style="width:20%; font-weight:bold;border-right: 1px solid white; padding-right: 4px"> <?php if($cgpa2>=8){echo "First Class with Distinction"; }else{echo "First Class";} ?> </td>
    </tr>
    <tr>
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white;border-right: 1px solid white;" colspan="2">Credits Registered: 18</td>
    </tr>
    <tr style="border-bottom: 1px solid white;">
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white; padding-left:4px">CGPA: <?php echo $cgpa2 ?></td>
        <td style="width:20%; text-align:left; font-weight:bold;border-right: 1px solid white; padding-right: 4px"></td>
    </tr>
</tbody>
</table>
</div>
</div>
</details>



<br><br>


<details style="color:white; padding: 17px; border: 1px solid white; border-radius:30px ; margin: 0px 10px">
    <summary style="font-size: 150%; text-align: center;"><b>Semester End Examinations March 2021</b></summary>

    <div style="margin :15% 10%; border:3px solid white; color:white">
<table style="margin-bottom:0px; width:100%;" class="table table-sm borderless table-hover">
<tbody>
    <tr> 
        <!-- Institute name-->
        <td style="padding-top: 11px; text-align:center; font-size:14pt;font-weight:bold;" colspan="2">MIT School of Engineering</td>
    </tr>
    <tr>
        <td style="text-align:center; font-weight:bold; font-size:20pt;" colspan="2">GRADE CARD</td>
    </tr>
    <tr><!-- Program name-->
    <td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">B. Tech. (Information Technology)</td>
</tr>
<tr><!-- Semester name-->
<td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">First Semester</td>
</tr>
<tr><!-- Exam season name-->
<td style="text-align:center; font-size:12pt;font-weight:bold;" colspan="2">Semester End Examinations March 2021</td>
</tr>
</tbody>
</table>
<div style="margin:2% 10%;">
<table style="border-collapse: collapse; width:100%;">
<tbody>
    <tr>
        <td style="padding:2px;font-weight:bold;text-align:left;border: 1px solid white; width:15%">Course Code</td>
        <td style="padding:5px;font-weight:bold;text-align:left;border: 1px solid white; padding-left: 5px; width:50%">Course Name</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8.5%">CR</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8.5%">GR</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:10%">Result</td>
        <td style="padding:5px;font-weight:bold;text-align:center;border: 1px solid white; width:8%">Rmk</td>
    </tr>
    <!-- Results rows	-->
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTMT101</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296738">Linear Algebra and Calculus</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $ds ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTCH003</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296770">Engineering Chemistry</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">3</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $coa ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">20BTEC005</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296802">Basics of Electrical and Electronics Engineering</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $fcs ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTME011</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296834">	Engineering Graphics</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $ee ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">20BTEG104</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296866">English Communication for Engineers	</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">4</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $dm ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">18BTEC015</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296898">Basics of Electrical and Electronics Engineering Lab	</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">2</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $pl ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">20BTEG114</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296930">English Communication for Engineers Laboratory</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">2</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $dsl ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
    <tr style="font-size:11pt;">
        <td style="padding:2px;text-align:left; border: 1px solid white;">20BTCH013</td>
        <td style="padding:5px;border: 1px solid white;"><span class="wfid_temp1161296962">	Chemistry Laboratory</span></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">1</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;"><?php echo $mp ?></td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">PASS</td>
        <td style="padding:2px;text-align:center; text-align:center; border: 1px solid white;">CA</td>
    </tr>
</tbody>
</table>


<table style="border-collapse: collapse; width:100%;">
<tbody>
    <tr style="border-bottom: 1px solid white; width:12%">
        <td style="border-left: 1px solid white;"></td>
        <td style="padding:5px;text-align:left; font-weight:bold; width:35%;">Credits Completed: 18</td>
        <td style="padding:5px;text-align:center; font-weight:bold; width:29%;">Credits Registered: 18</td>
        <td style="padding:5px;text-align:right; font-weight:bold; border-right: 1px solid white; width:24%;">SGPA: <?php echo $sgpa1 ?></td>
    </tr>
</tbody>
</table>


<table style="margin-top: 25px; border-collapse: collapse; width:70%;" align="center">
<tbody>
    <tr style="border-top: 1px solid white;">
        <td style="padding:5px;text-align:center; font-weight:bold; font-size:12pt; text-decoration: underline; border-left: 1px solid white;border-right: 1px solid white;" colspan="2">Cumulative Record</td>
    </tr>
    <tr>
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white; padding-left:4px">Credits Completed: 18</td>
        <td style="width:20%; font-weight:bold;border-right: 1px solid white; padding-right: 4px"> <?php if($cgpa1>=8){echo "First Class with Distinction"; }else{echo "First Class";} ?> </td>
    </tr>
    <tr>
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white;border-right: 1px solid white;" colspan="2">Credits Registered: 18</td>
    </tr>
    <tr style="border-bottom: 1px solid white;">
        <td style="padding:5px; width:30%; text-align:left; font-weight:bold;border-left: 1px solid white; padding-left:4px">CGPA: <?php echo $cgpa1 ?></td>
        <td style="width:20%; text-align:left; font-weight:bold;border-right: 1px solid white; padding-right: 4px"></td>
    </tr>
</tbody>
</table>
</div>
</div>
</details>

<br><br><br><br><br>

</div>
</body>
</html>