<?php
	session_start();

	if (isset($_SESSION['email'])){
		if($_SESSION['email']){
			header("location: user_index.php");
		}
	}
	else{

    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Global Essay, Dissertation and Assignment Help </title>
    
	<!--- meta data of page ---->
	
	<meta charset="UTF-8">
	<meta title="Online Assignment Help: 100% Secure & Trusted Assignment Writing Service">
	<meta name="description" content="Looking for online essay, thesis or dissertation help? OnlineAssignmenthelp.com is your destination. We offer global assignment help service for all subjects at unbelievably cheap price.">
	<meta name="keywords" content="Online Assignment Help, Assignment Help, Assignment Writing Service, Online Assignment Help USA">
	<meta name="author" content="OnlineAssignmentHelp.com">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!---------------------------- custom css file for generic  ------------------------->
	
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">   
	<link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/font.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">	

	<!---------------------------- plugin css file for generic  ---------------------->
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
	<!---------------------------- plugin css file for page specific --------------------->
	
	<!--- style sheet for current page --->
	
	<style>
		
		input[type=checkbox] + label {
		  color:red;
		  font-weight:600;
		  font-size:16px;
		} 
		input[type=checkbox]:checked + label {
		  color: green;
		  font-weight:bold;
		  font-size:14px;
		} 

		.field-icon {
			float: right;
			margin-top: -30px;
			margin-right: 10px;
			position: relative;
			z-index: 2;
		}
		
		/* Base CSS */
		.alignleft {
			float: left;
			margin-right: 15px;
		}
		.alignright {
			float: right;
			margin-left: 15px;
		}
		.aligncenter {
			display: block;
			margin: 0 auto 15px;
		}
		a:focus { outline: 0 solid }
		img {
			max-width: 100%;
			height: auto;
		}
		.fix { overflow: hidden }
		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			margin: 0 0 15px;
			font-weight: 700;
		}
		html,
		body { height: 100% }

		a {
			-moz-transition: 0.3s;
			-o-transition: 0.3s;
			-webkit-transition: 0.3s;
			transition: 0.3s;
			color: #333;
		}
		a:hover { text-decoration: none }



		.search-box{margin:80px auto;position:absolute;}
		.caption{margin-bottom:50px;}
		.loginForm input[type=text], .loginForm input[type=password]{
			margin-bottom:10px;
		}
		.loginForm input[type=submit]{
			background:#fb044a;
			color:#fff;
			font-weight:700;
			
		}


		#pswd_info {
			background: #dfdfdf none repeat scroll 0 0;
			color: #fff;
			left: 30px;
			position: absolute;
			top: 260px;
			margin-left: 330px;
		}
		#pswd_info h4{
			background: black none repeat scroll 0 0;
			display: block;
			font-size: 14px;
			letter-spacing: 0;
			padding: 17px 0;
			text-align: center;
			text-transform: uppercase;
		}
		#pswd_info ul {
			list-style: outside none none;
		}
		#pswd_info ul li {
		   padding: 10px 45px;
		}

		.valid {
			background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/vq43s2wib/valid.png") no-repeat scroll 2px 6px;
			color: green;
			line-height: 21px;
			padding-left: 22px;
		}

		.invalid {
			background: rgba(0, 0, 0, 0) url("https://s19.postimg.org/olmaj1p8z/invalid.png") no-repeat scroll 2px 6px;
			color: red;
			line-height: 21px;
			padding-left: 22px;
		}


		#pswd_info::before {
			background: #dfdfdf none repeat scroll 0 0;
			content: "";
			height: 25px;
			left: -13px;
			margin-top: -12.5px;
			position: absolute;
			top: 50%;
			transform: rotate(45deg);
			width: 25px;
		}
		#pswd_info {
			display:none;
		}
	
	</style>
	
</head>

