<?php
include('form.php');
?>


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vile Parle Premier League - Player Registration</title>
     
	

     <meta property="og:url"           content="http://www.vileparlepremierleague.in/playerregister.html" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Vile Parle Premier League - Player Registration" />
    <meta property="og:description"   content="Vile Parle Premier League is a football match league" />
    <meta property="og:image"         content="http://www.vileparlepremierleague.in/images/logo.jpg" />
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>


<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                          
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.html">
                        <h1><img src="images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutus.html">About us</a></li>
						<li class="dropdown"><a href="events.html">Events <i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
                                <li><a href="premierleague.html">Premier League</a></li>
                                <li><a href="championship.html">Championship </a></li>
                                <li><a href="youthleague.html">Youth League</a></li>
								<li><a href="girlsleague.html">Girls League</a></li>
                                <li><a href="auction.html">Player Auction  </a></li>
                                <li><a href="games.html">Exhibition games </a></li>
								<li><a href="prcup.html">F.L.C</a></li>
								<li><a href ="other.html"> Other </a></li>
							</ul>
                        </li>                       
						<li><a href="blog.html">Blog</a></li>
                        <li class="dropdown active"><a href="portfolio.html">Register <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li class="active"><a href="registration.html">Player</a></li>
                                <li><a href="coachregister.html">Coach</a></li>
                                <li><a href="ownerregister.html">Owner</a></li>
                            </ul>
						</li>
						<li><a href="schedule.html">Schedule</a></li>
						<li><a href="contactus.html">Contact us</a></li>  
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

 <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <div>
                            	<h1 class="title">Registration </h1>
                            	<p><center><a href="http://www.kickforall.com/" target="_blank"><img src="images/spons/kick.png"></a></center></p> 
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            
                            </div>
                            
                            <div class="social-link">
                                <span><a href="https://www.facebook.com/parlepremierleague"><i class="fa fa-facebook"></i></a></span>
                                <span><a href="https://twitter.com/VPPL_"><i class="fa fa-twitter"></i></a></span>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section>
   
		<div class="container">
			<h1 class="title">Personal Information</h1>
			<hr>
			<form  action=" " method="post" onsubmit="return check();" enctype="multipart/form-data"  > 
			<fieldset><span style="color:red"><?php echo $error; ?></span>
				<table style="width:100%;"><tr>
			<td><div class="form-group" style="padding-right:10px;">
				<label for="fname">First Name</label>
				<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
			</div></td>
			<td><div class="form-group" style="padding-right:10px;">
				<label for="mname">Middle Name</label>
				<input type="text" class="form-control" id="sname" name="mname" placeholder="Middle Name" required>
			</div></td>
			<td><div class="form-group">
				<label for="sname">Surname</label>
				<input type="text" class="form-control" id="sname" name="sname" placeholder="Surname" required>
			</div></td>
				</tr></table>
			<div class="form-group">
				<label for="email">Email ID</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email ID" required>
			</div>
			<div class="form-group">
				<label>Date Of Birth</label><br>
				<table style="width:100%;"><tr>
				<td style="padding-right:10px;"><label for="d">Date</label>
				<select id="date" name="date" required class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select></td>
				
				<td style="padding-right:10px;"><label for="m">Month</label>
				<select id="date" name="month" required class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select></td>

				<td><label for="y">Year</label>
				<select id="date" name="year" required class="form-control">
					<option>1991</option>
					<option>1992</option>
					<option>1993</option>
					<option>1994</option>
					<option>1995</option>
					<option>1996</option>
					<option>1997</option>
					<option>1998</option>
					<option>1999</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>
					<option>2006</option>
					<option>2007</option>
				</select></td>
				</tr>
				</table>
			</div>
			<div class="form-group">
				<label>Height</label><br>
				<table style="width:100%;"><tr>
				<td style="padding-right:10px;"><label for="d">Foot</label>
				<select id="date" name="hfoot" required class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>9</option>
					<option>10</option>
				</select></td>
				
				<td><label for="y">Inch</label>
				<select id="date" name="hinch" required class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
				</select></td>
				</tr>
				</table>
			</div>
			<div class="form-group">
				<label for="weight">Weight (in Kg)</label>
				<input type="number" class="form-control" id="weight" name="weight" min="1" max="150" required>
			</div>
			<div class="form-group">
				<label for="age">Age</label>
				<input type="text" class="form-control" id="age" name="age" required>
			</div>
			<div class="form-group">
				<label for="age">Educational Qualification</label>
				<select id="sname" name="educationalq" class="form-control">
					<option>Others</option>
					<option>in 10TH</option>
					<option>in 12TH</option>
					<option>in 11TH</option>
					<option>Engineering</option>
					<option>Commerce</option>
					<option>In Secondary School (5th std-9th std )</option>
					
				</select>
			</div>
			<div class="form-group">
				<label for="add1">Address</label>
				<input type="text" class="form-control" id="add1" name="add1" required> 
