<?php
 session_start();
?>
<?php
$CPE_result=$CPE_year=$work_exp_date_from=$work_exp_date_to=$work_exp_position=$work_exp_employer_name=$work_exp_sector=$work_exp_desc=$cv=$covering_letter=$scanned_id_card=$morality_certificate=$sc_id=$hsc_id=$tertiary_id="";

?>
<html lang="en" class=" canvas canvastext geolocation rgba hsla multiplebgs borderimage borderradius boxshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions  video audio localstorage sessionstorage webworkers no-applicationcache fontface"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mauritius Jobs</title>
<meta name="description" content="Mauritiusjobs is the no1 job portal in Mauritius where jobseekers can search for vacancies/jobs in Mauritius or abroad posted by registered employers.">
<link rel="icon" href="https://www.mauritiusjobs.mu/images/mauritius.ico" type="image/gif" sizes="16x16">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/reset.css">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/page.css?1548793034">
<link media="all" rel="stylesheet" type="text/css" href="https://www.mauritiusjobs.mu/css/menu.css?1548793034">
<script async="" src="//www.google-analytics.com/analytics.js"></script><script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="https://www.mauritiusjobs.mu/js/menu.js"></script><style>@font-face{font-family:testfont;src:url('data:font/ttf;base64,AAEAAAAMAIAAAwBAT1MvMliohmwAAADMAAAAVmNtYXCp5qrBAAABJAAAANhjdnQgACICiAAAAfwAAAAEZ2FzcP//AAMAAAIAAAAACGdseWYv5OZoAAACCAAAANxoZWFk69bnvwAAAuQAAAA2aGhlYQUJAt8AAAMcAAAAJGhtdHgGDgC4AAADQAAAABRsb2NhAIQAwgAAA1QAAAAMbWF4cABVANgAAANgAAAAIG5hbWUgXduAAAADgAAABPVwb3N03NkzmgAACHgAAAA4AAECBAEsAAUAAAKZAswAAACPApkCzAAAAesAMwEJAAACAAMDAAAAAAAAgAACbwAAAAoAAAAAAAAAAFBmRWQAAAAgqS8DM/8zAFwDMwDNAAAABQAAAAAAAAAAAAMAAAADAAAAHAABAAAAAABGAAMAAQAAAK4ABAAqAAAABgAEAAEAAgAuqQD//wAAAC6pAP///9ZXAwAAAAAAAAACAAAABgBoAAAAAAAvAAEAAAAAAAAAAAAAAAAAAAABAAIAAAAAAAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAAEACoAAAAGAAQAAQACAC6pAP//AAAALqkA////1lcDAAAAAAAAAAIAAAAiAogAAAAB//8AAgACACIAAAEyAqoAAwAHAC6xAQAvPLIHBADtMrEGBdw8sgMCAO0yALEDAC88sgUEAO0ysgcGAfw8sgECAO0yMxEhESczESMiARDuzMwCqv1WIgJmAAACAFUAAAIRAc0ADwAfAAATFRQWOwEyNj0BNCYrASIGARQGKwEiJj0BNDY7ATIWFX8aIvAiGhoi8CIaAZIoN/43KCg3/jcoAWD0JB4eJPQkHh7++EY2NkbVRjY2RgAAAAABAEH/+QCdAEEACQAANjQ2MzIWFAYjIkEeEA8fHw8QDxwWFhwWAAAAAQAAAAIAAIuYbWpfDzz1AAsEAAAAAADFn9IuAAAAAMWf0i797/8zA4gDMwAAAAgAAgAAAAAAAAABAAADM/8zAFwDx/3v/98DiAABAAAAAAAAAAAAAAAAAAAABQF2ACIAAAAAAVUAAAJmAFUA3QBBAAAAKgAqACoAWgBuAAEAAAAFAFAABwBUAAQAAgAAAAEAAQAAAEAALgADAAMAAAAQAMYAAQAAAAAAAACLAAAAAQAAAAAAAQAhAIsAAQAAAAAAAgAFAKwAAQAAAAAAAwBDALEAAQAAAAAABAAnAPQAAQAAAAAABQAKARsAAQAAAAAABgAmASUAAQAAAAAADgAaAUsAAwABBAkAAAEWAWUAAwABBAkAAQBCAnsAAwABBAkAAgAKAr0AAwABBAkAAwCGAscAAwABBAkABABOA00AAwABBAkABQAUA5sAAwABBAkABgBMA68AAwABBAkADgA0A/tDb3B5cmlnaHQgMjAwOSBieSBEYW5pZWwgSm9obnNvbi4gIFJlbGVhc2VkIHVuZGVyIHRoZSB0ZXJtcyBvZiB0aGUgT3BlbiBGb250IExpY2Vuc2UuIEtheWFoIExpIGdseXBocyBhcmUgcmVsZWFzZWQgdW5kZXIgdGhlIEdQTCB2ZXJzaW9uIDMuYmFlYzJhOTJiZmZlNTAzMiAtIHN1YnNldCBvZiBKdXJhTGlnaHRiYWVjMmE5MmJmZmU1MDMyIC0gc3Vic2V0IG9mIEZvbnRGb3JnZSAyLjAgOiBKdXJhIExpZ2h0IDogMjMtMS0yMDA5YmFlYzJhOTJiZmZlNTAzMiAtIHN1YnNldCBvZiBKdXJhIExpZ2h0VmVyc2lvbiAyIGJhZWMyYTkyYmZmZTUwMzIgLSBzdWJzZXQgb2YgSnVyYUxpZ2h0aHR0cDovL3NjcmlwdHMuc2lsLm9yZy9PRkwAQwBvAHAAeQByAGkAZwBoAHQAIAAyADAAMAA5ACAAYgB5ACAARABhAG4AaQBlAGwAIABKAG8AaABuAHMAbwBuAC4AIAAgAFIAZQBsAGUAYQBzAGUAZAAgAHUAbgBkAGUAcgAgAHQAaABlACAAdABlAHIAbQBzACAAbwBmACAAdABoAGUAIABPAHAAZQBuACAARgBvAG4AdAAgAEwAaQBjAGUAbgBzAGUALgAgAEsAYQB5AGEAaAAgAEwAaQAgAGcAbAB5AHAAaABzACAAYQByAGUAIAByAGUAbABlAGEAcwBlAGQAIAB1AG4AZABlAHIAIAB0AGgAZQAgAEcAUABMACAAdgBlAHIAcwBpAG8AbgAgADMALgBiAGEAZQBjADIAYQA5ADIAYgBmAGYAZQA1ADAAMwAyACAALQAgAHMAdQBiAHMAZQB0ACAAbwBmACAASgB1AHIAYQBMAGkAZwBoAHQAYgBhAGUAYwAyAGEAOQAyAGIAZgBmAGUANQAwADMAMgAgAC0AIABzAHUAYgBzAGUAdAAgAG8AZgAgAEYAbwBuAHQARgBvAHIAZwBlACAAMgAuADAAIAA6ACAASgB1AHIAYQAgAEwAaQBnAGgAdAAgADoAIAAyADMALQAxAC0AMgAwADAAOQBiAGEAZQBjADIAYQA5ADIAYgBmAGYAZQA1ADAAMwAyACAALQAgAHMAdQBiAHMAZQB0ACAAbwBmACAASgB1AHIAYQAgAEwAaQBnAGgAdABWAGUAcgBzAGkAbwBuACAAMgAgAGIAYQBlAGMAMgBhADkAMgBiAGYAZgBlADUAMAAzADIAIAAtACAAcwB1AGIAcwBlAHQAIABvAGYAIABKAHUAcgBhAEwAaQBnAGgAdABoAHQAdABwADoALwAvAHMAYwByAGkAcAB0AHMALgBzAGkAbAAuAG8AcgBnAC8ATwBGAEwAAAAAAgAAAAAAAP+BADMAAAAAAAAAAAAAAAAAAAAAAAAAAAAFAAAAAQACAQIAEQt6ZXJva2F5YWhsaQ==')}</style>
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create','UA-50481647-1','mauritiusjobs.mu');ga('send','pageview');</script>
<script language="JavaScript" type="text/javascript">if(navigator.appName=='Microsoft Internet Explorer'){function NOclickIE(e){if(event.button==2||event.button==3){return false;}return true;}document.onmousedown=NOclickIE;document.onmouseup=NOclickIE;window.onmousedown=NOclickIE;window.onmouseup=NOclickIE;}
else{function NOclickNN(e){if(document.layers||document.getElementById&&!document.all){if(e.which==2||e.which==3){return false;}}}if(document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=NOclickNN;}document.oncontextmenu=new Function("return false")}</script>
</head>
<body style="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;" unselectable="on">
			<div id="header">
		<div id="banner">
			<script pagespeed_no_defer="" type="text/javascript">//<![CDATA[
