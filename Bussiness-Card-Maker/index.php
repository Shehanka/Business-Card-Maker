<?php
/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 5/22/2018
 * Time: 11:23 AM
 *
 * MIT License

Copyright (c) [2018] [Chamod Shehanka]
 */

include_once ('cardController.php');
$getData = new cardController;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Business Card Generator | CodeZilla 2018</title>

    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <!--UI Kit-->
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <!--End UI Kit-->

</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

    <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <!--<img class="android-logo-image" src="images/android-logo.png">-->
          </span>
            <!-- Add spacer, to align navigation to the right in desktop -->
            <div class="android-header-spacer mdl-layout-spacer"></div>
            <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
                <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
                    <i class="material-icons">search</i>
                </label>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" id="search-field">
                </div>
            </div>
            <!-- Navigation -->
            <div class="android-navigation-container">
                <nav class="android-navigation mdl-navigation">
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">About</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">FAQs</a>
                    <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">Contact</a>
                </nav>
            </div>

            <span class="android-mobile-title mdl-layout-title">
            <img class="android-logo-image" src="images/android-logo.png">
          </span>
            <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
                <!--<li class="mdl-menu__item">5.0 Lollipop</li>-->
            </ul>
        </div>
    </div>

    <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="images/android-logo-white.png">
        </span>
        <nav class="mdl-navigation">
            <!--<a class="mdl-navigation__link" href="">Phones</a>
            <a class="mdl-navigation__link" href="">Android SDK</a>-->
        </nav>
    </div>

    <div class="android-content mdl-layout__content">
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
            <div class="logo-font android-slogan">be together. not the same.</div>
            <div class="logo-font android-sub-slogan">Welcome to Business Card Maker</div>
            <div class="logo-font android-create-character">
                <a href="">create your business card</a>
            </div>

            <a href="#screens">
                <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
                    <i class="material-icons">expand_more</i>
                </button>
            </a>
        </div>
        <div class="android-screen-section mdl-typography--text-center">
            <a name="screens"></a>
            <div class="mdl-typography--display-1-color-contrast">Input your business details</div>
            <br>

            <!--Form Set-->

            <div class="uk-grid-small uk-child-width-expand@s uk-text-center"  uk-grid>
                <div style="width: 90px"></div>
                <div style="width: 600px">

                    <form>
                        <fieldset class="uk-fieldset">
                            <div class="uk-margin">
                                <input id="txt-name" name="name" class="uk-input" type="text" placeholder="Name">
                            </div>

                            <div class="uk-margin">
                                <input id="txt-job-title" name="job-title" class="uk-input" type="text" placeholder="Job Title">
                            </div>

                            <div class="uk-margin">
                                <textarea id="txt-address" name="address" class = "uk-textarea" rows = "5" placeholder="Address"></textarea>
                            </div>

                            <div class="uk-margin">
                                <input id="txt-telephone" name="telephone" class="uk-input" type="text" placeholder="Telephone">
                            </div>

                            <div class="uk-margin">
                                <input id="txt-email" name="email" class="uk-input" type="text" placeholder="Email Address">
                            </div>

                            <div class="uk-margin" style="float: right">
                                <button id="btn-generate" class="uk-button uk-button-primary">Generate</button>
                                <button id="btn-clear-all" class="uk-button uk-button-secondary" onclick="clearAll()">Clear All</button>
                            </div>

                        </fieldset>
                    </form>

                </div>

                <div></div>
            </div>

            <!--End Form Set-->

        </div>
        <div class="android-wear-section">
            <div class="android-wear-band">
                <div class="android-wear-band-text">
                    <div class="mdl-typography--display-2 mdl-typography--font-thin"></div>
                    <p class="mdl-typography--headline mdl-typography--font-thin">

                    </p>
                </div>
            </div>
        </div>
        <div class="android-customized-section">
            <div class="android-customized-section-text">
                <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">Customised by you, for you</div>
            </div>
            <div class="android-customized-section-image"></div>
        </div>

        <footer class="android-footer mdl-mega-footer">
            <div class="mdl-mega-footer--top-section">
                <div class="mdl-mega-footer--left-section">
                    <button class="mdl-mega-footer--social-btn"></button>
                    &nbsp;
                    <button class="mdl-mega-footer--social-btn"></button>
                    &nbsp;
                    <button class="mdl-mega-footer--social-btn"></button>
                </div>
                <div class="mdl-mega-footer--right-section">
                    <a class="mdl-typography--font-light" href="#top">
                        Back to Top
                        <i class="material-icons">expand_less</i>
                    </a>
                </div>
            </div>

            <div class="mdl-mega-footer--middle-section">
            </div>



        </footer>
    </div>
</div>

<script src="https://www.gstatic.com/firebasejs/5.0.3/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyA_9TDtuG5CYPkKlazpmRhL3izcllzJvuM",
        authDomain: "bussiness-card-maker-b7c44.firebaseapp.com",
        databaseURL: "https://bussiness-card-maker-b7c44.firebaseio.com",
        projectId: "bussiness-card-maker-b7c44",
        storageBucket: "",
        messagingSenderId: "118391112889"
    };
    firebase.initializeApp(config);
</script>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
</html>
