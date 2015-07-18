<?php
/**
 * Template for displaying search form in bootstrap-basic theme
 * 
 * @package bootstrap-basic
 */
?>


<li id="search" style="list-style-type:none">

    <form id="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
      <div>
         <input type="text" name="s" id="s" size="40" placeholder="search..." />
   

  
      </div>
     </form>
</li>