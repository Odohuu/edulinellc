<nav class="main1">
    <div class="container">
        <a class="brand" style="padding:5px 10px;" href="{!! URL::to('') !!}"><img width="102" src="{{url('/images/sites/eduline-logo.png')}}"></a>
        <ul class="main1-nav">
            <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="/categories/4">Бидний тухай</a></li>
            <li class="{{ Request::is('#') ? 'active' : '' }}"><a href="#">Фото цомог</a></li>
            <li class="{{ Request::is('schools') ? 'active' : '' }}"><a href="/schools">Сургуулиуд</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="/contact">Холбоо барих</a></li>
        </ul>
    </div>
</nav>
<nav id="main2" class="main2 navbar navbar-default">
    <div class="container">

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }} text-uppercase"><a href="/">Эхлэл</a></li>
                <li class="{{ Request::is('articles') ? 'active' : '' }} text-uppercase"><a href="/articles">Таны сонорт</a></li>
                <li class="{{ Request::is('country') ? 'active' : '' }} text-uppercase"><a href="/country/1">Америк улс</a></li>
                <li class="{{ Request::is('country') ? 'active' : '' }} text-uppercase"><a href="/country">Солонгос улс</a></li>
                <li class="{{ Request::is('country') ? 'active' : '' }} text-uppercase"><a href="/country">Австрали улс</a></li>
                <li class="{{ Request::is('country') ? 'active' : '' }} text-uppercase"><a href="/country">Канад улс</a></li>
                <li class="{{ Request::is('country') ? 'active' : '' }} text-uppercase"><a href="/country">Япон улс</a></li>
            </ul>
        </div>

    </div>
</nav>