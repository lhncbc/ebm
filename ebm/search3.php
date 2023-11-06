<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>EBM Search</title>
  <link rel="stylesheet" href="https://lhncbc.nlm.nih.gov/assets/uswds-2.4.0/css/uswds.min.css" />
  <link rel="stylesheet" href="https://lhncbc.nlm.nih.gov/assets/stylesheets/LHC_main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
 <link rel="stylesheet" href="https://lhncbc.nlm.nih.gov/ii/assets/stylesheets/II_main.css"> 
 <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59GQ6JK');</script>
<!-- End Google Tag Manager -->

<style>
table, tr, td {
    border: none !important; 
    border-collapse: collapse !important;
}
</style>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59GQ6JK"
height="0" width="0" style="display:none;visibility:hidden" title="googletagmanager"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div class="usa-overlay"></div>
  <header class="usa-header usa-header--extended insertheader">
  
  <div class="usa-nav-layout grid-row">
     <div class="usa-logo grid-col-10" id="extended-logo">

      <div class="header-logo" style="line-height:1rem;">
        <div class="display-flex flex-row flex-align-center">
            <div>
              <a href="https://www.nih.gov" alt="link to NIH homepage"><img src="https://lhncbc.nlm.nih.gov/assets/images/logo-NIH-block.png" alt="NIH logo chevron"></a>
            </div>    
            <div class="display-flex flex-column">
              <a href="https://www.nlm.nih.gov" alt="link to National Library of Medicine homepage">
                <img src="https://lhncbc.nlm.nih.gov/assets/images/logo-NLM-block.png" alt="portion of logo that reads National Library of Medicine">
              </a>
              <a href="https://lhncbc.nlm.nih.gov/index.html" alt="link to Lister Hill National Center for Biomedical Communications homepage">
                <img src="https://lhncbc.nlm.nih.gov/assets/images/logo-LHC-block.png" alt="portion of logo that reads Lister Hill National Center for Biomedical Communications">
              </a>
            </div>
        </div>

      </div>
    </div>
    <div class="LHC-menu grid-col-2 display-flex flex-row flex-justify-end flex-align-center">
      <button class="usa-menu-btn" aria-label="menu button"><i class="fas fa-bars fa-2x"></i></button>
    </div>
  </div>

  <nav aria-label="Primary navigation" class="usa-nav">
      <div class="usa-nav__inner">
        <button class="usa-nav__close"><img src="https://lhncbc.nlm.nih.gov/assets/images/close.svg" alt="close"></button>
        <div class="nav-container">
          <ul class="usa-nav__primary usa-accordion">

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="../index.html"><span class="subproject-navtitle">PubMed Search Tools&#58;</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <button class="usa-accordion__button usa-nav__link" aria-expanded="false"
                aria-controls="extended-nav-section-one"><span>PubMed&nbsp;for&nbsp;Handhelds</span>
              </button>

              <ul id="extended-nav-section-one" class="usa-nav__submenu" hidden>
                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="../pico/index.php">PICO</a>
                </li>

                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="../ask/index.php">askMEDLINE</a>
                </li>

                <li class="usa-nav__submenu-item">
                <a class="usa-nav__link" href="../pico/consensus.php">Consensus&nbsp;Abstracts</a>
                </li>

                <li class="usa-nav__submenu-item">
                  <a class="usa-nav__link" href="../medline/index.php">MEDLINE/PubMed</a>
                </li>

              </ul>
            </li>

            <li class="usa-nav__primary-item usa-current">
              <a class="usa-nav__link usa-current" href="../ebm/index.php"><span class="subproject-navtitle">Evidence&nbsp;Based&nbsp;Medicine</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="../biomarkers/index.php"><span class="subproject-navtitle">Biomarkers</span></a>
            </li>

            <li class="usa-nav__primary-item">
              <a class="usa-nav__link" href="../babelmesh/index.php"><span class="subproject-navtitle">BabelMeSH</span></a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
</header>

  <div class="front_page">
    <div class="usa-layout padding-y-4">
      <div class="grid-row grid-gap">
          <div class="desktop:grid-col-9">
<h2>Evidence Based Medicine (EBM)</h2>
  
            <div class="grid-container pt-2 px-0">
              <div class="grid-row pt-2">

<div>

<?php

	require "../include/header.php";
	require "../include/xmlclass2.php";
	
  $readdata = $_SERVER["QUERY_STRING"];
  parse_str($readdata);
  if ($page =='') {
	$page =$_POST['page'];
  }

