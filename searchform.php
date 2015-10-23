<div itemscope itemtype="http://schema.org/WebSite">
	<meta
		itemprop="url"
		content="https://shkspr.mobi/blog/"
	/>
	<form
		itemprop="potentialAction"
		itemscope
		itemtype="http://schema.org/SearchAction"
		role="search"
		method="get"
		id="searchform"
		class="searchform"
		action="<?php echo home_url( '/' ); ?>"
	>
		<meta
			itemprop="target"
			content="<?php echo home_url( '/' ); ?>?s={s}"
		/>
		<label>
			<input
				itemprop="query-input"
				type="search"
				class="search-field"
				placeholder="Search …"
				value="<?php echo get_search_query() ?>"
				name="s"
				title="Search this site"
			/>
		</label>
	</form>
</div>