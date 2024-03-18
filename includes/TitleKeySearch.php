<?php

class TitleKeySearch extends SearchEngine {

	/**
	 *
	 * @param string $search
	 * @return SearchSuggestionSet
	 */
	protected function completionSearchBackend( $search ) {
		$results = TitleKey::prefixSearch(
			$this->namespaces,
			$search,
			$this->limit,
			$this->offset
		);
		return SearchSuggestionSet::fromStrings( $results );
	}

}