function searchQue($query) {

  global $Count, $QueryKey, $WebEnv;
 
  $utils = "http://www.ncbi.nlm.nih.gov/entrez/eutils";
  $esearch = "$utils/esearch.fcgi?" .
                "retmax=1&usehistory=y".$query;

  $esearch_result = file_get_contents($esearch);

  preg_match("|<Count>(.*)</Count>|m",$esearch_result,$hcount);
  preg_match("|<QueryKey>(.*)</QueryKey>|m",$esearch_result,$hkey);
  preg_match("|<WebEnv>(.*)</WebEnv>|m",$esearch_result,$hweb);

  $Count    = $hcount[1];
  $QueryKey = $hkey[1];
  $WebEnv   = $hweb[1];
}


function display($begin) { 
  $utils = "http://www.ncbi.nlm.nih.gov/entrez/eutils";
  $db    = "pubmed";
  $report = "abstract";

  global $Count, $QueryKey, $WebEnv;

  $retstart = 0;
  if (($Count == "")||($Count==0))
  {
	$Count = 0;
	echo "No result!";
	return;
  }

  print "$Count results: <hr>";

  $efetch = "$utils/efetch.fcgi?".
               "rettype=$report&retmode=xml&retstart=$retstart&retmax=20&".
               "db=$db&query_key=$QueryKey&WebEnv=$WebEnv";   

 	$getxml = new parXML();
  $getxml->everything($efetch);
	
	for($retstart = 0; $retstart < 20; $retstart++) {
	$au = $getxml->final[$retstart]["author"];
	$ti = $getxml->final[$retstart]["atitle"];
	$pd = $getxml->final[$retstart]["pdate"];
	$ab = $getxml->final[$retstart]["abtext"];
	$pmid = trim($getxml->final[$retstart]["pmid"]);
	$pinfo = $getxml->final[$retstart]["pinfo"];
	$ta = $getxml->final[$retstart]["jtitle"];
  
  $index = $begin+$retstart + 1;

  if (($index == $Count) || ($Count == "0"))
  {
	$retstart = 20;
  }

  print "<p><li>$index. "."$ti<br>";


  if ($au!="") {
    print "$au<br>";
  }
  print "$ta; ";
  print "$pd; $pinfo. PubMed ID: $pmid<br>";
  if ($ab == "")
  {
	print "[No Abstract]  &nbsp;&nbsp;";
  }
  else
  {
	  print "[<a href=abstract_tbl.php?id=$pmid&from=".(isset($from)? $from:'')." target=new>TBL</a>]&nbsp;&nbsp;";
	  print "[<a href=abstract.php?id=$pmid&from=pico target=new>Abstract</a>]&nbsp;&nbsp;";
  }
  print " [<a href=http://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref target=new>Full Text</a>]&nbsp;&nbsp;";
  print " [<a href=".$_SERVER['PHP_SELF']."?id=$pmid&mod=related&page=1>Related</a>]&nbsp;&nbsp;";
  print "<br></p>";

  } 
	unset($getxml); 
} //end func display