(function(){var g=this,h=function(b,d){var a=b.split("."),c=g;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var e;a.length&&(e=a.shift());)a.length||void 0===d?c[e]?c=c[e]:c=c[e]={}:c[e]=d};var l=function(b){var d=b.length;if(0<d){for(var a=Array(d),c=0;c<d;c++)a[c]=b[c];return a}return[]};var m=function(b){var d=window;if(d.addEventListener)d.addEventListener("load",b,!1);else if(d.attachEvent)d.attachEvent("onload",b);else{var a=d.onload;d.onload=function(){b.call(this);a&&a.call(this)}}};var n,p=function(b,d,a,c,e){this.f=b;this.h=d;this.i=a;this.c=e;this.e={height:window.innerHeight||document.documentElement.clientHeight||document.body.clientHeight,width:window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth};this.g=c;this.b={};this.a=[];this.d={}},q=function(b,d){var a,c,e=d.getAttribute("pagespeed_url_hash");if(a=e&&!(e in b.d))if(0>=d.offsetWidth&&0>=d.offsetHeight)a=!1;else{c=d.getBoundingClientRect();var f=document.body;a=c.top+("pageYOffset"in window?window.pageYOffset:(document.documentElement||f.parentNode||f).scrollTop);c=c.left+("pageXOffset"in window?window.pageXOffset:(document.documentElement||f.parentNode||f).scrollLeft);f=a.toString()+","+c;b.b.hasOwnProperty(f)?a=!1:(b.b[f]=!0,a=a<=b.e.height&&c<=b.e.width)}a&&(b.a.push(e),b.d[e]=!0)};p.prototype.checkImageForCriticality=function(b){b.getBoundingClientRect&&q(this,b)};h("pagespeed.CriticalImages.checkImageForCriticality",function(b){n.checkImageForCriticality(b)});h("pagespeed.CriticalImages.checkCriticalImages",function(){r(n)});var r=function(b){b.b={};for(var d=["IMG","INPUT"],a=[],c=0;c<d.length;++c)a=a.concat(l(document.getElementsByTagName(d[c])));if(0!=a.length&&a[0].getBoundingClientRect){for(c=0;d=a[c];++c)q(b,d);a="oh="+b.i;b.c&&(a+="&n="+b.c);if(d=0!=b.a.length)for(a+="&ci="+encodeURIComponent(b.a[0]),c=1;c<b.a.length;++c){var e=","+encodeURIComponent(b.a[c]);131072>=a.length+e.length&&(a+=e)}b.g&&(e="&rd="+encodeURIComponent(JSON.stringify(s())),131072>=a.length+e.length&&(a+=e),d=!0);t=a;if(d){c=b.f;b=b.h;var f;if(window.XMLHttpRequest)f=new XMLHttpRequest;else if(window.ActiveXObject)try{f=new ActiveXObject("Msxml2.XMLHTTP")}catch(k){try{f=new ActiveXObject("Microsoft.XMLHTTP")}catch(u){}}f&&(f.open("POST",c+(-1==c.indexOf("?")?"?":"&")+"url="+encodeURIComponent(b)),f.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),f.send(a))}}},s=function(){var b={},d=document.getElementsByTagName("IMG");if(0==d.length)return{};var a=d[0];if(!("naturalWidth"in a&&"naturalHeight"in a))return{};for(var c=0;a=d[c];++c){var e=a.getAttribute("pagespeed_url_hash");e&&(!(e in b)&&0<a.width&&0<a.height&&0<a.naturalWidth&&0<a.naturalHeight||e in b&&a.width>=b[e].k&&a.height>=b[e].j)&&(b[e]={rw:a.width,rh:a.height,ow:a.naturalWidth,oh:a.naturalHeight})}return b},t="";h("pagespeed.CriticalImages.getBeaconData",function(){return t});h("pagespeed.CriticalImages.Run",function(b,d,a,c,e,f){var k=new p(b,d,a,e,f);n=k;c&&m(function(){window.setTimeout(function(){r(k)},0)})});})();pagespeed.CriticalImages.Run('/mod_pagespeed_beacon','http://www.mauritiusjobs.mu/jobseeker/registration/academic','YddRYU7ik1',true,false,'9-bRH37fOG8');
//]]></script><img src="https://www.mauritiusjobs.mu/images/mauritius_flag.gif" id="mauritius_flag" pagespeed_url_hash="2557509605" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<img src="https://www.mauritiusjobs.mu/images/govt.png" pagespeed_url_hash="2827431000" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<img src="https://www.mauritiusjobs.mu/images/jobs_logo.png" id="jobs_logo" pagespeed_url_hash="2679461340" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<br>Ministry of Labour, Industrial Relations, Employment and Training
		</div>
	<div class="menu">
		<nav id="topNav">
			<ul>
				<li class="first"><a href="https://www.mauritiusjobs.mu/" title="Home">Home</a></li>
				<li><a href="#" title="About Us">About Us<span>^</span></a>
					<ul style="display: none;">
						<li><a href="http://www.mauritiusjobs.mu/about/mlire" title="About MLIRE">Ministry of Labour, Industrial Relations, Employment and Training</a></li>
						<li><a href="http://www.mauritiusjobs.mu/about/iom" title="About IOM">International Organisation for Migration</a></li>
					</ul>
				</li>
				
				<li>					<a href="http://www.mauritiusjobs.mu/jobseeker" title="Jobseeker">Jobseeker</a>
									        
				</li>
				<li>
									<a href="http://www.mauritiusjobs.mu/employer" title="Employer">Employer</a>
													</li>
				<li><a href="https://www.mauritiusjobs.mu/jobsearch" title="Jobs Search">Jobs Search</a></li>
				<li class="last"><a href="http://www.mauritiusjobs.mu/contact" title="Contact us ">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</div>
