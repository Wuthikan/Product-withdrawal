<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle header-page">
        <span id="lbHeaderPage">
          <h3>@yield('module_name') | <span>@yield('page_name')</span></h3>
        </span>
      </div>

      <!--start User Profile-->
      <ul class="nav navbar-nav navbar-right" id="navbar-top-right">
        <li class="">
          <a href="javascript:;" class="user-profile"  aria-expanded="false">
            <img src="{{ asset('images/backOffice/templates/profile-example.jpg') }}" alt=""/>

          </a>

        </li>
        <!--end User Profile-->
        <!--start Language-->
        <li role="presentation" class="dropdown">
          <input type="hidden" name="lang_current" id="lang_current">
          <input type="hidden" name="lang_th_image_url" id="lang_th_image_url" value="{{ asset('images/backOffice/templates/lang-th.png') }}">
          <input type="hidden" name="lang_en_image_url" id="lang_en_image_url" value="{{ asset('images/backOffice/templates/lang-en.png') }}">
          <a href="#" id="lang_display_a_current" data-lang="th" data-langcurrent="1"  class="change-lang user-language dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <img id="lang_image_display_current" src="{{ asset('images/backOffice/templates/lang-th.png') }}" alt=""/><span class="lang">TH</span>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul  class="dropdown-menu list-unstyled msg_list lang" role="menu">
            <li>
              <a href="#" id="lang_a_display_one"  data-lang="en" data-langcurrent="2" class="change-lang">
                <span class="image"> <img id="lang_image_display_one" class="image" src="{{ asset('images/backOffice/templates/lang-en.png') }}" alt=""/><span class="lang">EN</span></span>
              </a>
            </li>
          </ul>
        </li>
        <!--end Language-->
        <!--start Other-->
        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number Other" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell-o"></i>
            <span class="badge bg-red">6</span>
          </a>
        </li>
        <!--end Other-->
        <!--start Other-->
        <li role="presentation" class="dropdown">
          <div class="input-group date top-datetimepicker dropdown-toggle Other" id="datetimepicker1" style="width: 10px;border: none;">
            <input type='text' class="form-control" style="border: none;display: none;"/>
            <span class="input-group-addon" style="border: none;background-color:rgba(255, 255, 255, 0); padding-left: 0px;padding-right: 0px;">
               <i class="fa fa-calendar" style="font-size: 20px;"></i>
            </span>
          </div>

        </li>
        <!--end Other-->
        <!--start Other-->
        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number Other" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-exclamation-triangle"></i>

          </a>
        </li>
        <!--end Other-->
      </ul>

    </nav>
  </div>
</div>