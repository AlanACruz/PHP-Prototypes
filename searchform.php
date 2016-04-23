<!-- PAGE TYPE: searchform.php -->
<form role="search" method="get" id="searchForm" action="<?php echo home_url( '/' ); ?>">
	<label class="screen-reader-text" for="s">Search:</label>
	<input type="text" value="" name="s" id="s" />
	<a class="headerMenuItem" href="javascript:void(0);" onclick="$( '#searchForm' ).submit();">Search</a>
	<!-- input type="submit" id="searchSubmit" value="Search" / -->
</form>