<body>
    <?php include './header.php'?>
    <div class="onl-banner-sections">
        <div class="onl-inrs-banner-sections-login-signups">
               <?php include './notification.php'?>
        </div>
    </div>
    
	<div class="banner-login" id="open-login">
		<form id="logForm" action="connection.php" method="post">				
			<div class="lg-sg-form-ins">
				<div class="lg-sub-inners">
					<div class="lg-sub-inners-left-sec">
						<div class="lg-header-sec">
							<img src="./assets/images/WebDataImage/signin-icon.png" class="img-login" alt="SignIn"/>
							<br>
							<center> 
								<div id="ack" style="color:red;font-weight:bold"></div>
							</center>
						</div>
			
						<div class="form-box">
							<input type="text" name="signuserid" id="signuserid" placeholder="email" />
							<div>
								<input type="password" name="signpassword" id="signpassword" placeholder="password" />
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password-log"></span>
							</div>
							
							<div class="remember-me-and-forgets">
								<span class="remember-m">
									<p>
										<input type="checkbox" id="remember" name='remember'/>
										<label for="remember">Remember me</label>
									</p>
								</span>
								<span class="forget-pass">
									<a href="javascript:void(0)">Forget Password ?</a>
								</span>
							</div>
							<div class="submit-buttin-sections">
								<button type="submit" class="signin" id="signsubmit" name="signsubmit">Log In </button>
							</div>
							<div class="notifications-sign">
								<span class="notify-text">
									Logging in for the first time?
									<a href="javascript:myFunction1()" class="signup">
										SignUp
									</a>
									Instead
								</span>
							</div>
						</div>
					</div>
					<div class="lg-sub-inners-right-sec">
						<div class="lg-sub-inners-sections">
							<div class="lg-contents-sc">
								<div class="usss">
									<div class="user-mmmg">
										<img src="./assets/images/WebDataImage/CEO.jpg" alt="CEO-Image" />
									</div>
								</div>
								<span class="user-nnnnm">
									Message form Team OnlineAssignmentHelp
								</span>
								<p class="user-testimonial">
									Welcome to OnlineAssignmenthelp.com! 
									You are one click away from receiving worlds 
									best online academic project assistance.
									Connect with us anytime, anywhere. We are always at work
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</form>
	</div>
	
	<div class="banner-signup" id="open-signup">
		<form action="connection.php" method="post">				
			<div class="lg-sg-form-ins">
				<div class="lg-sub-inners-signup">
					<div class="lg-sub-inners-left-sec-signup">
						<div class="lg-header-sec">
							<img src="./assets/images/WebDataImage/signup-icon.png" class="img-signup" alt="Signup"/>
						</div>
					
						<div class="form-box">
							<input type="text" name="reg_name" id="reg_name" placeholder="Enter Name" autocomplete="off" required="true" />
							<input type="email" name="reg_email" id="reg_email" placeholder="Enter Email" autocomplete="off" onkeyup="checkemail();" required="true" />
							<select name="reg_education" required aria-required="true" >
								<option	disabled selected>Select Higher Education</option>
								<option value="Ph.D">Ph.D</option>
								<option value="Post Graduate">Post Graduate</option>
								<option value="Under Graduate">Under Graduate</option>
								<option value="Secondary School">Secondary School</option>
								<option value="High School">High School</option>
							</select>
						
							<div class="lg-pad">
								<div class="country-code-signup">
									<select required aria-required="true">
										<option data-countryCode="GB" value="44" Selected> UK (+44)</option>
										<option data-countryCode="US" value="1">USA (+1)</option>
										<option data-countryCode="DZ" value="213">Algeria (+213)</option>
										<option data-countryCode="AD" value="376">Andorra (+376)</option>
										<option data-countryCode="AO" value="244">Angola (+244)</option>
										<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
										<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
										<option data-countryCode="AR" value="54">Argentina (+54)</option>
										<option data-countryCode="AM" value="374">Armenia (+374)</option>
										<option data-countryCode="AW" value="297">Aruba (+297)</option>
										<option data-countryCode="AU" value="61">Australia (+61)</option>
										<option data-countryCode="AT" value="43">Austria (+43)</option>
										<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
										<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
										<option data-countryCode="BH" value="973">Bahrain (+973)</option>
										<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
										<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
										<option data-countryCode="BY" value="375">Belarus (+375)</option>
										<option data-countryCode="BE" value="32">Belgium (+32)</option>
										<option data-countryCode="BZ" value="501">Belize (+501)</option>
										<option data-countryCode="BJ" value="229">Benin (+229)</option>
										<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
										<option data-countryCode="BT" value="975">Bhutan (+975)</option>
										<option data-countryCode="BO" value="591">Bolivia (+591)</option>
										<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
										<option data-countryCode="BW" value="267">Botswana (+267)</option>
										<option data-countryCode="BR" value="55">Brazil (+55)</option>
										<option data-countryCode="BN" value="673">Brunei (+673)</option>
										<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
										<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
										<option data-countryCode="BI" value="257">Burundi (+257)</option>
										<option data-countryCode="KH" value="855">Cambodia (+855)</option>
										<option data-countryCode="CM" value="237">Cameroon (+237)</option>
										<option data-countryCode="CA" value="1">Canada (+1)</option>
										<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
										<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
										<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
										<option data-countryCode="CL" value="56">Chile (+56)</option>
										<option data-countryCode="CN" value="86">China (+86)</option>
										<option data-countryCode="CO" value="57">Colombia (+57)</option>
										<option data-countryCode="KM" value="269">Comoros (+269)</option>
										<option data-countryCode="CG" value="242">Congo (+242)</option>
										<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
										<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
										<option data-countryCode="HR" value="385">Croatia (+385)</option>
										<option data-countryCode="CU" value="53">Cuba (+53)</option>
										<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
										<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
										<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
										<option data-countryCode="DK" value="45">Denmark (+45)</option>
										<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
										<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
										<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
										<option data-countryCode="EC" value="593">Ecuador (+593)</option>
										<option data-countryCode="EG" value="20">Egypt (+20)</option>
										<option data-countryCode="SV" value="503">El Salvador (+503)</option>
										<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
										<option data-countryCode="ER" value="291">Eritrea (+291)</option>
										<option data-countryCode="EE" value="372">Estonia (+372)</option>
										<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
										<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
										<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
										<option data-countryCode="FJ" value="679">Fiji (+679)</option>
										<option data-countryCode="FI" value="358">Finland (+358)</option>
										<option data-countryCode="FR" value="33">France (+33)</option>
										<option data-countryCode="GF" value="594">French Guiana (+594)</option>
										<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
										<option data-countryCode="GA" value="241">Gabon (+241)</option>
										<option data-countryCode="GM" value="220">Gambia (+220)</option>
										<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
										<option data-countryCode="DE" value="49">Germany (+49)</option>
										<option data-countryCode="GH" value="233">Ghana (+233)</option>
										<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
										<option data-countryCode="GR" value="30">Greece (+30)</option>
										<option data-countryCode="GL" value="299">Greenland (+299)</option>
										<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
										<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
										<option data-countryCode="GU" value="671">Guam (+671)</option>
										<option data-countryCode="GT" value="502">Guatemala (+502)</option>
										<option data-countryCode="GN" value="224">Guinea (+224)</option>
										<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
										<option data-countryCode="GY" value="592">Guyana (+592)</option>
										<option data-countryCode="HT" value="509">Haiti (+509)</option>
										<option data-countryCode="HN" value="504">Honduras (+504)</option>
										<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
										<option data-countryCode="HU" value="36">Hungary (+36)</option>
										<option data-countryCode="IS" value="354">Iceland (+354)</option>
										<option data-countryCode="IN" value="91">India (+91)</option>
										<option data-countryCode="ID" value="62">Indonesia (+62)</option>
										<option data-countryCode="IR" value="98">Iran (+98)</option>
										<option data-countryCode="IQ" value="964">Iraq (+964)</option>
										<option data-countryCode="IE" value="353">Ireland (+353)</option>
										<option data-countryCode="IL" value="972">Israel (+972)</option>
										<option data-countryCode="IT" value="39">Italy (+39)</option>
										<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
										<option data-countryCode="JP" value="81">Japan (+81)</option>
										<option data-countryCode="JO" value="962">Jordan (+962)</option>
										<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
										<option data-countryCode="KE" value="254">Kenya (+254)</option>
										<option data-countryCode="KI" value="686">Kiribati (+686)</option>
										<option data-countryCode="KP" value="850">Korea North (+850)</option>
										<option data-countryCode="KR" value="82">Korea South (+82)</option>
										<option data-countryCode="KW" value="965">Kuwait (+965)</option>
										<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
										<option data-countryCode="LA" value="856">Laos (+856)</option>
										<option data-countryCode="LV" value="371">Latvia (+371)</option>
										<option data-countryCode="LB" value="961">Lebanon (+961)</option>
										<option data-countryCode="LS" value="266">Lesotho (+266)</option>
										<option data-countryCode="LR" value="231">Liberia (+231)</option>
										<option data-countryCode="LY" value="218">Libya (+218)</option>
										<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
										<option data-countryCode="LT" value="370">Lithuania (+370)</option>
										<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
										<option data-countryCode="MO" value="853">Macao (+853)</option>
										<option data-countryCode="MK" value="389">Macedonia (+389)</option>
										<option data-countryCode="MG" value="261">Madagascar (+261)</option>
										<option data-countryCode="MW" value="265">Malawi (+265)</option>
										<option data-countryCode="MY" value="60">Malaysia (+60)</option>
										<option data-countryCode="MV" value="960">Maldives (+960)</option>
										<option data-countryCode="ML" value="223">Mali (+223)</option>
										<option data-countryCode="MT" value="356">Malta (+356)</option>
										<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
										<option data-countryCode="MQ" value="596">Martinique (+596)</option>
										<option data-countryCode="MR" value="222">Mauritania (+222)</option>
										<option data-countryCode="YT" value="269">Mayotte (+269)</option>
										<option data-countryCode="MX" value="52">Mexico (+52)</option>
										<option data-countryCode="FM" value="691">Micronesia (+691)</option>
										<option data-countryCode="MD" value="373">Moldova (+373)</option>
										<option data-countryCode="MC" value="377">Monaco (+377)</option>
										<option data-countryCode="MN" value="976">Mongolia (+976)</option>
										<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
										<option data-countryCode="MA" value="212">Morocco (+212)</option>
										<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
										<option data-countryCode="MN" value="95">Myanmar (+95)</option>
										<option data-countryCode="NA" value="264">Namibia (+264)</option>
										<option data-countryCode="NR" value="674">Nauru (+674)</option>
										<option data-countryCode="NP" value="977">Nepal (+977)</option>
										<option data-countryCode="NL" value="31">Netherlands (+31)</option>
										<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
										<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
										<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
										<option data-countryCode="NE" value="227">Niger (+227)</option>
										<option data-countryCode="NG" value="234">Nigeria (+234)</option>
										<option data-countryCode="NU" value="683">Niue (+683)</option>
										<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
										<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
										<option data-countryCode="NO" value="47">Norway (+47)</option>
										<option data-countryCode="OM" value="968">Oman (+968)</option>
										<option data-countryCode="PW" value="680">Palau (+680)</option>
										<option data-countryCode="PA" value="507">Panama (+507)</option>
										<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
										<option data-countryCode="PY" value="595">Paraguay (+595)</option>
										<option data-countryCode="PE" value="51">Peru (+51)</option>
										<option data-countryCode="PH" value="63">Philippines (+63)</option>
										<option data-countryCode="PL" value="48">Poland (+48)</option>
										<option data-countryCode="PT" value="351">Portugal (+351)</option>
										<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
										<option data-countryCode="QA" value="974">Qatar (+974)</option>
										<option data-countryCode="RE" value="262">Reunion (+262)</option>
										<option data-countryCode="RO" value="40">Romania (+40)</option>
										<option data-countryCode="RU" value="7">Russia (+7)</option>
										<option data-countryCode="RW" value="250">Rwanda (+250)</option>
										<option data-countryCode="SM" value="378">San Marino (+378)</option>
										<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
										<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
										<option data-countryCode="SN" value="221">Senegal (+221)</option>
										<option data-countryCode="CS" value="381">Serbia (+381)</option>
										<option data-countryCode="SC" value="248">Seychelles (+248)</option>
										<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
										<option data-countryCode="SG" value="65">Singapore (+65)</option>
										<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
										<option data-countryCode="SI" value="386">Slovenia (+386)</option>
										<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
										<option data-countryCode="SO" value="252">Somalia (+252)</option>
										<option data-countryCode="ZA" value="27">South Africa (+27)</option>
										<option data-countryCode="ES" value="34">Spain (+34)</option>
										<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
										<option data-countryCode="SH" value="290">St. Helena (+290)</option>
										<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
										<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
										<option data-countryCode="SD" value="249">Sudan (+249)</option>
										<option data-countryCode="SR" value="597">Suriname (+597)</option>
										<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
										<option data-countryCode="SE" value="46">Sweden (+46)</option>
										<option data-countryCode="CH" value="41">Switzerland (+41)</option>
										<option data-countryCode="SI" value="963">Syria (+963)</option>
										<option data-countryCode="TW" value="886">Taiwan (+886)</option>
										<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
										<option data-countryCode="TH" value="66">Thailand (+66)</option>
										<option data-countryCode="TG" value="228">Togo (+228)</option>
										<option data-countryCode="TO" value="676">Tonga (+676)</option>
										<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
										<option data-countryCode="TN" value="216">Tunisia (+216)</option>
										<option data-countryCode="TR" value="90">Turkey (+90)</option>
										<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
										<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
										<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
										<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
										<option data-countryCode="UG" value="256">Uganda (+256)</option>
										<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
										<option data-countryCode="UA" value="380">Ukraine (+380)</option>
										<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
										<option data-countryCode="UY" value="598">Uruguay (+598)</option>
										<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
										<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
										<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
										<option data-countryCode="VA" value="379">Vatican City (+379)</option>
										<option data-countryCode="VE" value="58">Venezuela (+58)</option>
										<option data-countryCode="VN" value="84">Vietnam (+84)</option>
										<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
										<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
										<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
										<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
										<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
										<option data-countryCode="ZM" value="260">Zambia (+260)</option>
										<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>  
									</select>
								</div>
								<div class="phone-number-code">
									<input type="text" name="reg_phone" id="reg_phone" placeholder="Enter Phone Number" onkeyup="validatephone();" required="true" />
								</div>
							</div>	
							<div style="width:100%;float:left">
								<div style="width:90%;float:left">
									<input type="password"  name="reg_password" id="reg_password" placeholder="Enter Password" required="true" />
								</div>
								
								<div style="width:10%;float:left;text-align:center;padding-top:10px">
									<i class="fa fa-eye" onclick="showpass_sup1()" aria-hidden="true"></i>
								</div>
							</div>
								
							<div style="width:100%;float:left">
								<div style="width:90%;float:left">
									<input type="password" name="con_password" id="con_password"  placeholder="Confirm Password" required="true"/>
								</div>
								
								<div style="width:10%;float:left;text-align:center;padding-top:10px">
									<i class="fa fa-eye" onclick="showpass_sup2()" aria-hidden="true"></i>
								</div>
							</div>
							
							<div class="notifications-sign">
								<p>
									<input type="checkbox" id="test1" required="true"/>
									<label for="test1">I agree to
									<a class="links" href="privacy.php" target="_blank">Terms &amp; Conditions</a> and
									<a class="links" href="termsofuse.php" target="_blank">Privacy Policy</a> set by OnlineAssigment</label>
								</p>
							</div>
							
							<div class="submit-buttin-sections-signup">
								<button type="submit" class="signin" name="registersubmit">
									Register
								</button>
							</div>
							<div class="notifications-sign">
								<span class="notify-text">
									Already signed up?
									<a href="login.php" class="signup">
										SignIn
									</a>
									Instead
								</span>
							</div>
						</div>
					</div>
					
				</div>
			</div>			
		</form>
	</div>
	
	<?php include './footer.php'?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="./assets/js/scrollanimations.js"></script>
