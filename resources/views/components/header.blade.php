<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand">
                <bold>AGC - BIOPORTAL
            </a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li {{ request()->is('location', 'location/create') ? 'class=active' : '' }}>
                    <a href="{{ url('location') }}">Locations</a>
                </li>
                <li {{ request()->is('industry', 'industry/create') ? 'class=active' : '' }}>
                    <a href="{{ url('/industry') }}">Industries</a>
                </li>
                <li {{ request()->is('store', 'store/create') ? 'class=active' : '' }}>
                    <a href="{{ url('/store') }}">Store</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="" rel="noopener" target="_blank">Ready to Print</a></li>
                <li><a href="" rel="noopener" target="_blank">Cut off Date</a></li>
            </ul>
        </div>
    </div>
</div>
