@extends('layouts.backOffice.template')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/back-office/setting/company/branch/index.css')}}"/>
@endsection

@section('module_name', 'COMPANIES > BRANCH')
@section('page_name', 'INDEX')

@section('body')
<div class="x_content">

  <section class="section-header-index">
    <form class="form-inline form-header-index">
      <div class="row">
        <table>
          <tr>
            <td class="col-1">
              <div class="col-1-content" >
                <div class="form-group select-all">
                  <input type="checkbox"  checked class="iCheck" id="selectall" name="selectall" >
                  <label for="selectall" class="iCheck-label" >Select All</label>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-default-background" onclick="window.location='{{ url("back-office/setting/company/1/branch/create") }}'">
                    <span class="btn-label"><i class="fa fa-plus-square new" aria-hidden="true"></i></span ><span class="btn-label-label">NEW</span>
                  </button>
                </div>
                <div class="form-group button-2">
                  <button type="button"    class="btn btn-default-background">
                    <span class="btn-label"><span class="fa-approve-all"></span></span><span class="btn-label-label">Approve All</span>
                  </button>
				        </div>
              </div>
            </td>
            <td class="col-2">
              <div class="" >
                <div class="form-group form-fixed-width" >
                  <div class="icon-addon addon-sm">
                    <input  type="text" placeholder="SEARCH" class="form-control search" id="SEARCH" >
                    <label for="search"  class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                  </div>
                </div>
              </div>
            </td>
            <td class="col-3">

              <div class="text-right col-3-content">
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background">
                    <span class="btn-label"><i class="fa fa-file-pdf-o pdf" aria-hidden="true"></i></i></span><span class="btn-label-label">PDF</span>
                  </button>
                </div>
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background">
                    <span class="btn-label"><i class="fa fa-file-excel-o excel" aria-hidden="true"></i></i></span><span class="btn-label-label">Excel</span>
                  </button>
                </div>
                <div class="form-group">
                  <button type="button" class="btn  btn-default-background">
                    <span class="btn-label"><i class="fa fa-times-circle-o danger" aria-hidden="true"></i></span><span class="btn-label-label">Delete All</span>
                  </button>
                </div>
                <div class="form-group">
                  <div class="btn-group ngin-dropdown-sort">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-sort-alpha-desc"></i> SORT
                    </a>
                    <ul class="dropdown-menu dropdown-menu-form">
                      <li class="title">ORDER</li>
                      <li><input type="radio" id="radioAsc" name="rdoOrder" checked="checked" value="asc"><label for="radioAsc">Ascending</label></li>
                      <li><input type="radio" id="radioDes" name="rdoOrder" value="des"><label for="radioDes">Descending</label></li>
                      <li role="separator" class="divider"></li>
                      <li class="title">BY</li>
                      <li><input type="radio" id="radioId" name="rdoBy" checked="checked" value="id"><label for="radioId">ID</label></li>
                      <li><input type="radio" id="radioDocDate" name="rdoBy" value="doc_date"><label for="radioDocDate">Document Date</label></li>
                      <li><input type="radio" id="radioCusName" name="rdoBy" value="cus_name"><label for="radioCusName">Customer Name</label></li>
                      <li><input type="radio" id="radioAmount" name="rdoBy" value="amount"><label for="radioAmount">Amount</label></li>
                      <li><input type="radio" id="radioStatus" name="rdoBy" value="status"><label for="radioStatus">Status</label></li>
                    </ul>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </table>
      </div>
    </form>
	</section>

  <section id="company-branch">

    <div class="tab-content scroll-2 row">
      <div class="branch-item" data-target="#branch-detail-01" data-toggle="collapse">
        <div class="branch col-md-6">
          <div class="checkbox customCheckbox">
            <input type="checkbox" class="iCheck"/>
            <ins class="iCheck-helper"></ins>
          </div>
          <div class="info">
            <p><strong>BRANCH : </strong>Headquarters</p>
            <p class="last"><strong>Name : </strong>Lorem Ipsum</p>
          </div>
        </div>
        <div class="contact col-md-6">
          <p><strong>CONTACTS</strong><span> (K.Lorem ipsum)</span></p>
          <p class="last"><strong>TELEPHONE NUMBER</strong> <span>0888888888</span></p>
        </div>
      </div> <!-- /END .branch-item -->
      <div class="collapse in" id="branch-detail-01">
        <div class="branch-detail">
          <div class="branch row">
            <div class="branch-detail-info col-md-5">
              <p class="highlight">COMPANY ADDRESS (Headquarters)</p>
              <p>Adidas Company Limited (Branch No. 00001)</p>
              <p>No. 18, Kijipanich Building, Room 405, 4th Floor</p>
              <p>Patpong Road, Suriyawong Bangrak</p>
              <p>Bangkok 10500</p>
            </div>
            <div class="contact col-md-5">
              <p class="highlight">CONTACTS</p>
              <p>Adivis Siriok(Pop)</p>
              <p>Adiwit@gmail.com</p>
              <p class="last">(+66) 093231112</p>
              <p class="highlight">DEPARTMENT</p>
              <p>Purchase</p>
            </div>
            <div class="action col-md-2">
              <div class="buttons menu">
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Edit</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-files-o" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Duplicate</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-undo info" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Undo</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Delete</span>
                </button>
              </div>
            </div>
          </div>
          <div class="description col-md-10">
            <p class="highlight">DESCRIPTION</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div> <!-- /END .branch-detail -->
      </div>

      <div class="branch-item" data-target="#branch-detail-02" data-toggle="collapse">
        <div class="branch col-md-6">
          <div class="checkbox customCheckbox">
            <input type="checkbox" class="iCheck"/>
            <ins class="iCheck-helper"></ins>
          </div>
          <div class="info">
            <p><strong>BRANCH : </strong>0001</p>
            <p class="last"><strong>Name : </strong>Lorem Ipsum</p>
          </div>
        </div>
        <div class="contact col-md-6">
          <p><strong>CONTACTS</strong><span> (K.Lorem ipsum)</span></p>
          <p class="last"><strong>TELEPHONE NUMBER</strong> <span>0888888888</span></p>
        </div>
      </div> <!-- /END .branch-item -->
      <div class="collapse" id="branch-detail-02">
        <div class="branch-detail">
          <div class="branch row">
            <div class="branch-detail-info col-md-5">
              <p class="highlight">COMPANY ADDRESS (Headquarters)</p>
              <p>Adidas Company Limited (Branch No. 00001)</p>
              <p>No. 18, Kijipanich Building, Room 405, 4th Floor</p>
              <p>Patpong Road, Suriyawong Bangrak</p>
              <p>Bangkok 10500</p>
            </div>
            <div class="contact col-md-5">
              <p class="highlight">CONTACTS</p>
              <p>Adivis Siriok(Pop)</p>
              <p>Adiwit@gmail.com</p>
              <p class="last">(+66) 093231112</p>
              <p class="highlight">DEPARTMENT</p>
              <p>Purchase</p>
            </div>
            <div class="action col-md-2">
              <div class="buttons menu">
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Edit</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-files-o" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Duplicate</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-undo info" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Undo</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Delete</span>
                </button>
              </div>
            </div>
          </div>
          <div class="description col-md-10">
            <p class="highlight">DESCRIPTION</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div> <!-- /END .branch-detail -->
      </div>

      <div class="branch-item" data-target="#branch-detail-03" data-toggle="collapse">
        <div class="branch col-md-6">
          <div class="checkbox customCheckbox">
            <input type="checkbox" class="iCheck"/>
            <ins class="iCheck-helper"></ins>
          </div>
          <div class="info">
            <p><strong>BRANCH : </strong>0002</p>
            <p class="last"><strong>Name : </strong>Lorem Ipsum</p>
          </div>
        </div>
        <div class="contact col-md-6">
          <p><strong>CONTACTS</strong><span> (K.Lorem ipsum)</span></p>
          <p class="last"><strong>TELEPHONE NUMBER</strong> <span>0888888888</span></p>
        </div>
      </div> <!-- /END .branch-item -->
      <div class="collapse" id="branch-detail-03">
        <div class="branch-detail">
          <div class="branch row">
            <div class="branch-detail-info col-md-5">
              <p class="highlight">COMPANY ADDRESS (Headquarters)</p>
              <p>Adidas Company Limited (Branch No. 00002)</p>
              <p>No. 18, Kijipanich Building, Room 405, 4th Floor</p>
              <p>Patpong Road, Suriyawong Bangrak</p>
              <p>Bangkok 10500</p>
            </div>
            <div class="contact col-md-5">
              <p class="highlight">CONTACTS</p>
              <p>Adivis Siriok(Pop)</p>
              <p>Adiwit@gmail.com</p>
              <p class="last">(+66) 093231112</p>
              <p class="highlight">DEPARTMENT</p>
              <p>Purchase</p>
            </div>
            <div class="action col-md-2">
              <div class="buttons menu">
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Edit</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-files-o" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Duplicate</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-undo info" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Undo</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Delete</span>
                </button>
              </div>
            </div>
          </div>
          <div class="description col-md-10">
            <p class="highlight">DESCRIPTION</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div> <!-- /END .branch-detail -->
      </div>

      <div class="branch-item" data-target="#branch-detail-04" data-toggle="collapse">
        <div class="branch col-md-6">
          <div class="checkbox customCheckbox">
            <input type="checkbox" class="iCheck"/>
            <ins class="iCheck-helper"></ins>
          </div>
          <div class="info">
            <p><strong>BRANCH : </strong>0003</p>
            <p class="last"><strong>Name : </strong>Lorem Ipsum</p>
          </div>
        </div>
        <div class="contact col-md-6">
          <p><strong>CONTACTS</strong><span> (K.Lorem ipsum)</span></p>
          <p class="last"><strong>TELEPHONE NUMBER</strong> <span>0888888888</span></p>
        </div>
      </div> <!-- /END .branch-item -->
      <div class="collapse" id="branch-detail-04">
        <div class="branch-detail">
          <div class="branch row">
            <div class="branch-detail-info col-md-5">
              <p class="highlight">COMPANY ADDRESS (Headquarters)</p>
              <p>Adidas Company Limited (Branch No. 00003)</p>
              <p>No. 18, Kijipanich Building, Room 405, 4th Floor</p>
              <p>Patpong Road, Suriyawong Bangrak</p>
              <p>Bangkok 10500</p>
            </div>
            <div class="contact col-md-5">
              <p class="highlight">CONTACTS</p>
              <p>Adivis Siriok(Pop)</p>
              <p>Adiwit@gmail.com</p>
              <p class="last">(+66) 093231112</p>
              <p class="highlight">DEPARTMENT</p>
              <p>Purchase</p>
            </div>
            <div class="action col-md-2">
              <div class="buttons menu">
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-pencil-square-o success" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Edit</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-files-o" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Duplicate</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-undo info" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Undo</span>
                </button>
                <button type="button" class="btn btn-ngin btn-default">
  								<span class="btn-label">
                    <i class="fa fa-times-circle-o danger" aria-hidden="true"></i>
                  </span>
                  <span class="btn-text">Delete</span>
                </button>
              </div>
            </div>
          </div>
          <div class="description col-md-10">
            <p class="highlight">DESCRIPTION</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div> <!-- /END .branch-detail -->
      </div>

    </div>
  </section>

  <div class="row page-showing-pagination">
    <div class="col-xs-6 showing">
      Showing 1-10 of 100
    </div>
    <div class="col-xs-6 page-pagination">
      <nav aria-label="Page navigation">
        <ul class="pagination">
          <li class="page-number">
            <a href="#" aria-label="Previous" class="not-active">
              Previous
            </a>
          </li>
          <li class="page-number  active"><a href="#">1</a></li>
          <li class="page-number"><a href="#">2</a></li>
          <li class="page-number"><a href="#">3</a></li>
          <li class="page-number"><a href="#">4</a></li>
          <li class="page-number"><a href="#">5</a></li>
          <li class="page-number">
            <a href="#" aria-label="Next">
              Next
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('js/back-office/setting/company/branch/index.js') }}"></script>
@endsection
