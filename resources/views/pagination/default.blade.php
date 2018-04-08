{{-- @if ($paginator->hasPages()) --}}
<ul class="pagination">
	{{-- Previous Page Link --}} @if ($paginator->onFirstPage())
	<li class="page-number">
		<a href='#' aria-label="Previous" class="not-active">Previous</a>
	</li>
	@else
	<li class="page-number">
		<a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">Previous</a>
	</li>
	@endif {{-- Pagination Elements --}} @foreach ($elements as $element) {{-- "Three Dots" Separator --}} @if (is_string($element))
	<li class="page-number">
		<a href='#' aria-label="Previous" class="not-active">{{ $element }}</a>
	</li>
	@endif {{-- Array Of Links --}} @if (is_array($element)) @foreach ($element as $page => $url) @if ($page == $paginator->currentPage())
	<li class="page-number  active">
		<a href="#">{{ $page }}</a>
	</li>
	@else
	<li class="page-number">
		<a href="{{ $url }}">{{ $page }}</a>
	</li>
	@endif @endforeach @endif @endforeach {{-- Next Page Link --}} @if ($paginator->hasMorePages())
	<li class="page-number">
		<a href="{{ $paginator->nextPageUrl() }}" aria-label="Next">Next</a>
	</li>
	@else
	<li class="page-number">
		<a href="#" aria-label="Next" class="not-active">
			Next
		</a>
	</li>
	@endif
</ul>
{{-- @endif --}}