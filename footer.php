			<div class="wrap">
	            <footer id="bottom">
	                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. All rights reserved.</small>
	            </footer>
		    </div>
        </div>

		<script>
			$('.cross').click(function(){
				if($(this).hasClass('transform')) $(this).removeClass('transform'); else $(this).addClass('transform');
			});
		</script>
    </body>
</html>