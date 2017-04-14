<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" type="text/css" href="/packages/vis/detect-browser/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/packages/vis/detect-browser/css/detect_browser.css">

</head>

<body>
    <div class="old-body">
        <div class="old-content">
            <img src="{{asset("/img/logo.png")}}" alt="" class="old-logo">
            <h2>К сожалению, наш сайт не поддерживает устаревшие версии браузеров</h2>
            <p>Предлагаем загрузить новые, это займет несколько минут</p>
            <div class="browsers-container">
                @foreach($browsers as $browser)
                    @if(!isset($browser['download_link'])||!$browser['download_link']) @continue @endif
                    <div class="browser">
                        <img src="{{asset($browser['icon'])}}" alt="" class="browser-img">
                        <span class="browser-name">{{$browser['full_name']}}</span>
                        <a href="{{$browser['download_link']}}" class="browser-download"><span>скачать</span></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