<br>

                        <div class="form-group">
				<label for="pincode">Area Pincode</label>
				<input type="text" class="form-control" id="pincode" name="pincode"
				maxlength="6" placeholder="400000" required>
	
		</div>                           

			</div>
			<div class="form-group">
				<label for="reg">Region</label>
				<select id="reg" name="region" class="form-control">
					<option style="font-size:20px;font-weight: bold;font-variant: small-caps;"disabled>Western Line</option>
<option>Default</option>
					<option>Vile Parle (East)</option>
					<option>Vile Parle (West)</option>
					<option>Churchgate</option>							
					<option>Marine Lines</option>	
					<option>Charni Road</option>
					<option>Grant Road</option>
					<option>Mumbai Central</option>
					<option>Mahalaxmi</option>
					<option>Lower Parel</option>
					<option>Elphinstone Road</option>
					<option>Dadar</option>					
					<option>Matunga Road</option>							
					<option>Mahim</option>							
					<option>Bandra</option>							
					<option>Khar Road</option>							
					<option>Santacruz</option>							
					<option>Andheri</option>							
					<option>Jogeshwari</option>							
					<option>Goregaon</option>							
					<option>Malad</option>							
					<option>Kandivali</option>							
					<option>Borivali</option>							
					<option>Dahisar</option>							
					<option>Mira Road</option>							
					<option>Bhayandar</option>							
					<option>Naigaon</option>							
					<option>Vasai Road</option>							
					<option>Nala Sopara</option>							
					<option>Virar</option>							
					<option>Vaitarna</option>							
					<option>Saphale</option>							
					<option>Kelve Road</option>							
					<option>Palghar</option>							
					<option>Umroli</option>							
					<option>Boisar</option>							
					<option>Vangaon</option>							
					<option>Dahanu Road</option>							
					<option style="font-size:20px;font-weight: bold;font-variant: small-caps;"disabled>Central Line</option>
					<option>Chhatrapati Shivaji Terminus (CST)</option>							
					<option>Masjid Bunder							</option>
					<option>Sandhurst Road							</option>
					<option>Byculla							</option>
					<option>Chinchpokli							</option>
					<option>Mahalaxmi							</option>
					<option>Currey Road							</option>
					<option>Sion (Sheev)							</option>
					<option>Kurla							</option>
					<option>Vidyavihar							</option>
					<option>Ghatkopar							</option>
					<option>Vikhroli							</option>
					<option>Khar Road							</option>
					<option>Kanjurmarg							</option>
					<option>Bhandup							</option>
					<option>Jogeshwari							</option>
					<option>Nahur							</option>
					<option>Mulund							</option>
					<option>Thane							</option>
					<option>Kalwa							</option>
					<option>Mumbra							</option>
					<option>Diwa							</option>
					<option>Dombivli							</option>
					<option>Naigaon							</option>
					<option>Thakurli							</option>
					<option>Kalyan							</option>
					<option>Vitthalwadi							</option>
					<option>Ulhasnagar							</option>
					<option>Ambarnath							</option>
					<option>Badlapur							</option>
					<option>Vangani							</option>
					<option>Shelu							</option>
					<option>Neral							</option>
					<option>Bhivpuri Road							</option>
					<option>Dahanu Road							</option>
					<option>Bhivpuri Road							</option>
					<option>Karjat						</option>
					<option>Palasdari							</option>
					<option>Kelavli							</option>
					<option>Dolavli							</option>
					<option>Lowjee							</option>
					<option>Khopoli							</option>
					<option>Shahad							</option>
					<option>Ambivli							</option>
					<option>Titwala							</option>
					<option>Khadavli							</option>
					<option>Vasind							</option>
					<option>Asangaon							</option>
					<option>Atgaon							</option>
					<option>Khardi							</option>
					<option>Kasara							</option>
					<option style="font-size:20px;font-weight: bold;font-variant: small-caps;"disabled>Harbour Line</option>
					<option>Dockyard Road						</option>	
					<option>Reay Road							</option>
					<option>Cotton Green							</option>
					<option>Sewri							</option>
					<option>Wadala road</option>
					<option>King’s Circle		</option>					
					<option>Guru Tegh Bahadur Nagar (G.T.B. Nagar)</option>							
					<option> Chunabhatti							</option>
					<option>Tilak Nagar							</option>
					 <option>Chembur							</option>
					<option>Govandi							</option>
					<option>Mankhurd							</option>
					<option>Vashi							</option>
					 <option>Sanpada							</option>
					<option>Juinagar							</option>
					<option>Nerul							</option>
					<option>Seawoods							</option>
					 <option>Belapur							</option>
					<option>Khargar							</option>
					<option>Mansarovar							</option>
					 <option>Khandeshwar							</option>
					<option>Panvel							</option>
					<option>Sanpada							</option>
					<option>Turbhe							</option>
					<option>Kopar Khairane							</option>
					<option>Ghansoli							</option>
					 <option>Airoli							</option>
					<option>Diwa							</option>
					<option>Bhiwandi							</option>
					<option>Kharbav							</option>
					 <option>Kaman							</option>
					<option>Vasai Road							</option>
					<option>Rabale							</option>
					<option>Nhavashiva							</option>
					<option>Targhar							</option>
					<option>Other							</option>
				</select>
			</div>
			<div class="form-group">
				<label for="mno">Mobile Number</label>
				<input type="text" class="form-control" id="mno" name="mno" maxlength="10" placeholder="8888888888" required>
				<p class="help-block">Insert a working mobile number. Verification code would be sent on this number. This number would be used to make calls and send messages for the trials.</p>
			</div>
			<div class="form-group">
				<label for="ono">Other Contact No</label>
				<input type="text" class="form-control" id="ono" name="ono" maxlength="10" placeholder="8888888888">
			</div>
			<div class="form-group">
				<label for="rno">Residential No</label>
				<input type="text" class="form-control" id="rno" name="rno" maxlength="10" placeholder="8888888888">
			</div>
			<hr>
			<h1>Football Skills</h1>
			<hr>
			
                        <div class="form-group">
			<label>Have you been a part of Vile Parle Premier League before?:-</label>
			<table style="width:60%;"><tr>
			<td><div class="radio">
				<label>
					<input type="radio" name="pf1" id="Y" value="Yes" checked>Yes
				</label> 
                        </div></td>
			<td><div class="radio">
				<label>
					<input type="radio" name="pf1" id="N" value="No">No
				</label>
			</div></td>
