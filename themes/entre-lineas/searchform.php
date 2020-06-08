<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
  <fieldset>
		<div class="form-group">
			<input type="text" name="s" id="search" placeholder="Buscar en el sitio web ..." class="form-control-lg" value="<?php the_search_query(); ?>">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default"><span class="dashicons dashicons-search" style="
						color: #b1b1b1;
						font-size: 26px;">
					</span>
				</button>
			</span>
		</div>
  </fieldset>
</form>