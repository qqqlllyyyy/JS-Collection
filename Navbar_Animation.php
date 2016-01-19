<?php
/**
 * Navbar will be smaller when scrolling down.
 */
?>


<style>
  .navbar {
    background-color: rgba(67, 142, 185, 0.8);
    padding: 20px;
    transition: padding 0.2s ease 0s, background-color 0.2s ease 0s;
  }
  .navbar-compact.navbar {
    background-color: rgba(67, 142, 185, 0.92);
    padding: 5px;
  }
</style>


<script type="text/javascript">
		jQuery(function($) {
		
			var isCompact = false;
			$(window)
			.on('scroll.scroll_nav', function() {
				var scroll = $(window).scrollTop();
				var h = $(window).height();
				var body_sH = document.body.scrollHeight;
				if(scroll > parseInt(h / 4) || (scroll > 0 && body_sH >= h && h + scroll >= body_sH - 1)) {
					if(!isCompact) $('.navbar').addClass('navbar-compact');
					isCompact = true;
				}
				else {
					$('.navbar').removeClass('navbar-compact');
					isCompact = false;
				}
			}).triggerHandler('scroll.scroll_nav');
			

		});
</script>
