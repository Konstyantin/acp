<header id="topbar" class="l-app__topbar">
    <nav class="c-navbar c-navbar--light">
        <div class="c-navbar__left">
            <a role="button" class="c-navbar__item u-hiddenUp@md" v-toggle:sidebar>
                <i class="i-menu i-menu--light"></i>
            </a>
        </div>

        <div class="c-navbar__right">
            <drop class="c-navbar__item">
                <a role="button" class="c-account" slot="trigger">
                    <div class="c-account__media">
                        <img src="{{$logged_in_user->picture}}"
                             class="avatar">
                    </div>

                    <div class="c-account__after">
                        <i class="i-caret i-caret--light"></i>
                    </div>
                </a>

                <drop-content placement="bottom-end" slot="content">
                    <ul class="c-nav c-nav--menus">
                        <li class="c-nav__item">
                            <a href="#" class="c-nav__link">Profile</a>
                        </li>

                        <li class="c-nav__divider"></li>

                        <li class="c-nav__item">
                            <a href="{{route('frontend.auth.logout')}}" class="c-nav__link">Log out</a>
                        </li>
                    </ul>
                </drop-content>
            </drop>
        </div>
    </nav>
</header>
