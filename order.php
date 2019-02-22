<?php
	session_start();
	if($_SESSION['email']){
	}
	else{
	  header("location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="US-Eng">
<head>
    <title>Global Essay, Dissertation and Assignment Help </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta title="Looking for online essay, thesis or dissertation help? OnlineAssignmenthelp.com is your destination. 
    We offer global assignment help service for all subjects at unbelievably cheap price.">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/animated.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/scrollanimations.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!------ php file to access database  --->
	<?php include './credentials.php'?>

</head>
<body>
    <?php include './header.php'?>
    <div class="onl-banner-sections">
		<div class="onl-inrs-banner-sections-login-signups">
				<div class="order-details-sc">
					<div class="order-stepper-ir-sec">
							<div class="od-iner">
								<!-- Header of Split Order form -->
								<div class="s-stepper">
									<div data-target="#stage1" id="stage-1-step" class="s-step active">
										<span class="s-step-counter"></span>
										<small>Fill basic details of your assignment</small>
									</div>
									<div data-target="#stage2" id="stage-2-step" class="s-step">
										<span class="s-step-counter"></span>
										<small>Fill the requirement & place your order</small>
									</div>
								</div>
								
								<div class="s-stepper-content">
									
								 	<form class="form-sections-only" name="orderForm" action="connection.php" method="post" enctype="multipart/form-data">
										
										<!-- Stage 1 Page of Form -->
										   <div id="stage1" class="s-stepper-stage active">
												<div class="stepper-form-inner-sec">
													<div class="header-sectins">
														<span class="st-headers">
														GUARANTEED HIGHER GRADE OR GET YOUR MONEY BACK!
														</span>
														<span class="st-helps">
															GET HELP INSTANTLY
														</span>
													</div>
														<div class="stp-otr">
															<div class="stp-left">
																<div class="each-rows-inputs">
																	<input type="text" name="ord_user" id="ord_user" placeholder="Enter your name" />
																	<span class="users-pp">
																		<i class="fa fa-envelope" aria-hidden="true"></i>

																	</span>
																</div>
																<div class="each-rows-inputs">
																	<span class="sb-tt"> Choose your assignment deadline</span>
																	<div class="et-s">
																		<span class="users-pp">
																			<i class="fa fa-calendar" aria-hidden="true"></i>
																		</span>
																		<input type="date" name="datepicker" id="datepicker" onchange="checkDate()" required class="datepicker-input" required="true" />
																		<label style="color:red;" id="error_msg" ></label>
																	</div>
																</div>
																
																<div class="each-rows-inputs">
																	<input type="text" name="pageNo" id="pageNo" placeholder="Enter number of pages" required="true"/>
																	<span class="users-pp">
																		<i class="fa fa-file" aria-hidden="true"></i>
																	</span>
																	<span class="counter-outrs">
																		<span class="top-counters">
																			<a onclick="add()">
																				<i class="fa fa-plus counter-icns" aria-hidden="true"></i>
																			</a>
																		</span>
																		<span class="bottom-counter">
																			<a onclick="sub()">
																				<i class="fa fa-minus counter-icns" aria-hidden="true"></i>
																			</a>
																		</span>
																	</span>
																</div>
																<span class="label-display">
																   <label id="page_msg1" class="label-display1">1</label> page / <label value="250" id="page_msg2" >250</label> Words			
																</span>				
															</div>
															
															<div class="stp-right">
																<div class="each-rows-inputs">
																   <div class="left-s-get">
																		<select class="selects-drop">
																		   <option value="93" selected> AFG (+93)</option>
																		   <option value="355" selected> ALB (+355)</option>
																		   <option value="213" selected> DZA (+213)</option>
																		   <option value="1684" selected> ASM (+1684)</option>
																		   <option value="376" selected> AND (+376)</option>
																		   <option value="244" selected> AGO (+244)</option><option value="1264" selected> AIA (+1264)</option><option value="0" selected>  (+0)</option><option value="1268" selected> ATG (+1268)</option><option value="54" selected> ARG (+54)</option><option value="374" selected> ARM (+374)</option><option value="297" selected> ABW (+297)</option><option value="61" selected> AUS (+61)</option><option value="43" selected> AUT (+43)</option><option value="994" selected> AZE (+994)</option><option value="1242" selected> BHS (+1242)</option><option value="973" selected> BHR (+973)</option><option value="880" selected> BGD (+880)</option><option value="1246" selected> BRB (+1246)</option><option value="375" selected> BLR (+375)</option><option value="32" selected> BEL (+32)</option><option value="501" selected> BLZ (+501)</option><option value="229" selected> BEN (+229)</option><option value="1441" selected> BMU (+1441)</option><option value="975" selected> BTN (+975)</option><option value="591" selected> BOL (+591)</option><option value="387" selected> BIH (+387)</option><option value="267" selected> BWA (+267)</option><option value="0" selected>  (+0)</option><option value="55" selected> BRA (+55)</option><option value="246" selected>  (+246)</option><option value="673" selected> BRN (+673)</option><option value="359" selected> BGR (+359)</option><option value="226" selected> BFA (+226)</option><option value="257" selected> BDI (+257)</option><option value="855" selected> KHM (+855)</option><option value="237" selected> CMR (+237)</option><option value="1" selected> CAN (+1)</option><option value="238" selected> CPV (+238)</option><option value="1345" selected> CYM (+1345)</option><option value="236" selected> CAF (+236)</option><option value="235" selected> TCD (+235)</option><option value="56" selected> CHL (+56)</option><option value="86" selected> CHN (+86)</option><option value="61" selected>  (+61)</option><option value="672" selected>  (+672)</option><option value="57" selected> COL (+57)</option><option value="269" selected> COM (+269)</option><option value="242" selected> COG (+242)</option><option value="242" selected> COD (+242)</option><option value="682" selected> COK (+682)</option><option value="506" selected> CRI (+506)</option><option value="225" selected> CIV (+225)</option><option value="385" selected> HRV (+385)</option><option value="53" selected> CUB (+53)</option><option value="357" selected> CYP (+357)</option><option value="420" selected> CZE (+420)</option><option value="45" selected> DNK (+45)</option><option value="253" selected> DJI (+253)</option><option value="1767" selected> DMA (+1767)</option><option value="1809" selected> DOM (+1809)</option><option value="593" selected> ECU (+593)</option><option value="20" selected> EGY (+20)</option><option value="503" selected> SLV (+503)</option><option value="240" selected> GNQ (+240)</option><option value="291" selected> ERI (+291)</option><option value="372" selected> EST (+372)</option><option value="251" selected> ETH (+251)</option><option value="500" selected> FLK (+500)</option><option value="298" selected> FRO (+298)</option><option value="679" selected> FJI (+679)</option><option value="358" selected> FIN (+358)</option><option value="33" selected> FRA (+33)</option><option value="594" selected> GUF (+594)</option><option value="689" selected> PYF (+689)</option><option value="0" selected>  (+0)</option><option value="241" selected> GAB (+241)</option><option value="220" selected> GMB (+220)</option><option value="995" selected> GEO (+995)</option><option value="49" selected> DEU (+49)</option><option value="233" selected> GHA (+233)</option><option value="350" selected> GIB (+350)</option><option value="30" selected> GRC (+30)</option><option value="299" selected> GRL (+299)</option><option value="1473" selected> GRD (+1473)</option><option value="590" selected> GLP (+590)</option><option value="1671" selected> GUM (+1671)</option><option value="502" selected> GTM (+502)</option><option value="224" selected> GIN (+224)</option><option value="245" selected> GNB (+245)</option><option value="592" selected> GUY (+592)</option><option value="509" selected> HTI (+509)</option><option value="0" selected>  (+0)</option><option value="39" selected> VAT (+39)</option><option value="504" selected> HND (+504)</option><option value="852" selected> HKG (+852)</option><option value="36" selected> HUN (+36)</option><option value="354" selected> ISL (+354)</option><option value="91" selected> IND (+91)</option><option value="62" selected> IDN (+62)</option><option value="98" selected> IRN (+98)</option><option value="964" selected> IRQ (+964)</option><option value="353" selected> IRL (+353)</option><option value="972" selected> ISR (+972)</option><option value="39" selected> ITA (+39)</option><option value="1876" selected> JAM (+1876)</option><option value="81" selected> JPN (+81)</option><option value="962" selected> JOR (+962)</option><option value="7" selected> KAZ (+7)</option><option value="254" selected> KEN (+254)</option><option value="686" selected> KIR (+686)</option><option value="850" selected> PRK (+850)</option><option value="82" selected> KOR (+82)</option><option value="965" selected> KWT (+965)</option><option value="996" selected> KGZ (+996)</option><option value="856" selected> LAO (+856)</option><option value="371" selected> LVA (+371)</option><option value="961" selected> LBN (+961)</option><option value="266" selected> LSO (+266)</option><option value="231" selected> LBR (+231)</option><option value="218" selected> LBY (+218)</option><option value="423" selected> LIE (+423)</option><option value="370" selected> LTU (+370)</option><option value="352" selected> LUX (+352)</option><option value="853" selected> MAC (+853)</option><option value="389" selected> MKD (+389)</option><option value="261" selected> MDG (+261)</option><option value="265" selected> MWI (+265)</option><option value="60" selected> MYS (+60)</option><option value="960" selected> MDV (+960)</option><option value="223" selected> MLI (+223)</option><option value="356" selected> MLT (+356)</option><option value="692" selected> MHL (+692)</option><option value="596" selected> MTQ (+596)</option><option value="222" selected> MRT (+222)</option><option value="230" selected> MUS (+230)</option><option value="269" selected>  (+269)</option><option value="52" selected> MEX (+52)</option><option value="691" selected> FSM (+691)</option><option value="373" selected> MDA (+373)</option><option value="377" selected> MCO (+377)</option><option value="976" selected> MNG (+976)</option><option value="1664" selected> MSR (+1664)</option><option value="212" selected> MAR (+212)</option><option value="258" selected> MOZ (+258)</option><option value="95" selected> MMR (+95)</option><option value="264" selected> NAM (+264)</option><option value="674" selected> NRU (+674)</option><option value="977" selected> NPL (+977)</option><option value="31" selected> NLD (+31)</option><option value="599" selected> ANT (+599)</option><option value="687" selected> NCL (+687)</option><option value="64" selected> NZL (+64)</option><option value="505" selected> NIC (+505)</option><option value="227" selected> NER (+227)</option><option value="234" selected> NGA (+234)</option><option value="683" selected> NIU (+683)</option><option value="672" selected> NFK (+672)</option><option value="1670" selected> MNP (+1670)</option><option value="47" selected> NOR (+47)</option><option value="968" selected> OMN (+968)</option><option value="92" selected> PAK (+92)</option><option value="680" selected> PLW (+680)</option><option value="970" selected>  (+970)</option><option value="507" selected> PAN (+507)</option><option value="675" selected> PNG (+675)</option><option value="595" selected> PRY (+595)</option><option value="51" selected> PER (+51)</option><option value="63" selected> PHL (+63)</option><option value="0" selected> PCN (+0)</option><option value="48" selected> POL (+48)</option><option value="351" selected> PRT (+351)</option><option value="1787" selected> PRI (+1787)</option><option value="974" selected> QAT (+974)</option><option value="262" selected> REU (+262)</option><option value="40" selected> ROM (+40)</option><option value="70" selected> RUS (+70)</option><option value="250" selected> RWA (+250)</option><option value="290" selected> SHN (+290)</option><option value="1869" selected> KNA (+1869)</option><option value="1758" selected> LCA (+1758)</option><option value="508" selected> SPM (+508)</option><option value="1784" selected> VCT (+1784)</option><option value="684" selected> WSM (+684)</option><option value="378" selected> SMR (+378)</option><option value="239" selected> STP (+239)</option><option value="966" selected> SAU (+966)</option><option value="221" selected> SEN (+221)</option><option value="381" selected>  (+381)</option><option value="248" selected> SYC (+248)</option><option value="232" selected> SLE (+232)</option><option value="65" selected> SGP (+65)</option><option value="421" selected> SVK (+421)</option><option value="386" selected> SVN (+386)</option><option value="677" selected> SLB (+677)</option><option value="252" selected> SOM (+252)</option><option value="27" selected> ZAF (+27)</option><option value="0" selected>  (+0)</option><option value="34" selected> ESP (+34)</option><option value="94" selected> LKA (+94)</option><option value="249" selected> SDN (+249)</option><option value="597" selected> SUR (+597)</option><option value="47" selected> SJM (+47)</option><option value="268" selected> SWZ (+268)</option><option value="46" selected> SWE (+46)</option><option value="41" selected> CHE (+41)</option><option value="963" selected> SYR (+963)</option><option value="886" selected> TWN (+886)</option><option value="992" selected> TJK (+992)</option><option value="255" selected> TZA (+255)</option><option value="66" selected> THA (+66)</option><option value="670" selected>  (+670)</option><option value="228" selected> TGO (+228)</option><option value="690" selected> TKL (+690)</option><option value="676" selected> TON (+676)</option><option value="1868" selected> TTO (+1868)</option><option value="216" selected> TUN (+216)</option><option value="90" selected> TUR (+90)</option><option value="7370" selected> TKM (+7370)</option><option value="1649" selected> TCA (+1649)</option><option value="688" selected> TUV (+688)</option><option value="256" selected> UGA (+256)</option><option value="380" selected> UKR (+380)</option><option value="971" selected> ARE (+971)</option><option value="44" selected> GBR (+44)</option><option value="1" selected> USA (+1)</option><option value="1" selected>  (+1)</option><option value="598" selected> URY (+598)</option><option value="998" selected> UZB (+998)</option><option value="678" selected> VUT (+678)</option><option value="58" selected> VEN (+58)</option><option value="84" selected> VNM (+84)</option><option value="1284" selected> VGB (+1284)</option><option value="1340" selected> VIR (+1340)</option>
																		   <option value="681" selected> WLF (+681)</option>
																		   <option value="212" selected> ESH (+212)</option>
																		   <option value="967" selected> YEM (+967)</option>
																		   <option value="260" selected> ZMB (+260)</option>
																		   <option value="263" selected> ZWE (+263)</option>
																		</select>
																   </div>
																   <div class="right-s-get">
																			<input type="text" name="ord_phone" id="ord_phone" placeholder="Enter Phone Number" onkeyup="validatephone();" 
																			required="true" />
																   </div>
																   <span style="color:red" id="mobile_status"></span>
           												        </div>
														   
															    <div class="lg-fr ">
																	<span class="deadline-text--educations">
																		Education Level
																	</span>
																	<div class="selected-timezone">
																		<select name="ord_education" class="setected-time-zone">
																			<option value="Ph.D">Ph.D</option>
																			<option value="Post Graduate">Post Graduate</option>
																			<option value="Under Graduate">Under Graduate</option>
																			<option value="Secondary School">Secondary School</option>
																			<option value="High School">High School</option>
																		</select>
																		<span class="users-pp">
																			<i class="fa fa-university" aria-hidden="true"></i>
																		</span>
																	</div>
																</div>
																
															</div>
														</div>	
														<label style="color:red;" id="error_fill" ></label>
												</div>
												
												<div class="submit-button-sections-stepper">
													<button type="button" onclick="stage1validate()" class="done-btn-sections">CONTINUE<i class="fa fa-arrow-circle-right rg" aria-hidden="true"></i></button>
												</div>
											</div>
										
										<!-- Stage 2 Page of Form -->	
										   <div id="stage2" class="s-stepper-stage">
											<div class="stepper-form-inner-sec">
													<div class="stp-otr">
														<div class="stp-left">
															<div class="each-rows-inputs">
																<input type="email" name="ord_email" id="ord_email" readonly="readonly" 
																	value="<?php echo $_SESSION['email']; ?>" >
																<span class="users-pp">
																	<i class="fa fa-user" aria-hidden="true"></i>
																</span>
																<span style="color:red" id="email_status"></span>
															</div>
														</div>
														
														<div class="stp-right">
															<div class="lg-fr ">
																<div class="selected-timezone">
																	<select name="ord_style" class="setected-time-zone" required>								
																		<option value="AGLC">AGLC</option>
																		<option value="APA">APA</option>
																		<option value="BMJ">BMJ</option>
																		<option value="Chicago">Chicago</option>
																		<option value="Footnotes">Footnotes</option>
																		<option value="Footnotes and bibliography">Footnotes and bibliography</option>
																		<option value="Harvard">Harvard</option>
																		<option value="IEEE">IEEE</option>
																		<option value="MHRA">MHRA</option>
																		<option value="MLA">MLA</option>
																		<option value="Not Selected">Not Selected</option>
																		<option value="Open">Open</option>
																		<option value="OSCOLA">OSCOLA</option>
																		<option value="Oxford">Oxford</option>
																		<option value="Turabian">Turabian</option>
																		<option value="Vancouver">Vancouver</option>
																	</select>
																	<span class="users-pp">
																		<i class="fa fa-university" aria-hidden="true"></i>
																	</span>
																</div>
															</div>
														</div>	
													</div>
													
													<div class="descriptions">
														<span class="reason-for-callback">
														   Description
														</span>
														<div class="text-reason">
															<textarea placeholder="Please describe..." name="ord_reason" id="ord_reason" class="textareas" required="true" ></textarea>
														</div>
												   	</div>
												   
												   <div class="get-each-sec files-upp">
														<input type="file" name="file" id="file-input"><br><br>
												   </div>

												   <input type = "hidden" id="ovalidate" name="ovalidate" 
												   			value = "<?php echo $_SESSION['email']; ?>" /> 
												   
											</div>
											<div class="submit-button-sections-stepper">
											   	<button type="button" onclick="back()" class="done-btn-sections" style='margin-right:16px'>	
											   		BACK
											   		<i class="fa fa-arrow-circle-left lg" aria-hidden="true"></i>
											   	</button>
											   	<button type="submit" class="done-btn-sections done" style='margin-right:16px' 
											   			name="ordersubmit">
											   		Done
											   	</button>
											</div>
										</div>
                            </form>
								</div>
							</div>
					</div>  
				</div>
			<?php include './notification.php'?>
		</div>
    </div>   
    <?php include './footer.php'?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="./assets/js/scrollanimations.js"></script>
<script src="./assets/js/style.js"></script>
<script>
     function hideStage(stage)
     {
        $('#stage'+stage).removeClass('active');
        $('#stage-'+stage+'-step').addClass('done');
     }

    function showStage(stage) 
    {
        $('#stage'+stage).addClass('active');
        $('#stage-'+stage+'-step').addClass('active');
    }

    $(document).ready(function(){
        
    })
</script>

<script>
  function checkDate() {
   var selectedText = document.getElementById('datepicker').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   if (selectedDate < now) {
	document.getElementById('datepicker').value = '';
	$('#error_msg').text("Fill future date only !");
   }
   else{
    $('#error_msg').text("");
   }
 }

 function add(){
    var count = document.getElementById('pageNo').value;
    count = count*1 + 1;
	document.getElementById('pageNo').value = count;
	
	$('#page_msg1').text(count);
	
    words = count*250;
	$('#page_msg2').text(words);
 }
 
 function sub(){
    var count = document.getElementById('pageNo').value;
    count = count*1 - 1 ;
	if(count > -1){
	document.getElementById('pageNo').value = count;
    
	$('#page_msg1').text(count);
	
	 words = count*250;
	$('#page_msg2').text(words);
	}
 }
 
 function stage1validate(){
	var v1 = document.forms["orderForm"]["ord_user"].value;
	var v2 = document.forms["orderForm"]["datepicker"].value;
	var v3 = document.forms["orderForm"]["pageNo"].value;
	var v4 = document.forms["orderForm"]["ord_education"].value;
	var v5 = document.forms["orderForm"]["ord_phone"].value;
	if (v1 == "" || v2 =="" || v3 =="" || v4 =="" || v5 =="") {
        $('#error_fill').text("Please fill all the mandatory fields!");
	}
	else
	{
		 $('#error_fill').text("");
		 hideStage(1);
		 showStage(2);
		 
	}
 }
 function back(){
	 hideStage(2);
	 showStage(1);
 } 
</script>
</html>

<script type="text/javascript">
  function validatephone(){
	var mobile = document.getElementById( "ord_phone" ).value;
	if(mobile){
	  $.ajax({
	  type: 'post',
	  url: 'connection.php',
	  data: {
	   user_phone:mobile,
	  },
	  success: function (response) {
	   $( '#mobile_status' ).html(response);
	   if(response=="OK")	
	   {
		return true;	
	   }
	   else
	   {
		return false;	
	   }
	  }
	  });
	 }
	 else
	 {
	  $( '#mobile_status' ).html("");
	  return false;
	 }
	}
</script>

