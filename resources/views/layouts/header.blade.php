<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">ForeignLife</a>
        <div  class="visible-xs-block navbar-right xs-top-search"><i class="fa fa-search" aria-hidden="true"></i></div>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li><a href="/question">@lang('menu.question')</a></li>
            <li><a href="#about">@lang('menu.community')</a></li>
            <li><a href="#contact">@lang('menu.rent')</a></li>
            <li><a href="#contact">@lang('menu.shop')</a></li>
            <li><a href="#contact">@lang('menu.study')</a></li>
            <li><a href="#contact">@lang('menu.visa')</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="fa fa-user"></span> @lang('menu.signup')</a></li>
            <li><a href="#"><span class="fa fa-sign-in"></span> @lang('menu.login')</a></li>
            <li><a href="{{ URL::route('question.region',['region'=>Regions::getSubdomain()]) }}"  class="modal-link"><i class="fa fa-globe" aria-hidden="true"> {{ LaravelLocalization::getCurrentLocaleName()  }}</i> <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
        </ul>
        <form class="form-inline navbar-right my-2 my-lg-0 visible-lg top-search-form">
            <input class="form-control mr-sm-2 top-search-text" type="text" placeholder="Search">
            <button class="btn btn-outline-success btn-success my-2 my-sm-0 top-search-submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
      </div><!--/.nav-collapse -->
    </div>
</nav>