function related($rid) {

  $utils = "http://www.ncbi.nlm.nih.gov/entrez/eutils";
  $db     = "pubmed";
  $report = "abstract";

  $elink = "$utils/elink.fcgi?" .
               "dbfrom=$db&id=$rid&cmd=neighbor";
  $elink_result = file_get_contents($elink);

  $rest = $elink_result;
  $sbegin = strpos($rest,'<Id>');
  $i = 0;
  global $page;

  while (!($sbegin===false)) {	
	$end = strpos($rest,'</Id>',5);
	$len=$end-$sbegin-4;
	$tempID= substr($rest, ($sbegin + 4), $len);
	$IDs[$i] = $tempID;
	$rest =substr($rest,$end);
	$sbegin = strpos($rest,'<Id>');
	$i++;
  }

  $Count = $i-1;
 
  $Tpage=ceil($Count/20);

  if ($page > $Tpage) {
	$page = $Tpage;
  }
  if ($page <=0) {
	$page = 1;
  }

  print $Count." related articles for article (PubMed ID: ".$rid.")";
  print "<hr>";
  $begin = ($page-1)*20+1;
	$id = "";
  for($j=$begin; $j<$begin+20; $j++) {
    $id .= $IDs[$j].",";
	}
    $efetch = "$utils/efetch.fcgi?" .
             "db=$db&id=$id&rettype=$report&retmode=xml";
						 
 	  $getxml = new parXML();
  	$getxml->everything($efetch);
		
	for($j=0; $j<20; $j++) {	
		$au = $getxml->final[$j]["author"];
	  $ti = $getxml->final[$j]["atitle"];
	  $pd = $getxml->final[$j]["pdate"];
	  $ab = $getxml->final[$j]["abtext"];
	  $pmid = trim($getxml->final[$j]["pmid"]);
	  $pinfo = $getxml->final[$j]["pinfo"];
	  $ta = $getxml->final[$j]["jtitle"];
  
    $index = $begin + $j;

    if (($index == $Count) || ($Count == "0"))
    {
		 	 $j = 20;
    }

    print "<p><li>$index. "."$ti<br>";


    if ($au!="") {
      print "$au<br>";
    }
    print "$ta; ";
    print "$pd; $pinfo. PubMed ID: $pmid<br>";
    if ($ab == "")
    {
	print "[No Abstract]  &nbsp;&nbsp;";
    }
    else
    {
		  print "[<a href=abstract_tbl.php?id=$pmid&from=".(isset($from)? $from:'')." target=new>TBL</a>]&nbsp;&nbsp;";
	    print "[<a href=abstract.php?id=$pmid&from=pico target=new>Abstract</a>]&nbsp;&nbsp;";
    }
    print "[<a href=http://www.ncbi.nlm.nih.gov/entrez/eutils/elink.fcgi?cmd=prlinks&dbfrom=pubmed&id=$pmid&retmode=ref target=new>Full Text</a>]&nbsp;&nbsp;";
    print " [<a href=".$_SERVER['PHP_SELF']."?id=$pmid&mod=related&page=1>Related</a>]&nbsp;&nbsp;";
    print "<br></p>";

  } 

  print "<hr>";
  print "Page: ";
  $pre=$page-1;
  $next=$page+1;

  if ($page != 1) 
  {
    print "[<a href=".$_SERVER['PHP_SELF']."?id=$rid&mod=related&page=$pre>Previous</a>] ";
    if ($page != $Tpage) {
	print "&nbsp;";
	print " [<a href=".$_SERVER['PHP_SELF']."?id=$rid&mod=related&page=$next>Next</a>]";
    }
  }

  if($page == 1)
  {
  	print " [<a href=".$_SERVER['PHP_SELF']."?id=$rid&mod=related&page=$next>Next</a>]";
  }
  print "&nbsp;&nbsp;&nbsp;&nbsp;[<a href=index.php>New Search</a>]";

  print "<FORM ACTION=".$_SERVER['PHP_SELF']."?id=$rid&mod=relpager METHOD=POST>";
  print "<INPUT type=\"submit\" value=\"page\">\n";
  print "<input type=\"text\" name=\"page\" size=\"5\" value=\"$page\">\n";
  print " of $Tpage.\n";
  print "</form>";
	
 	unset($getxml); 
} // end func related

if (($id != "") && (($mod == "related") || ($mod == "relpager"))) {	
  call_user_func('related',$id);
  goto end;
}

