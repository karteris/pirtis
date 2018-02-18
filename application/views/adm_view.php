<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><? if (isset ($headerDescription)){ echo $headerTitle; } ?></title>
  <meta name="Description" content="<? if (isset ($headerDescription)){ echo $headerDescription; }?>"/>
  <meta charset="<?php echo $this->config->item('charset');?>" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/image_slider.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/js_galeri/lightbox-plus-jquery.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('public/js/main.js');?>"></script>
  <link rel="stylesheet" href="<?php echo base_url('public/css/style.css');?>" />
</head>

<body>
	<u><a href="<?echo base_url('adm');?>">Administracinis puslapis</a></u>
	<form action="<?echo base_url('adm/searchContact');?>" id="contactFormSubmit" method="post">
		<div> 
			<? echo $this->lang->line('adm_vardas'); ?>
			<input type="text" name="name" required  />
			<input type="submit"  value="<? echo $this->lang->line('adm_search'); ?>">
		 </div>
	</form>

	<table class="table" border="1">
		<tr>
			<td align="center">
				<? echo "Nr."; ?>
			</td>
			<td align="center">
				<? echo $this->lang->line('contact_name'); ?>
			</td>
			<td align="center">
				<? echo $this->lang->line('contact_city'); ?>
			</td>
			<td align="center">
				<? echo $this->lang->line('contact_phone'); ?>
			</td>
		<tr>
		<?php 
			$i=0; 
			foreach($contacts as $contact): 
			$i++;
		?>
			<tr>
				<td align="center"> 
					<?echo $i.".";?>
				</td>
				<td>
					<?echo $contact['name'];?>
				</td>
				<td>
					<?echo $contact['city'];?>
				</td>
				<td>
					<?echo $contact['phone'];?>
				</td>
			</tr>
		<?php endforeach;?>
		
		<?if ($this->pagination->create_links() != ''){?>
			<tr>
				<td colspan="4" align="center">
					<?php echo $this->pagination->create_links(); ?>
				</td>
			</tr>
		<?}?>
	</table>
</body>
</html>