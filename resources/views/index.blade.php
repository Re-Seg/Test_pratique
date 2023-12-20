<?php
    $listsController = new \App\Http\Controllers\lists();
    $result = $listsController->list_impl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type='text/css' property='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <div class="h_left">
                <img src="{{asset('image/fmg_w_50.png')}}" alt="logo">
            </div>
            <div class="h_right">
                <div id="log_in">Log in</div>
                <div id="sign_up">Sign_up</div>
                <div id="menu"><span></span></div>
            </div>
        </header>
        <div class="body">
            <div id="part_left">
                <h1>Where do you want to go with Guydeez <span>incredible locals</span></h1>
                <p>Guydeez offres you private and personnalized tours with a local guide abroad</p>
                <form method="get">
                    <input name="city" type="search" list="country_city" placeholder="Where do you want to go ?" id="search">
                    <button type="submit" id="search_button">
                        <svg fill="#000000" height="15px" width="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                            <g><g><path d="M508.255,490.146l-128-128c-0.06-0.06-0.137-0.077-0.196-0.128c34.193-38.434,55.142-88.917,55.142-144.418c0-120.175-97.425-217.6-217.6-217.6S0.001,97.425,0.001,217.6s97.425,217.6,217.6,217.6c55.501,0,105.975-20.949,144.418-55.151c0.06,0.06,0.077,0.137,0.128,0.196l128,128c2.5,2.509,5.777,3.755,9.054,3.755s6.554-1.246,9.054-3.746C513.247,503.253,513.247,495.147,508.255,490.146z M217.601,409.6c-105.865,0-192-86.135-192-192s86.135-192,192-192s192,86.135,192,192S323.466,409.6,217.601,409.6z"/></g></g>
                        </svg>
                        Search
                    </button>
                    <datalist id="country_city">
                        <option name="city" value="miami">USA</option>
                        <option name="city" value="las_vegas">USA</option>
                        <option name="city" value="los_angels">USA</option>
                        <option name="city" value="washigton">USA</option>
                        <option name="city" value="hawaï">USA</option>
                        <option name="city" value="rome">Italie</option>
                        <option name="city" value="venise">Italie</option>
                        <option name="city" value="milan">Italie</option>
                        <option name="city" value="cinque_terre">Italie</option>
                        <option name="city" value="naples">Italie</option>
                        <option name="city" value="barcelone">Espagne</option>
                        <option name="city" value="madride">Espagne</option>
                        <option name="city" value="séville">Espagne</option>
                        <option name="city" value="valence">Espagne</option>
                        <option name="city" value="cordoue">Espagne</option>
                    </datalist>
                </form>
            </div>
            <div id="part_right" >
            <div id="gallery_right" class="gallery">
                <img src="<?php echo"$result[1]"?>" alt="image" id="img_1" class="img">
                <div id="carousel">
                    <div>
                        <svg id="c-left" fill="#000000" width="30px" height="30px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                            <g id="SVGRepo_iconCarrier"><path d="M 8.2656 35.7812 C 7.8672 36.2031 7.6328 36.7187 7.6328 37.3047 C 7.6328 38.5234 8.5703 39.4609 9.7891 39.4609 C 10.3750 39.4609 10.9140 39.2031 11.3125 38.8281 L 28.0000 21.7891 L 44.6875 38.8281 C 45.0859 39.2031 45.6484 39.4609 46.2109 39.4609 C 47.4297 39.4609 48.3672 38.5234 48.3672 37.3047 C 48.3672 36.7187 48.1328 36.2031 47.7344 35.7812 L 29.5703 17.2187 C 29.1718 16.7734 28.5859 16.5391 28.0000 16.5391 C 27.3906 16.5391 26.875 16.7734 26.4297 17.2187 Z"/></g>
                        </svg>
                        <span>
                            <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15px" height="15px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/><g id="SVGRepo_iconCarrier"> <path fill="#000000" d="M32,0C18.746,0,8,10.746,8,24c0,5.219,1.711,10.008,4.555,13.93c0.051,0.094,0.059,0.199,0.117,0.289l16,24 C29.414,63.332,30.664,64,32,64s2.586-0.668,3.328-1.781l16-24c0.059-0.09,0.066-0.195,0.117-0.289C54.289,34.008,56,29.219,56,24 C56,10.746,45.254,0,32,0z M32,32c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S36.418,32,32,32z"/></g></svg>
                            <?php echo"$result[6]"?>
                        </span>
                        <svg id="c-right" fill="#000000" width="30px" height="30px" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"/><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                            <g id="SVGRepo_iconCarrier"><path d="M 8.2656 35.7812 C 7.8672 36.2031 7.6328 36.7187 7.6328 37.3047 C 7.6328 38.5234 8.5703 39.4609 9.7891 39.4609 C 10.3750 39.4609 10.9140 39.2031 11.3125 38.8281 L 28.0000 21.7891 L 44.6875 38.8281 C 45.0859 39.2031 45.6484 39.4609 46.2109 39.4609 C 47.4297 39.4609 48.3672 38.5234 48.3672 37.3047 C 48.3672 36.7187 48.1328 36.2031 47.7344 35.7812 L 29.5703 17.2187 C 29.1718 16.7734 28.5859 16.5391 28.0000 16.5391 C 27.3906 16.5391 26.875 16.7734 26.4297 17.2187 Z"/></g>
                        </svg>
                    </div>
                </div>
            </div>
            <div id="gallery_middle" class="gallery">
                <img src="<?php echo"$result[2]"?>" alt="image" id="img_2" class="img">
                <img src="<?php echo"$result[3]"?>" alt="image" id="img_3" class="img">
            </div>
            <div id="gallery_right" class="gallery">
                <img src="<?php echo"$result[4]"?>" alt="image" id="img_4" class="img">
                <img src="<?php echo"$result[5]"?>" id="img_5" class="img">
            </div>
        </div>
    </div>
</body>