if ($submit != "Y") {

  $_POST['condition'] = trim($_POST['condition']);
  $_POST['intervention'] = trim($_POST['intervention']); 
  $_POST['comparison'] =  trim($_POST['comparison']);
  $_POST['outcome'] = trim($_POST['outcome']);

  $_POST['condition'] = str_replace(' ', '+',$_POST['condition']);
  $_POST['intervention'] = str_replace(' ', '+',$_POST['intervention']);
  $_POST['comparison'] = str_replace(' ', '+',$_POST['comparison']);
  $_POST['outcome'] = str_replace(' ', '+',$_POST['outcome']);

  $string = "human%5Bmh%5D";

  if ($_POST['condition'] != "") {
	$string = $string."%20AND%20(".$_POST['condition'].")";
  }
  if ($_POST['intervention'] != "") {
	$string = $string."%20AND%20(".$_POST['intervention'].")";
  }
  if ($_POST['comparison'] != "") {
	$string = $string."%20AND%20(".$_POST['comparison'].")";
  }
	 
  if ($_POST['outcome'] != "")  {
	$string = $string."%20AND%20(".$_POST['outcome'].")";
  } 
	
  if ($_POST['age'] != "") {
	if ($_POST['age'] == "1") {
		$string = $string."%20AND%20infant%5Bmh%5D";
	}
	elseif ($_POST['age'] =="2") {
		$string = $string."%20AND%20((infant%5Bmh%5D%20OR%20child%5Bmh%5D)%20OR%20adolescent%5Bmh%5D)";
	}
	elseif ($_POST['age'] == "3") {
		$string = $string."%20AND%20adult%5Bmh%5D";	
	}
	elseif ($_POST['age'] =="4") {
		$string = $string."%20AND%20infant,newborn%5Bmh%5D";
	}
	elseif ($_POST['age'] == "5") {
		$string = $string."%20AND%20infant%5Bmh:noexp%5D";
	}
	elseif ($_POST['age'] == "6") {
		$string = $string."%20AND%20child,preschool%5Bmh%5D";
	}
	elseif ($_POST['age'] == "7") {
		$string = $string."%20AND%20child%5Bmh:noexp%5D";
	}
	elseif ($_POST['age'] =="8") {
		$string = $string."%20AND%20adolescent%5Bmh%5D";
	}
	elseif ($_POST['age'] == "9") {
		$string = $string."%20AND%20adult%5Bmh:noexp%5D";
	}
	elseif ($_POST['age'] == "10") {
		$string = $string."%20AND%20middle%20aged%5Bmh%5D";
	}
	elseif ($_POST['age'] == "11") {
		$string = $string."%20AND%20aged%5Bmh%5D";
	}
	elseif ($_POST['age'] == "12") {
		$string = $string."%20AND%20aged,%2080%20and%20over%5Bmh%5D";
	}
  }
	  
  if ($_POST['gender'] != "") {
	if ($_POST['gender'] == "1") {
		$string = $string."%20AND%20male%5Bmh%5D";
	}
	elseif ($_POST['gender'] == "2") {
		$string = $string."%20AND%20female%5Bmh%5D";
	}		
  }

  if ($_POST['pubtype'] != "") {
	if ($_POST['pubtype'] == "1") {
		$string = $string."%20AND%20clinical+trial%5Bptyp%5D";
	}
	elseif ($_POST['pubtype'] == "2") {
		$string = $string."%20AND%20meta-analysis%5Bptyp%5D";
	}
	elseif ($_POST['pubtype'] =="3") {
		$string = $string."%20AND%20randomized+controlled+trial%5Bptyp%5D";	
	}
	elseif ($_POST['pubtype'] =="4") {
		$string = $string."%20AND%20review%5Bptyp%5D";
	}
	elseif ($_POST['pubtype'] == "5") {
		$string = $string."%20AND%20practice%20guideline%5Bptyp%5D";
	}
  }  

	if ($_POST['strategy'] == "therapy") {
			$suffix = "%28randomized+controlled+trial%5BPublication+Type%5D+OR+%28randomized%5BTitle/Abstract%5D+AND+controlled%5BTitle/Abstract%5D+AND+trial%5BTitle/Abstract%5D%29%29";	
	} elseif ($_POST['strategy'] == "diagnosis") {
			$suffix = "%20%28specificity%5BTitle/Abstract%5D%29";
	} elseif ($_POST['strategy'] == "etiology") {
			$suffix = "%20%28%28relative%5BTitle/Abstract%5D+AND+risk%2A%5BTitle/Abstract%5D%29+OR+%28relative+risk%5BText+Word%5D%29+OR+risks%5BText+Word%5D+OR+cohort+studies%5BMeSH:noexp%5D+OR+%28cohort%5BTitle/Abstract%5D+AND+stud%2A%5BTitle/Abstract%5D%29%29";
	} elseif ($_POST['strategy'] == "prognosis") {
			$suffix = "%20%28prognos%2A%5BTitle/Abstract%5D+OR+%28first%5BTitleAbstract%5D+AND+episode%5BTitle/Abstract%5D%29+OR+cohort%5BTitle/Abstract%5D%29";
	}
		
  $string = "&term=(".$string.")AND".$suffix; ;

  call_user_func ('searchQue',$string);
  $beg = 0;
  call_user_func ('display',$beg);
  $page = 1;
} // end first search

else {
  if ($submit == "Y") {
     $Tpage=ceil($Count/20);
     if ($page > $Tpage) {
	$page = $Tpage;
     }
     if ($page <=0) {
	$page = 1;
     }
     $beg = ($page-1) * 20;
     call_user_func ('display',$beg);
  }
} //end else -- more pages

print "<hr>";
$pre=$page-1;
$next=$page+1;

$Tpage=ceil($Count/20);

if (($page > 1) && ($page <= $Tpage)){
  print "[<a href=".$_SERVER['PHP_SELF']."?submit=Y&page=$pre&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv>Previous</a>] ";
  if ($page < $Tpage) {
	print "  &nbsp;";
  	print " [<a href=".$_SERVER['PHP_SELF']."?submit=Y&page=$next&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv>Next</a>]";
  }
}

