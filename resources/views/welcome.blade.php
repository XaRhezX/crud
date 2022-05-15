@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-small uk-section-muted">
        <div class="uk-container">
            <h1 class="uk-heading-divider">UIkit CRUD & jQuery</h1>
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                <ul
                    class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s
uk-child-width-1-4@m">
                    <li>
                        <img src="https://getuikit.com/docs/images/slider1.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>1</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider2.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>2</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider3.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>3</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider4.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>4</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider5.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>5</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider1.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>6</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider2.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>7</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider3.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>8</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider4.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>9</h1>
                        </div>
                    </li>
                    <li>
                        <img src="https://getuikit.com/docs/images/slider5.jpg" width="400" height="600" alt="">
                        <div class="uk-position-center uk-panel">
                            <h1>10</h1>
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                    uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                    uk-slider-item="next"></a>

            </div>

            <article class="uk-article">

                <h1 class="uk-article-title"><a class="uk-link-reset" href="">Heading</a></h1>

                <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a
                        href="#">Blog</a></p>

                <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.</p>

                <div class="uk-grid-small uk-child-width-auto" uk-grid>
                    <div>
                        <a class="uk-button uk-button-text" href="#">Read more</a>
                    </div>
                    <div>
                        <a class="uk-button uk-button-text" href="#">5 Comments</a>
                    </div>
                </div>

            </article>
        </div>
    </div>
@endsection
