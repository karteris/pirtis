<?$lang = $this->lang->line('lang');?>

<form action="<?echo base_url('home/saveContact');?>" id="contactFormSubmit" method="post">
	<div class="contactBlock"> 
		<br />
		<center><? echo $this->lang->line('contact_about_form'); ?></center>
		<table border="0" class="contactForm"> 
		<tr>
			<td>      
				<? echo $this->lang->line('contact_name'); ?>
			</td>
			<td> 
				<input type="text" name="name"/ required >
			</td>
		</tr> 
		<tr>
			<td>      
				<? echo $this->lang->line('contact_city'); ?>
			</td>
			<td>  
				<input type="text" name="city" required />
			</td>
		</tr> 
		<tr>
			<td>      
				<? echo $this->lang->line('contact_phone'); ?>
			</td>
			<td>  
				<input type="text" name="phone" required  />
			</td>
		</tr> 
		<tr>
			<td colspan="2" align="center">      
				<input type="submit"  value="<? echo $this->lang->line('contact_save_button'); ?>">
			</td>
		</tr> 
		</table>  
	 </div>
</form>
<br />

<script>
$( "#contactFormSubmit" ).submit(function( event ) {
   alert ('Artimiausiu metu su jumis susisieksime');
   return
});
</script>


  
  