</tr></table>
			</div>


			<div class="form-group">
			<label>Preferred Foot:-</label>
			<table style="width:60%;"><tr>
			<td><div class="radio">
				<label>
					<input type="radio" name="pf" id="l" value="Left" checked>Left
				</label>
			</div></td>
			<td><div class="radio">
				<label>
					<input type="radio" name="pf" id="r" value="Right">Right
				</label>
			</div></td>
			<td><div class="radio">
				<label>
					<input type="radio" name="pf" id="b" value="Both">Both
				</label>
			</div></td>
			</tr></table>
			</div>
			
			<div class="form-group">
			<label>Trials Date </label>
			<p><b>
				<ul>
				<li>7 Feb 2016 (u-16 age group)Maheshwari ground</li> 
				<li>9 Feb 2016  Phase1 +Phase2 (u-18 age group )</li> 
				<li>13 Feb 2016  (u-21 age group)</li>
				<li>21 Feb 2016   Last date of trials</li> 
				<p><b><h3>TRIALS VENUE<h3><b>
				The A Team Sports & Events Pvt Ltd.
S4, Core 4, Supreme Business park,
Hiranandani gardens, Powai,
Mumbai – 400076. India.</p>
				</ul> 
			</b></p>
			</div>
			
			<div class="form-group">
			<label>Player Position:-</label>
			<select id="pp" name="pp" class="form-control">
				<option value = "GK">Goal Keeper</option>
				<option value = "F">Forward</option>
                                <option value = "MF">Midfielder</option>
                                <option value = "D">Defender</option>
                                
			</select>
			</div>
			<div class="form-group">
			<label>Player Position details :-</label>
			<p class="help-block">This position will not be considered during auction this position is only for the reference of owners</p>
			<select id="pp1" name="pp1" class="form-control">
				<option value = "GK">Goal Keeper</option>
				<option value = "CB">Central Defender(CB)</option>
                                <option value = "FB">Full Back(RB or LB)</option>
                                <option value = "DM">Defensive Midfielder(CDM)</option>
                                <option value = "CM">Central Midfielder(CM)</option>             
				<option value = "CAM">Central Attacking Midfielder(CAM)</option>
                                <option value = "LW">Left Winger(LW)</option>
                                <option value = "RW">Right Winger(RW)</option>                                              
				<option value = "ST">Striker(ST)</option>
                                <option value = "CF">Centre Forward(CF)</option>
			</select>
			</div>
			
			<hr>
			<div class="form-group">
				<label for="rno">Played For School</label>
				<table style="width:100%;"><tr>
				<td><div class="radio">
					<label>
						<input type="radio" name="pfs" id="pfs-yes" value="Yes">Yes
					</label>
				</div></td>
				<td><div class="radio">
					<label>
						<input type="radio" name="pfs" id="pfs-no" value="No" checked>No
					</label>
				</div></td>
				<td><input id="pfs" style="visibility:hidden;" type="text" class="form-control" name="schoolname" maxlength="20" placeholder="School Name"><p id="pfsh" style="visibility:hidden;" class="help-block">Max Length : 20</p></td></tr>
				</table>
			</div>
			<div class="form-group">
				<label for="rno">Played For College</label>
				<table style="width:100%;"><tr>
				<td><div class="radio">
					<label>
						<input type="radio" name="pfc" id="pfc-yes" value="Yes">Yes
					</label>
				</div></td>
				<td><div class="radio">
					<label>
						<input type="radio" name="pfc" id="pfc-no" value="No"checked>No
					</label>
				</div></td>
				<td><input id="pfc" style="visibility:hidden;" type="text" class="form-control" name="collegename" maxlength="20" placeholder="College Name"><p id="pfch" style="visibility:hidden;" class="help-block">Max Length : 20</p></td>
				</tr>
				</table>
			</div>
			
			<div class="form-group">
				<label for="rno">Played Any Other Tournament</label>
				<table style="width:100%;"><tr>
				<td><div class="radio">
					<label>
						<input type="radio" name="pft" id="pft-yes" value="Yes">Yes
					</label>
				</div></td>
				<td><div class="radio">
					<label>
						<input type="radio" name="pft" id="pft-no" value="No" checked>No
					</label>
				</div></td>
				<td><select id="pft1" style="visibility:hidden;" name="pft1" class="form-control">
					<option>None</option>
                               <option>I-League</option>
                                        <option>I-League U-18</option> 
                                        <option>I-League U-15</option> 
					<option>MDFA Elite Division</option>
					<option>MDFA Super Division</option>
					<option>MDFA 1st Division</option>
					<option>MDFA 2nd Division</option>
					<option>MDFA 3rd Division</option>
					<option>Bandra League</option>
					<option>Kalina League</option>
					<option>Premiership Football League</option>
					<option>Mulund Premier League</option>
					<option>Ulhasnagar Premier League</option>
					<option>Monsoon Premier League</option>
					<option>Sahar League</option>
					<option>Colaba Sports League</option>
				</select>
				</td>
				<td><select id="pft2" style="visibility:hidden;" name="pft2" class="form-control">
					<option>None</option>

                                        <option>I-League U-18</option> 
                                        <option>I-League U-15</option> 
					<option>MDFA Elite Division</option>
					<option>MDFA Super Division</option>
					<option>MDFA 1st Division</option>
					<option>MDFA 2nd Division</option>
					<option>MDFA 3rd Division</option>
					<option>Bandra League</option>
					<option>Kalina League</option>
					<option>Premiership Football League</option>
					<option>Mulund Premier League</option>
					<option>Ulhasnagar Premier League</option>
					<option>Monsoon Premier League</option>
					<option>Sahar League</option>
					<option>Colaba Sports League</option>
				</select>
				</td>
				</tr>
				</table>
			</div>
			
			<table><tr>
			<td><div class="form-group">
    			<label for="exampleInputFile">Photo Upload</label>
    			<input type="file" name="file" id="exampleInputFile" accept="image/*" onchange="loadFile(event)" required>
    			<p class="help-block">Individual passport size images and max image size 100kb.</p>
    			<p><img id="output"/></p>
  			</div></td>
			</tr></table>
			
			<input type="submit" value="Upload" class="btn btn-primary" name="submit">
			<span style="color:red"><?php echo $error; ?></span>
			
			
			<script type="text/javascript">
			function check()
			{
			var err = "<?php echo $error; ?>";
				
				
			if(err ==" ")
			{var r = alert("Sure to Upload..?");
					
			}
			
			
			return r;
			}
		</script>
			
			</fieldset>
			</form>
		</div>
		 
    </section>
    <div class="slider-container">
		<ul id="slider">
			<div>
			<li>
			<a href="http://maharashtratimes.indiatimes.com/"><center><img src="images/spons/mata.png">
			<a href="http://www.gatorade.com/"><img src="images/spons/gato.png"> </center>
			</a>
			</a>
			</li>
							
							</div>
							
		</ul>

				</div>
	</section>
      <section id="services">
        <div class="container">
            <div class="row">
             <h1><center> Contact us </center></h1>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            
                        </div>
                        
                        <h2>MEGHAN</h2>
                        <p>9594857055</P>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">
                           </div>
                        <h2>KIRAN</h2>
                        <p> 9833093409</P>
                    </div>
                </div>
                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                          
                        </div>
                        <h2>SATYENDRA</h2>
                        <p>8898781688</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <div> <h1>Trials Venue</h1>
