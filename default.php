
<!doctype html>
<?php setcookie("user", "guest", time()+3600); ?>
 <?php
session_start();

if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
//echo "Views=". $_SESSION['views'];
?> 
 

<html>
<head>

<meta charset="utf-8">
<title>Ian Stalter - Introduction Site</title>
<META NAME="Description" CONTENT="Portfolio introduction site for Ian Stalter web developer, PHP, HTML, CSS.">
<link href="mystyles.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
</head>

<body>
  
 
<div class="container">
<header style="height:60px; background-color:blue;">

    <table width="960" bgcolor="blue;" style="background-color:blue;" border="0">
      <tr>
      <td width="60"><a href="default.php"><img style="" src="blue_banner-760x147.jpg" width="50" height="50"></a></td>
        <td width="125"><form action="mailto:istalter66@gmail.com?Subject=Hello%20again">
        <a style="color:white; text-decoration:none;" href="about.html">INTRODUCTION</a>

<input style="align:center;" type="submit" value="SEND AN E-MAIL" />
</form></td>
        <td width="533"></td>
        <td height="40" style="padding-top:13px" width="38"><a href="http://www.linkedin.com/pub/ian-stalter/6/199/947"><img style="text-align:right;" src="linkedins.png" alt="" width="38" height="34"></a></td>
        <td style="padding-top:13px" width="38"><img style="text-align:right;" src="fbs.png" alt="" width="38" height="34"></td>
        <td style="padding-top:13px" width="38"><a href="mailto:istalter66@gmail.com?Subject=Hello again"><img style="text-align:right;"  src="emailr.png" alt="" width="38" height="34"></a></td>
        <td style="padding-top:13px" width="66"><img style="text-align:right;" src="fbs.png" alt="" width="38" height="34"></td>
      </tr>
    </table>
</header>
  
  <article class="content">
    <topbanner>
<img src="bannertop.jpg" alt="" width="960" height="23">
</topbanner>

<div class="breadcrumbs" style="text-align:center;">
 <a style="text-align:center; text-decoration:none;" href ="default.php"> -> home </a>    
 </div>

    
    
    
      <table class="big" style="border-collapse: collapse; margin-left:5px;" height="" width="950">
        <tbody>
          <tr>
            <td class="up" style="border-left:1px dotted gray; text-align:center; " width="200" height="20" valign="top"><div class="top";><a style=" text-align:center;">PROJECT<br>
              NAME<br/><br/><br/></a></div>
              <br/>
              <div class="hidde"><a href="http://www.jewelcitizen.com/en/"><span 
 style="font-family: Arial; background-color:lightgray;">JEWEL CITIZEN</span></a><br/>
              <br/>
              <br/>
              <a href="http://www.icevibro.com/"><span style="font-family: Arial;background-color:lightgray;">ICE VIBRO</span></a><br/>
              <br/>
              <br/>
              <a href="http://www.dmwmedia.com/"><span style="font-family: Arial;background-color:lightgray;">DIGITAL MEDIA WIRE</span></a><br/>
              <br/>
              <br/>
              <a href="http://www.pibb.com.cn"><span style="font-family: Arial;background-color:lightgray;">PIBB</span></a><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">CHINA CHIROPRACTOR</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">HP EMPR</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">EMPR TAOBAO</span></td>
            </td>
        </div>
        
            <td class="p" style="border-left:1px dotted gray; text-align:center;" height="20" width="325" valign="top"><div class="top";><a href="cms.html" style="text-align:center; text-decoration:none;">CONTENT MANAGEMENT -<br>
              SYSTEM</a><br>
              
            </div>
              <br/>
              <div class="visible1">
              <a style="color:black;" href="cms.html"><img src="joomlatease.jpg" alt="" width="150" height="98"></a>
              <p style="font-family: arial;"> Joomla offers a flexible, user-friendly interface, Wordpress offers an awesome tagging system ideal for magazine style sites, and if needed we can craft a custom CMS to suit client needs. <br/>
              <a style="color:black;" href="cms.html">>read more..</a>
              </p>
              
              </br>
              </br>
              
              <img src="teaser1.jpg" alt="" width="150" height="98">
              <p style="font-family: arial;"> Joomla offers a flexible, user-friendly interface, Wordpress offers an awesome tagging system ideal for magazine style sites, and if needed we can craft a custom CMS to suit client needs.</p>
              
              </div>