<script src="./assets/js/style.js"></script>

<script>
	function myFunction1() {
	  var x = document.getElementById("open-login");
	  var y = document.getElementById("open-signup");
	  if (x.style.display === "none") {
		x.style.display = "block";
		y.style.display = "none";
	  } 
	  else {
		x.style.display = "none";
		y.style.display = "block";
	  }
	}
</script>

<script>

$(function(){
        $('#signuserid,#signpassword').on('blur', function(){
           if($(this).val()!==''){  //assuming the form doesn't have some fields populated by default.
			 $("div#ack").html("");
             $(this).addClass('green-border');
           } else {
             $(this).removeClass('green-border');
           }
        });
  });

$(".toggle-password-log").click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
  
	var x = document.getElementById("signpassword");
	
	if(x.type === "password") {
		x.type = "text";
	} 
	else {
		x.type = "password";
  }
});

function showpass_sup1() {
  var y = document.getElementById("reg_password");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

function showpass_sup2() {
  var z = document.getElementById("con_password");
  if (z.type === "password") {
    z.type = "text";
  } else {
    z.type = "password";
  }
}
  
</script>

<script>

$(document).ready(function(){
	
	$('input[type=password]').keyup(function() {
		var pswd = $(this).val();
		
		//validate the length
		if ( pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
		
		//validate letter
		if ( pswd.match(/[A-z]/) ) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}

		//validate capital letter
		if ( pswd.match(/[A-Z]/) ) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}

		//validate number
		if ( pswd.match(/\d/) ) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}
		
		//validate space
		if ( pswd.match(/[^a-zA-Z0-9\-\/]/) ) {
			$('#space').removeClass('invalid').addClass('valid');
		} else {
			$('#space').removeClass('valid').addClass('invalid');
		}
		
	}).focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});
	
});

</script>

<script type="text/javascript">
$("button#signsubmit").click( function() {
	var a = $("#signuserid").val();
	var b = $("#signpassword").val();
	var c = $("#remember");
	
	if( a == "" || b == "" ){
		$("div#ack").html("Please Fill both Fields");
	}
	else	
	$.post( 
		$("#logForm").attr("action") , { signuserid : a , signpassword : b },
			function(data) {
					
			if( data == 1){
				$("div#ack").html("Please Enter Correct Credentials");	
			}
			else if(data == 2){
				window.location = "admindashboard.php";
			}
			else if(data == 3){
				window.location = "user_index.php";
			}
		});
		 
	$("#logForm").submit( function() {
		return false;	
	});
});
</script>

</html>

<?php
if(isset($_COOKIE['email']) AND isset($_COOKIE['pass'])){
    $email = $_COOKIE['email'];
	 $pass  = $_COOKIE['pass'];
}
?>

<script>
	      document.getElementById("signuserid").value = "<?php echo $email; ?>";
	      document.getElementById("signpassword").value = "<?php echo $pass; ?>";
</script>