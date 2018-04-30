
 <?php
if (isset($_SESSION['types']))
   {
   	$num=$_SESSION['types'];
   	if ($num==1)
   	{ echo"<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr'>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title>Insurance Company</title>
		<!-- Start css3menu.com HEAD section -->
	<link rel='stylesheet' href='CSS3 Menu_files/css3menu1/style.css' type='text/css' /><style type='text/css'>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->


</head>
<body> <center><br>
<!-- Start css3menu.com BODY section -->
<ul id='css3menu1' class='topmenu'>
<input type='checkbox' id='css3menu-switcher' class='switchbox'><label onclick='' class='switch' for='css3menu-switcher'></label>
<li class='topmenu'><a href='admin.php' target='_parent' style='height:16px;line-height:16px;'><span>Home</span></a>

	<li class='topmenu'><a href='#' target='_parent' style='height:16px;line-height:16px;'><span>Menu</span></a>
	<ul>
		<li class='subfirst'><a href='person.php'>New Person</a></li>
		<li><a href='cars.php'>New Car</a></li>
		<li><a href='police.php'>New Police</a></li>
		<li><a href='towing.php'>New Towing Company</a></li>
		<li class='sublast'><a href='insurance.php'>New Insurance Company</a></li>
	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>Reports</span></a>
	<ul>
		<li class='subfirst'><a href='owner.php'>List Of Reports For One Person</a></li>
		<li class='sublast'><a href='date.php'>Date to Date</a></li>
	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>Accidents</span></a>
	<ul>
		<li class='sublast'><a href='add.php'><span>New Accident</span></a>
		</li>
	</ul></li>

	<li class='topmenu'><a href='#' target='_parent' style='height:16px;line-height:16px;'><span>View</span></a>
	<ul>
		<li class='subfirst'><a href='personlist.php'>List Of Persons</a></li>
		<li><a href='carlist.php'>List Of Cars</a></li>
		<li><a href='policelist.php'>List Of Police Personnel</a></li>
		<li><a href='towinglist.php'>List Of Towing Companies</a></li>
		<li class='sublast'><a href='insurancelist.php'>List Of Insurance Companies</a></li>
		<li class='sublast'><a href='locationlist.php'>List Of Locations</a></li>
	</ul></li>
		
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>About Us</span></a>
	<ul>
		<li class='subfirst'><a href='select.php?id=1'>Zahin</a></li>
			<li class='sublast'><a href='select.php?id=2'>Kafi</a></li>
			<li class='sublast'><a href='select.php?id=3'>Alamin</a></li>
	</ul></li>
	<li class='topmenu'><a href='logout.php' style='height:16px;line-height:16px;'>Logout</a></li>
</ul><p class='_css3m'><a href='http://css3menu.com/'>css menu generator</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->

</body>
</html>
";

    }
    elseif ($num==2)
    {
     echo"<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr'>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title>Insurance Company</title>
		<!-- Start css3menu.com HEAD section -->
	<link rel='stylesheet' href='CSS3 Menu_files/css3menu1/style.css' type='text/css' /><style type='text/css'>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->


</head>
<body> <center><br>
<!-- Start css3menu.com BODY section -->
<ul id='css3menu1' class='topmenu'>
<input type='checkbox' id='css3menu-switcher' class='switchbox'><label onclick='' class='switch' for='css3menu-switcher'></label>
<li class='topmenu'><a href='supervisor.php' target='_parent' style='height:16px;line-height:16px;'><span>Home</span></a>

	<li class='topmenu'><a href='#' target='_parent' style='height:16px;line-height:16px;'><span>Menu</span></a>
	<ul>
		<li class='subfirst'><a href='person.php'>New Person</a></li>
		<li><a href='cars.php'>New Car</a></li>
		<li><a href='police.php'>New Police</a></li>
		<li><a href='towing.php'>New Towing Company</a></li>
		<li class='sublast'><a href='insurance.php'>New Insurance Company</a></li>
	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>Reports</span></a>
	<ul>
		<li class='subfirst'><a href='owner.php'>List Of Reports For One Person</a></li>
		<li class='sublast'><a href='date.php'>Date to Date</a></li>
	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>Accidents</span></a>
	<ul>
		<li class='sublast'><a href='add.php'><span>New Accident</span></a>
		</li>
	</ul></li>
	<li class='topmenu'><a href='#' target='_parent' style='height:16px;line-height:16px;'><span>View</span></a>
	<ul>
		<li class='subfirst'><a href='personlist.php'>List Of Persons</a></li>
		<li><a href='carlist.php'>List Of Cars</a></li>
		<li><a href='policelist.php'>List Of Police Personnel</a></li>
		<li><a href='towinglist.php'>List Of Towing Companies</a></li>
		<li class='sublast'><a href='insurancelist.php'>List Of Insurance Companies</a></li>
		<li class='sublast'><a href='locationlist.php'>List Of Locations</a></li>
	</ul></li>
		<ul>
		<li class='sublast'><a href='add.php'><span>About Us</span></a>
		<ul>
			<li class='subfirst'><a href='select.php?id=1'>Zahin</a></li>
			<li class='sublast'><a href='select.php?id=2'>Kafi</a></li>
			<li class='sublast'><a href='select.php?id=3'>Alamin</a></li>
		</ul></li>
	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>About Us</span></a>
	<ul>
		<li class='subfirst'><a href='select.php?id=1'>Zahin</a></li>
			<li class='sublast'><a href='select.php?id=2'>Kafi</a></li>
			<li class='sublast'><a href='select.php?id=3'>Alamin</a></li>
	</ul></li>
	<li class='topmenu'><a href='logout.php' style='height:16px;line-height:16px;'>Logout</a></li>
</ul><p class='_css3m'><a href='http://css3menu.com/'>css menu generator</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->

</body>
</html>
";


    }
   elseif($num==3)
   {
   	echo"<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr'>
<head>
	<meta http-equiv='content-type' content='text/html; charset=utf-8' />
	<title>Insurance Company</title>
		<!-- Start css3menu.com HEAD section -->
	<link rel='stylesheet' href='CSS3 Menu_files/css3menu1/style.css' type='text/css' /><style type='text/css'>._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->


</head>
<body> <center><br>
<!-- Start css3menu.com BODY section -->
<ul id='css3menu1' class='topmenu'>
<input type='checkbox' id='css3menu-switcher' class='switchbox'><label onclick='' class='switch' for='css3menu-switcher'></label>
<li class='topmenu'><a href='Secretary.php' target='_parent' style='height:16px;line-height:16px;'><span>Home</span></a>

	<li class='topmenu'><a href='#' target='_parent' style='height:16px;line-height:16px;'><span>Menu</span></a>
	<ul>
		<li class='subfirst'><a href='location.php'>New Location</a></li>
		<li><a href='road.php'>New Road Condition</a></li>
		<li><a href='weather.php'>New Weather Condition</a></li>

	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>Reports</span></a>
	<ul>
		<li class='subfirst'><a href='owner.php'>List Of Reports For One Person</a></li>
		<li class='sublast'><a href='date.php'>Date to Date</a></li>
	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>Accidents</span></a>
	<ul>
		<li class='sublast'><a href='add.php'><span>New Accident</span></a>
		</li>
	</ul></li>
	<li class='topmenu'><a href='#' target='_parent' style='height:16px;line-height:16px;'><span>View</span></a>
	<ul>


		<li class='sublast'><a href='locationlist.php'>List Of Locations</a></li>
	</ul></li>
		<ul>
		<li class='sublast'><a href='add.php'><span>About Us</span></a>
		<ul>
			<li class='subfirst'><a href='select.php?id=1'>Zahin</a></li>
			<li class='sublast'><a href='select.php?id=2'>Kafi</a></li>
			<li class='sublast'><a href='select.php?id=3'>Alamin</a></li>
		</ul></li>
	</ul></li>
	<li class='topmenu'><a href='#' style='height:16px;line-height:16px;'><span>About Us</span></a>
	<ul>
		<li class='subfirst'><a href='select.php?id=1'>Zahin</a></li>
			<li class='sublast'><a href='select.php?id=2'>Kafi</a></li>
			<li class='sublast'><a href='select.php?id=3'>Alamin</a></li>
	</ul></li>
	<li class='topmenu'><a href='logout.php' style='height:16px;line-height:16px;'>Logout</a></li>
</ul><p class='_css3m'><a href='http://css3menu.com/'>css menu generator</a> by Css3Menu.com</p>
<!-- End css3menu.com BODY section -->

</body>
</html>
";


   }

   }

        ?>