<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="600" src="https://maps.google.com/maps?hl=en&q=kick powai&ie=UTF8&t=roadmap&z=10&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://premiumlinkgenerator.com/keep2share-cc">keep2share premium link generator</a></small></div></iframe>
    <footer id="footer">
    <section id="blog-details" class="padding-right">

                    
        <div class="container">
            <div class="row">
                <div class="col-md-11col-sm-7col-sm-7">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
   <h1> TERMS AND CONDITIONS </h1> 
    <li>The registration amount paid by the players during the exhibition wont be refunded back. Even if the player doesnt get sold at the auction. </li>
    <li>  According to the parle player rule the the league will decide  which player is eligible to be a parle player.</li>
    <li>For any reason if the age of the player is found fake on the age proof document submit to the league, the league will ban this player n he won't be allowed to play for any team.</li>
<li>The player will need to provide other age proof documents to prove his correct age. But the decision of the league will be the final. </li>
    <li> U-16 Players registering for the league are eligible for the Youth league as well as Premier league and Championship. </li>
    <li>During the exhibition games player are supposed to play with the complete kit i.e shin guards, stockings, studs,etc. No player will be allowed without shin guards. Any injury to the player because of not wearing his complete kit is his responsibility, the league wont be at fault for the same. </li>
    <li>Player should be physically fit to play. Any player with injuries wont be permitted to play the league. On player safety grounds. </li> </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
   
  
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
					<hr>
                    <!--<img src="images/home/under.png" class="img-responsive inline" alt="">-->
                </div>
                <div class="col-md-4 col-sm-6">
                    <!--<div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile1.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Nisi commodo bresaola, leberkas venison eiusmod bacon occaecat labore tail.</blockquote>
                                <h3><a href="#">- Jhon Kalis</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="images/home/profile2.png" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Capicola nisi flank sed minim sunt aliqua rump pancetta leberkas venison eiusmod.</blockquote>
                                <h3><a href="">- Abraham Josef</a></h3>
                            </div>
                        </div>   
                    </div>-->
                    <div class="contact-info bottom">
                        <!--<h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:pplsportspl@gmail.com">pplsportspl@gmail.com</a> <br> 
                        Phone: +91 9594 85 5057 <br> 
                        </address>-->

                        <h2>Address</h2>
                        <address>
                        7 Karthikeya, Hanuman road,<br>
                        Vile Parle (East),<br> 
                        Mumbai - 400 057<br> 
                        Maharashtra <br> 
                        India <br> 
                        </address>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <h2>Copyright    &copy;</h2>
                    <h3>Vile Parle Premier League</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Website Partner</h2>
                        <h4>Designed By:-</h4><br>
                        <!--<a href="http://www.websiteengineer.in" target="_blank"><h3>Website Engineer</h3></a><br>-->
                        <a href="http://www.websiteengineer.in" target="_blank"><img src = "http://www.websiteengineer.in/getImage.php?src=logo.gif" alt="Website Engineer"></img></a>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Vile Parle Premier League 2015. All Rights Reserved.</p>
                        <p>Designed by <a target="_blank" href="http://www.websiteengineer.in">Website Engineer</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script> 
    <script>
	$('#pfc-yes').click(function() {
		$('#pfc').css({
			'visibility': 'visible',
		});
		$('#pfch').css({
			'visibility': 'visible',
		});
	});
	$('#pfc-no').click(function() {
		$('#pfc').css({
			'visibility': 'hidden',
		});
		$('#pfch').css({
			'visibility': 'hidden',
		});
	});
	$('#pfs-yes').click(function() {
		$('#pfs').css({
			'visibility': 'visible',
		});
		$('#pfsh').css({
			'visibility': 'visible',
		});
	});
	$('#pfs-no').click(function() {
		$('#pfs').css({
			'visibility': 'hidden',
		});
		$('#pfsh').css({
			'visibility': 'hidden',
		});
	});
	$('#pft-yes').click(function() {
		$('#pft1').css({
			'visibility': 'visible',
		});
		$('#pft2').css({
			'visibility': 'visible',
		});
	});
	$('#pft-no').click(function() {
		$('#pft1').css({
			'visibility': 'hidden',
		});
		$('#pft2').css({
			'visibility': 'hidden',
		});
	});
    </script>  
	<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
</body>
</html>