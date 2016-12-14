<?php
/**
 * Admin Page Name: Share It Now
 * Description: Share article , blog , news  any content to your social network .
 */
 
 function shitnow_setting_page(){
global $wpdb;
if(isset($_POST['submit'])){
	 $a= $_POST['database'].",".$_POST['password'].",".$_POST['username'].",".$_POST['url'];
	update_option( 'shareitnow',$_POST); 
}
$sit_table  = get_option('shareitnow');


echo  plugins_url();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<form name='shitnow' method='POST' action=''>
<label>Database Name</label>
<input type='text' name='database'  value='<?php echo $sit_table['database'] ;?>'/></br>
<label>Passoword</label>
<input type='password' name='password' value='<?php echo $sit_table['password'] ;?>'/></br>
<label>Username</label>
<input type='text' name='username' value='<?php echo $sit_table['username'] ;?>'/></br>
<label>Url</label>
<input type='text' name='url' value='<?php echo $sit_table['url'] ;?>' /></br>
<p class="submit">
<input type="submit" name="submit" id="" class="button button-primary" value="Save Changes">
</p>
</form>
<?php } ?>