<link rel="stylesheet" href="http://www.mauritiusjobs.mu/css/A.jobseeker.css.pagespeed.cf.u6fziZE49o.css">
<div class="main-content">

	<div id="step-holder">
		<div class="step-no-off">1</div>
		<div class="step-light-left" title="Basic Information"><a href="../registration">Basic</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">2</div>
		<div class="step-light-left" title="Confidential Information"><a href="confidential">Confidential</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">3</div>
		<div class="step-light-left" title="Preferred Job Information"><a href="job">Job</a></div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no">4</div>
		<div class="step-dark-left" title="Academic Qualification">Academic</div>
		<div class="step-dark-right">&nbsp;</div>
		
		<div class="step-no-off">5</div>
		<div class="step-light-left" title="Work Experience">Experience</div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">6</div>
		<div class="step-light-left" title="Document Uploads">Uploads</div>
		<div class="step-light-right">&nbsp;</div>
		
		<div class="step-no-off">7</div>
		<div class="step-light-left" title="Jobseeker Agreement">Agreement</div>
		<div class="step-light-round">&nbsp;</div>
		<div class="clear"></div>
	</div>
	<form id="registration" method="POST" action="academicPart2.php"
	
	<tr><td>
	<span class="note"><label>PRIMARY</label></span>
	</td></tr>
	<tr>
	<td colspan="2">
		<table>
		<tbody><tr>
		<td colspan="2" class="academic_level">
			<label>CPE<br></label>		</td>
		</tr><tr><td class="academic_result">
			<input type="radio" name="jobseeker_cpe_result" value="P"><span class="pass">Pass</span>
			<input type="radio" name="jobseeker_cpe_result" value="F"><span class="fail">Fail</span>
			</td><td>
			YEAR :
			<select name="jobseeker_cpe_year" class="select-box-year"><option value="">Year</option>
							<option value="1950">1950</option>
							<option value="1951">1951</option>
							<option value="1952">1952</option>
							<option value="1953">1953</option>
							<option value="1954">1954</option>
							<option value="1955">1955</option>
							<option value="1956">1956</option>
							<option value="1957">1957</option>
							<option value="1958">1958</option>
							<option value="1959">1959</option>
							<option value="1960">1960</option>
							<option value="1961">1961</option>
							<option value="1962">1962</option>
							<option value="1963">1963</option>
							<option value="1964">1964</option>
							<option value="1965">1965</option>
							<option value="1966">1966</option>
							<option value="1967">1967</option>
							<option value="1968">1968</option>
							<option value="1969">1969</option>
							<option value="1970">1970</option>
							<option value="1971">1971</option>
							<option value="1972">1972</option>
							<option value="1973">1973</option>
							<option value="1974">1974</option>
							<option value="1975">1975</option>
							<option value="1976">1976</option>
							<option value="1977">1977</option>
							<option value="1978">1978</option>
							<option value="1979">1979</option>
							<option value="1980">1980</option>
							<option value="1981">1981</option>
							<option value="1982">1982</option>
							<option value="1983">1983</option>
							<option value="1984">1984</option>
							<option value="1985">1985</option>
							<option value="1986">1986</option>
							<option value="1987">1987</option>
							<option value="1988">1988</option>
							<option value="1989">1989</option>
							<option value="1990">1990</option>
							<option value="1991">1991</option>
							<option value="1992">1992</option>
							<option value="1993">1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
						</select>
		</td></tr>
		</tbody></table>
	</td>
	</tr>
	
	<tr><td colspan="4"><hr class="more-info"></td></tr>
	
	
	<tr><td colspan="4"><hr class="more-info"></td></tr>
	
	<tr><td><span class="note"><label>UPPER SECONDARY</label></span></td></tr>
	<tr><td colspan="2">
		<table>
		<tbody><tr><td class="academic_level" colspan="2">
		<label>SC/GCE O L/IGCSE<br></label>		
		
		YEAR :
		<select name="jobseeker_sc_year" class="select-box-year"><option value="">Year</option>
					<option value="1950">1950</option>
					<option value="1951">1951</option>
					<option value="1952">1952</option>
					<option value="1953">1953</option>
					<option value="1954">1954</option>
					<option value="1955">1955</option>
					<option value="1956">1956</option>
					<option value="1957">1957</option>
					<option value="1958">1958</option>
					<option value="1959">1959</option>
					<option value="1960">1960</option>
					<option value="1961">1961</option>
					<option value="1962">1962</option>
					<option value="1963">1963</option>
					<option value="1964">1964</option>
					<option value="1965">1965</option>
					<option value="1966">1966</option>
					<option value="1967">1967</option>
					<option value="1968">1968</option>
					<option value="1969">1969</option>
					<option value="1970">1970</option>
					<option value="1971">1971</option>
					<option value="1972">1972</option>
					<option value="1973">1973</option>
					<option value="1974">1974</option>
					<option value="1975">1975</option>
					<option value="1976">1976</option>
					<option value="1977">1977</option>
					<option value="1978">1978</option>
					<option value="1979">1979</option>
					<option value="1980">1980</option>
					<option value="1981">1981</option>
					<option value="1982">1982</option>
					<option value="1983">1983</option>
					<option value="1984">1984</option>
					<option value="1985">1985</option>
					<option value="1986">1986</option>
					<option value="1987">1987</option>
					<option value="1988">1988</option>
					<option value="1989">1989</option>
					<option value="1990">1990</option>
					<option value="1991">1991</option>
					<option value="1992">1992</option>
					<option value="1993">1993</option>
					<option value="1994">1994</option>
					<option value="1995">1995</option>
					<option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
				</select>
	

		<table class="form"><tr>
					<td><label>Subject1:</label></td>
					<td><input type="text" name="Subject1" id="Subject1"></td>
					<td><label>Grade 1:</label></td>
					<td><input type="text" name="Grade1" id="Grade1"></td>
				
					<td><label>Subject2:</label></td>
					<td><input type="text" name="Subject2" id="Subject2"></td>
					<tr><td><label>Grade 2:</label></td>
					<td><input type="text" name="Grade2" id="Grade2"></td>
					<br></br>
					
					<td><label>Subject3:</label></td>
					<td><input type="text" name="Subject3" id="Subject3"></td>
					<tr><td><label>Grade 3:</label></td>
					<td><input type="text" name="Grade3" id="Grade3"></td>
					
					<td><label>Subject4:</label></td>
					<td><input type="text" name="Subject4" id="Subject4"></td>
					<tr><td><label>Grade 4:</label></td>
					<td><input type="text" name="Grade4" id="Grade4"></td>
					
					<td><label>Subject5:</label></td>
					<td><input type="text" name="Subject5" id="Subject5"></td>
					<tr><td><label>Grade 5:</label></td>
					<td><input type="text" name="Grade5" id="Grade5"></td>
					
					<td><label>Subject6:</label></td>
					<td><input type="text" name="Subject6" id="Subject6"></td>
					<tr><td><label>Grade 6:</label></td>
					<td><input type="text" name="Grade6" id="Grade6"></td>
					
					<td><label>Subject7:</label></td>
					<td><input type="text" name="Subject7" id="Subject7"></td>
					<tr><td><label>Grade 7:</label></td>
					<td><input type="text" name="Grade7" id="Grade7"></td>
					
					<td><label>Subject8:</label></td>
					<td><input type="text" name="Subject8" id="Subject8"></td>
					<tr><td><label>Grade 8:</label></td>
					<td><input type="text" name="Grade8" id="Grade8"></td>
					
					<td><label>Subject9:</label></td>
					<td><input type="text" name="Subject9" id="Subject9"></td>
					<tr><td><label>Grade 9:</label></td>
					<td><input type="text" name="Grade9" id="Grade9"></td>
					
					<td><label>Subject10:</label></td>
					<td><input type="text" name="Subject10" id="Subject10"></td>
					<tr><td><label>Grade 10:</label></td>
					<td><input type="text" name="Grade10" id="Grade10"></td>
					
				</table>
			</td>
			</td>
				</tr></tbody></table>
	</td></tr>
	
	<tr><td colspan="2" align="center">
	<input type="button" value="Back" onclick="window.location.href='job'" class="submit-btn" title="Back">
	<input type="submit" value="Proceed to Secondary Education" class="submit-btn" name="add_academic" title="Proceed to Secondary Education">
	</td></tr>
	</tbody></table>
