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
<div class="header">
  <div class="hiderGrayLein">
    <div class="headerContent">
      <table class="table">
        <tr>
          <td class="tableTd80">
             <marquee class="headerBegantiJuosta"><?echo $this->lang->line('header_garantija'); ?></marquee>
          </td>
          <td class="tableTd20">
            <div class="kalba"> 
              <a id="lt" class="lt" href="<? echo base_url('lt'); ?>">LT</a>
            </div>
          </td>
        </tr>
      </table>
    </div> 
    
    <div class="headerContentTxt">
      <?echo $this->lang->line('header_uzrasas'); ?>
    </div>   
    <div class="headerContentTel">
      <?echo $this->lang->line('header_tel'); ?>
    </div> 
     
  </div>  
  
</div>