<form role="search" method="get" id="searchform" class="hidden-xs form-inline navbar-right searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="form-group">
	  <span class="input-group">
	  <span class="input-group-addon">
	    <span class="glyphicon glyphicon-search"></span>
	  </span>
	  <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search Terms" />
	  </span>
	</span>
</form>