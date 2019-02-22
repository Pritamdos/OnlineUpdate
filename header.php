 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!------ php file to access database  --->
<?php include './credentials.php'?>

<style>
    
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
    background-color: #eee !important;
    border-color: #337ab7;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
    background-color: #00FF00;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
img.logg {
    height: 150%;
    width: 100%;
    max-width: 120px;
    float: left;
    margin-top: 5px;
}
.navbar-default {
    background-color: #232f3e;
    border-color: #232f3e;
}
.navbar-default .navbar-nav > li > a {
    color: #fff;
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover {
    color: #fff;
    background-color: transparent;
}
.dropdown-menu{
    background-color: #272727;
}
.dropdown-menu > li > a {
    color: #fff;
}
.navbar-nav {
    padding-top: 5px !important;
    float: right;
}
.navbar-default .navbar-nav > li > a {
    color: #fff;
    font-weight: 500;
    font-size: 15px;
}
.dropdown-menu > li > a {
    font-size: 15px;    
}
   
</style>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132215439-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-132215439-1');
	</script>

    <!-- header starts here --->
	
	<div class="navbar navbar-default navbar-fixed-top index-top" role="navigation">
    <div style="padding: 0px 30px;width:100%;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="logo navbat-brand">
                <img src="./assets/images/WebDataImage/logo.png" alt="logo" class="logg" />
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="login"><a href="login.php">Login/signup</a></li>
                <li class="order" style="padding: 10px;"><button type="submit" onclick="window.location.href='order.php'" class="order-now tada">Order now</button></li>        
            </ul>
          
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assignments</a>
                            <ul class="dropdown-menu">
                                <li>
								    <a href="ServicePage/assignments/all-assignment-help.php">
                                        All Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/assignment-assistance.php">
                                        Assignment Assistance
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/assignment-writers.php">
                                        Assignment Writers
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/assignment-writing.php">
                                        Assignment Writing
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/college-assignment-help.php">
                                        College Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/computer-network-it-assignment-help.php">
                                        Computer-Network It  Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/custom-assignment-writing-service.php">
                                        Custom Assignment Writing Service
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/do-my-assignment.php">Do My Assignment</a>
								</li>
								<li>
									<a href="ServicePage/assignments/economics-assignment-help.php">
                                        Economics Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/english-assignment-help.php">
                                        English Assignment Help
                                    </a>
								</li>
                                <li>
									<a href="ServicePage/assignments/global-assignment-help.php">
                                        Global Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/instant-assignment-help.php">
                                        Instant Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/law-assignment-help.php">
                                        Law Assignment Help
                                    </a>
								</li>
                                <li>
                                    <a href="ServicePage/assignments/marketing-assignment-help.php">
                                        Marketing Assignment Help
                                    </a>
                                </li>
								<li>
									<a href="ServicePage/assignments/math-assignment-help.php">
                                        Math Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/my-assignment-help.php">
                                        My Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/nursing-assignment-help.php">
                                        Nursing Assignment Help
                                    </a>
								</li>
								<li>
									<a href="ServicePage/assignments/science-assignment-help.php">
                                        Science Assignment Help
                                    </a>
								</li> 
                                <li>
                                    <a href="ServicePage/assignments/write-my-assignment.php">
                                        Write My Assignment Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/assignments/writing-assignment-for-university.php">
                                        Writing Assignment for University
                                    </a>
                                </li>          
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Dissertation
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="ServicePage/dissertation/architecture-dissertation-help.php">
                                        Architecture Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/dissertation-proposal-writing.php">
                                        Dissertation Proposal Writing
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/dissertation-topics.php">
                                        Dissertation Topics
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/dissertation-writing-experts.php">
                                        Dissertation Writing Experts
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/dissertation-writing-services.php">
                                        Dissertation Writing Services
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/economics-dissertation-help.php">
                                        Economics Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/english-dissertation-help.php">
                                        English Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/finance-dissertation-help.php">
                                        Finance Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/history-dissertation-help.php">
                                        History Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/law-dissertation-help.php">
                                        Law Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/mba-dissertation-help.php">
                                        MBA Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/nursing-dissertation-help.php">
                                        Nursing Dissertation Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/dissertation/psychology-dissertation-help.php">
                                        Psychology Dissertation Help
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Essay
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="ServicePage/essay/academic-essay-writing-services.php">
                                        Academic Essay Writing Services
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/cost-effective-essay-writers.php">
                                        Cheap Essay Writers
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/english-essay-help.php">
                                        English Essay Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/essay-assignment-help.php">
                                        Essay Assignment Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/humanities-essay-help.php">
                                        Humanities-Essay-Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/law-essay-help.php">
                                        Law-Essay-Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/management-essay-help.php">
                                        Management-Essay-Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/nursing-essay-help.php">
                                        Nursing-Essay-Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/essay/write-my-essay.php">
                                        Write My Essay
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Course Work
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="ServicePage/coursework/chemistry-coursework-help.php">
                                        Chemistry Course Work
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/coursework/coursework-help.php">
                                        Course Work Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/coursework/coursework-writing-services.php">
                                        Course Work Writing Services
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/coursework/english-coursework-help.php">
                                        English Course Work Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/coursework/marketing-coursework-help.php">
                                        Marketing Course Work Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/coursework/maths-coursework-help.php">
                                        Maths Course Work Help
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Home Work
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="ServicePage/homework/economics-homework-help.php">
                                        Economics Homework Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/homework/english-homework-help.php">
                                        English Homework Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/homework/history-homework-help.php">
                                        History Homework Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/homework/homework-writing-service.php">
                                        Homework Writing Service
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/homework/marketing-homework-help.php">
                                        Marketing Homework Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/homework/nursing-homework-help.php">
                                        Nursing-Essay-Help
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/homework/PHP-homework-help.php">
                                        PHP Homework Help
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Referencing
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="ServicePage/referencing/apa-referencing-guide.php">
                                        APA Referencing Guide 
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/referencing/harvard-referencing-guide.php">
                                        Harvard Referencing Guide 
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/referencing/mla-referencing-guide.php">
                                        MLA Referencing Guide 
                                    </a>
                                </li>
                                <li>
                                    <a href="ServicePage/referencing/vancouver-referencing-guide.php">
                                        Vancouver Referencing Guide 
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="experts.php">Experts</a></li>
                <li><a href="reviews.php">Reviews</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    <!-- google script added here --->
    
<script type="text/javascript">
    
    (function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
    
    
</script>
