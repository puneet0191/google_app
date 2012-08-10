<?php
$_user_location	= 'users';
define('AT_INCLUDE_PATH', '../../include/');
require (AT_INCLUDE_PATH.'vitals.inc.php');
$_custom_css = $_base_path . 'mods/google_app/module.css'; // use a custom stylesheet
require (AT_INCLUDE_PATH.'header.inc.php');

// database handling 
$query = "SELECT * FROM ".TABLE_PREFIX."my_admin_settings";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$my_string = $row['flags'];
$bit = $my_string[0];
$doc = $my_string[1];
$cal = $my_string[2];
$you = $my_string[3];        
?>
<!-- top navigation bar --> 

<div id="subnavlistcontainer">
    <div id="subnavbacktopage"></div>
    <ul id="subnavlist">
        <li class="active">Home</li>

<?php
        
	// check if flags are set
	if($doc){
?>		
		<li><a href="mods/google_app/doc.php">Google Docs</a></li>		
<?php
	}
	if($cal){
?>		
		<li><a href="mods/google_app/Cals.php">Google Calendars</a></li>		
<?php
	}
	if($you){
?>		
		<li><a href="mods/google_app/you.php">Youtube</a></li>		
<?php		
	}  	  
?>        
    </ul>
</div>

<!-- HTML render field -->
<div class="input-form">
	<fieldset class="group_form">
            <legend class="group_form">Google App Module</legend>
            <center>
		
               The Google App Addon module helps you create and share interactive content from within your ATutor course. <?php echo $_config['dummy']; ?>
               
               <li style="padding-bottom: 20px;"><a href="documentation/index_list.php?lang=<?php echo $_SESSION['lang']; ?>" onclick="ATutor.poptastic('<?php echo AT_BASE_HREF; ?>documentation/index_list.php?lang=<?php echo $_SESSION['lang']; ?>'); return false;" target="_new"><?php echo _AT('atutor_handbook');?></a></li>

            </center>
	</fieldset>	
</div>
<!-- -->
<?php require (AT_INCLUDE_PATH.'footer.inc.php'); ?>