if (($page == 1) && ($page < $Tpage)) {
  print " [<a href=".$_SERVER['PHP_SELF']."?submit=Y&page=$next&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv>Next</a>]";
}

print "&nbsp;&nbsp;&nbsp;&nbsp;[<a href=index.php>New Search</a>]";

echo "<FORM ACTION=".$_SERVER['PHP_SELF']."?submit=Y&mod=pager&Count=$Count&QueryKey=$QueryKey&WebEnv=$WebEnv METHOD=POST>";
print "<INPUT type=\"submit\" value=\"page\">\n";

print "<input type=\"text\" name=\"page\" size=\"5\" value=\"$page\">\n";

print " of $Tpage.\n";
print "</form>";

end:

?>

</div>

              </div>
            </div>

              
<div class="grid-container padding-top-4"></div>

</div>
          </div>
        </div>
      </div>

  <footer class="bg-primary text-white">
  <div class="container-fluid">
  <div class="container pt-5">
    <div class="row mt-3">
      <div class="col-md-3 col-sm-6 col-6">
        <p class="mb-0"><a href="https://www.nlm.nih.gov/socialmedia/index.html" class="text-white">Connect with NLM</a></p>
        <ul class="list-inline">
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://www.facebook.com/nationallibraryofmedicine"><img src="//www.nlm.nih.gov/images/facebook.svg" class="img-fluid bg-secondary" alt="Facebook"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://www.linkedin.com/company/national-library-of-medicine-nlm/"><img src="//www.nlm.nih.gov/images/linkedin.svg" class="img-fluid bg-secondary" alt="LinkedIn"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://twitter.com/NLM_NIH"><img src="//www.nlm.nih.gov/images/twitter.svg" class="img-fluid bg-secondary"   alt="Twitter"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://www.youtube.com/user/NLMNIH"><img src="//www.nlm.nih.gov/images/youtube.svg" class="img-fluid bg-secondary" alt="You Tube"></a></li>
            <li class="list-inline-item me-2 social_media"><a title="External link: please review our privacy policy." href="https://public.govdelivery.com/accounts/USNLMOCPL/subscriber/new?preferences=true"><img src="//www.nlm.nih.gov/images/mail.svg" class="img-fluid bg-secondary" alt="Government Delivery"></a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <p class="address_footer text-white"> National Library of Medicine <br>
          <a href="https://www.google.com/maps/place/8600+Rockville+Pike,+Bethesda,+MD+20894/@38.9959508,-77.101021,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7c95e25765ddb:0x19156f88b27635b8!8m2!3d38.9959508!4d-77.0988323" class="text-white"> 8600 Rockville Pike <br>
          Bethesda, MD 20894 </a></p>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <p><a href="https://www.nlm.nih.gov/web_policies.html" class="text-white"> Web Policies </a><br>
          <a href="https://www.nih.gov/institutes-nih/nih-office-director/office-communications-public-liaison/freedom-information-act-office" class="text-white"> FOIA </a><br><a href="https://www.hhs.gov/vulnerability-disclosure-policy/index.html" class="text-white">HHS Vulnerability Disclosure</a></p>
      </div>
      <div class="col-md-3 col-sm-6 col-6">
        <p><a class="supportLink text-white" href="//support.nlm.nih.gov?from="> NLM Support Center </a> <br>
          <a href="https://www.nlm.nih.gov/accessibility.html" class="text-white"> Accessibility </a><br>
          <a href="https://www.nlm.nih.gov/careers/careers.html" class="text-white"> Careers </a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p class="mt-2 text-center"> <a class="text-white" href="//www.nlm.nih.gov/">NLM</a> | <a class="text-white" href="https://www.nih.gov/">NIH</a> | <a class="text-white" href="https://www.hhs.gov/">HHS</a> | <a class="text-white" href="https://www.usa.gov/">USA.gov</a></p>
      </div>
    </div>
  </div>
  </div>
  </footer>
<script src="https://www.nlm.nih.gov/scripts/jquery/jquery-latest.min.js"></script>
<script src="https://lhncbc.nlm.nih.gov/assets/javascript/popper-1.14.7.min.js"></script>
<script src="https://lhncbc.nlm.nih.gov/assets/uswds-2.4.0/js/uswds.min.js"></script>
<script src="https://lhncbc.nlm.nih.gov/assets/javascript/supportLink.js"></script>
<script src="https://www.nlm.nih.gov/core/nlm-notifyExternal/1.0/nlm-notifyExternal.min.js"></script>
</body>  
</html>
