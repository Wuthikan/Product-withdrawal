<div class="row page-showing-pagination">
      <div class="col-xs-6 showing">
      <?php 
        $f = 0;
        $l = 0;
        if($paginator->hasMorePages()){
            $f = $paginator->currentPage()*$paginator->perPage()-$paginator->count()+1;
        }else{
            $f = $paginator->currentPage()*$paginator->perPage()-$paginator->count();
        }
        $l = (($paginator->currentPage()-1)*$paginator->perPage())+$paginator->count();
      ?>
      Showing {{ $f }}-{{ $l }} of {{$paginator->total()}}
     
      </div>
      <div class="col-xs-6 page-pagination">
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-number">
                @if ($paginator->onFirstPage())
                    <a href="#" aria-label="Previous" class="not-active">
                        Previous
                    </a>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" class="active">
                        Previous
                    </a>
                @endif
              
            </li>
            @foreach ($elements as $element)
                @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-number active"><a>{{ $page }}</a></li>
                            @elseif ($page > 0)
                                <li class="page-number"><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                @endif
            @endforeach
            <!-- <li class="page-number  active"><a href="#">1</a></li>
            <li class="page-number"><a href="#">2</a></li>
            <li class="page-number"><a href="#">3</a></li>
            <li class="page-number"><a href="#">4</a></li>
            <li class="page-number"><a href="#">5</a></li> -->
            <li class="page-number">
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next" >
                        Next
                    </a>
                @else
                    <a href="#" class="not-active" aria-label="Next" >
                        Next
                    </a>
                @endif
              
            </li>
          </ul>
        </nav>
      </div>
    </div>