<div style="display:none;" class="hidden11">
</br></br></br>
              <span style="font-family: Arial;background-color:lightgray;">JOOMLA 2.5</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">JOOMLA</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">WORDPRESS</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">JOOMLA</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">DREAMWEAVER</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">ASP</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">TAOBAO</span></td>
            </td>
            </div>
            
            <td class = "up" style="border-left:1px dotted gray; text-align:center;" height="20" width="300" valign="top"><div class="top";><a style=" text-align:center;">FUNCTIONALITY<br>
              APPLIED</a><br>
            </div>
           
              <br/>
              
              <div class="visible">
              <img src="html5g.jpg" alt="" width="150" height="98">
              
              <p style="font-family: arial; class="round"> Html-5 , CSS 3, and a strong knowledge of content management systems, along with programming are useful in designing user-friendly interfaces.</p>
              <br/>
              <br/>
              <img src="teaser1.jpg" alt="" width="150" height="98">
              
              <p style="font-family: arial;"> SEO and translation for the Chinese market are easily implemented with the help of newsletter campaigns, dynamic seo, and CMS built in translation components or custom built functions.</p>
     </div>
            <div style="background:blue;" class="hidden1">
               </br></br>
               
              <span class ="level1" style="font-family: Arial;background-color:lightgray;">MULTILINGUAL, DESIGN<br/></span>
              
              <p class ="level2" style="font-family: arial; border:1px solid gray; color:white;">
              Joomla 2.5 offers built in translation functionality, and with the installation of language packs it is easy to translate a site into multiple languages. </p>
              <br/>
              <br/>
              <span class="level3" style="font-family: Arial;background-color:lightgray;">NEWSLETTERS</span><br/>
              <p class ="level4" style="font-family: Arial; text-align:center; border:1px solid gray; color:white;">
              Need to build a client base? With the help of beautifully built and cross browser compatible news letters it is easy to impress clients and showcase your website. </p>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">DATABASE MIGRATION</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">NEWSLETTER, WIDGET</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">DESIGN</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">DYNAMIC SEO</span><br/>
              <br/>
              <br/>
              <span style="font-family: Arial;background-color:lightgray;">TAO-BAO STORE</span></td>
            </div>
             
            </td>
            
            
            <td class="up" style="border-left:1px dotted gray; border-right:1px dotted gray; text-align:center;" height="20" width="250" valign="top">
              <div class="sideright" style="width:170px;">


              <div style="width:222px;" id="Accordion1" class="Accordion" tabindex="0">
                <div class="AccordionPanel">
                  <div class="AccordionPanelTab">Login  <?php
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />"; //retrieve session data
echo "Pageviews=". $_SESSION['views'];
?> </div>
                  <div class="AccordionPanelContent">
                  <a style="color:black;">LOGIN USER</a></br> 
                  <table width="122" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="check_login.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1"
bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Login Form  </strong></td>
</tr>
<tr>
<td width="">Username：</br><input name="myusername" type="text" id="myusername"/>
</td>
</tr>
<tr>
<td>Password: </br><input name="mypassword" type="text" id="mypassword"/></td>
</tr>
<tr>
<td><input type="submit" name="Submit" value="Login"/></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
                  </div>
                </div>
                <div class="AccordionPanel">
                  <div class="AccordionPanelTab">Weibo</div>
                  <div class="AccordionPanelContent"><iframe style="overflow:hidden;" width="200" height="550" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=250&height=550&fansRow=2&ptype=0&speed=0&skin=1&isTitle=0&noborder=1&isWeibo=1&isFans=0&uid=2834285691&verifier=003053b3&colors=2,0501fe,0609fd,000000,00b7ef&dpc=1"></iframe></div>
                </div>
                
                <div class="AccordionPanel">
                  <div class="AccordionPanelTab">Register</div>
                  <div class="AccordionPanelContent">
                 <form action="insert.php" method="post">
Firstname: <input type="text" name="firstname" /></br>
Lastname: <input type="text" name="lastname" /></br>
Age: </br><input type="text" name="age" />
<input type="submit" />

</form>
                 </div>
                </div>
                
                <div class="AccordionPanel">
                  <div class="AccordionPanelTab">Upload</div>
                  <div class="AccordionPanelContent"><form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form></div>
                </div>
                
                
              </div>
              
            

</div>
     
     <?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail("someone@example.com", $subject,
  $message, "From:" . $email);
  echo "Thank you for using our mail form";
  }
else
//if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <br/> <input name='email' type='text' /><br />
  Subject: <br/> <input name='subject' type='text' /><br />
  Message:<br />
  <textarea name='message' rows='15' cols='20'>
  </textarea><br />
  <input type='submit' />
  </form>";
  }
?>
              
              <span style="font-family: Arial;background-color:lightgray;"></span></td>
            <div>
            </td>
          </tr>
        </tbody>
      </table>
      <br>
    </section>
    <section></section>
  <!-- end .content --></article>
  <footer>
    <p class="footer">copyright ian stalter 2012</p>
    <address>
    </address>
  </footer>
  <!-- end .container --></div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");

</script>
</body>
</html>