</form></div>

<!--</div></div>-->

<script>(function($){var nav=$("#topNav");nav.find("li").each(function(){if($(this).find("ul").length>0){$("<span>").text("^").appendTo($(this).children(":first"));$(this).mouseenter(function(){$(this).find("ul").stop(true,true).slideDown();});$(this).mouseleave(function(){$(this).find("ul").stop(true,true).slideUp();});}});})(jQuery);</script>

<div id="footer">
	<div id="links">
		<a href="http://www.mauritiusjobs.mu/feedback" title="Feedback Form">Feedback Form</a>
		<a href="http://www.mauritiusjobs.mu/website_map" title="Website Map">Website Map</a>
		<a href="http://www.mauritiusjobs.mu/eic_locations" title="EIC Location">EIC Location</a>
		<a href="http://www.mauritiusjobs.mu/faq" title="FAQ">FAQ</a>
		<a href="http://www.mauritiusjobs.mu/legislations" title="Legislations">Legislations</a>
		<a href="http://www.mauritiusjobs.mu/downloads" title="Downloads">Downloads</a>
		<a href="http://www.mauritiusjobs.mu/publications" title="Publications">Publications</a>
		<a href="http://www.mauritiusjobs.mu/statistics" title="Statistics">Statistics</a>
		<a href="http://www.mauritiusjobs.mu/links" title="Links">Links</a>
		<a href="http://www.mauritiusjobs.mu/tips" title="Tips">Tips</a>
	</div>
	<div id="logo">
		<div class="european_logo">
			<a href="http://www.eeas.europa.eu/delegations/mauritius/index_en.htm" target="blank"><img src="https://www.mauritiusjobs.mu/images/european.gif" width="75" height="50" title="European Union" pagespeed_url_hash="3480823204" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><br>
			This project is co-funded by the European Union
		</div>
		<div class="italian_logo">
			<a href="http://www.lavoro.gov.it" target="blank"><img src="https://www.mauritiusjobs.mu/images/italiana.png" width="65" height="55" title="Ministero Del Lavoro e Delle Politiche Sociali" pagespeed_url_hash="1380425307" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><br>
			Ministero Del Lavoro e Delle Politiche Sociali
		</div>
		<div class="iom_logo">
			<a href="http://www.iom.int" target="blank"><img src="https://www.mauritiusjobs.mu/images/iom-logo.png" width="56" height="55" title="International Organisation for Migration" pagespeed_url_hash="1879559771" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a><br>
			International Organisation for Migration (IOM)
		</div>
	</div>
	<div id="copyright">
		© Copyright Mauritius Jobs. 2019. All rights reserved.
	</div>
	<span id="developed_by_reefcube">Designed &amp; Developed by <a href="http://www.reefcube.mu" target="_blank">Reefcube Ltd</a></span>
	<span id="ssl"><img src="https://www.mauritiusjobs.mu/images/ssl.png" width="20" pagespeed_url_hash="3229039404" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> <span class="ssl_txt">SSL Certified</span></span>
	<span id="browser">
		<span id="browser_txt">Compatible on latest </span>
		<img src="https://www.mauritiusjobs.mu/images/chrome.ico" width="20" style="width: 21px;position: relative;margin-top: 0px;height: 23px;top: 2px;" title="Google Chrome" pagespeed_url_hash="89730296" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
		<img src="https://www.mauritiusjobs.mu/images/firefox.ico" width="20" title="Mozilla Firefox" pagespeed_url_hash="139850137" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> 
		<img src="https://www.mauritiusjobs.mu/images/safari.ico" width="20" title="Safari" pagespeed_url_hash="1217210338" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
	</span>
</div>


</body></html>