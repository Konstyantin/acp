@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <sidebar id="sidebar">
        <div class="logo u-bg-primary" slot="start">
            <img src="{{asset('coverui/images/logo-white.svg')}}">
        </div>

        <ul class="c-menu c-menu--dark" v-menu slot="content">
            <li class="c-menu__category">GENERAL</li>

            <li class="c-menu__item">
                <a href="#" class="c-menu__link">
                    <div class="c-menu__icon">
                        <i class="icon-grid"></i>
                    </div>

                    <div class="c-menu__text">Dashboard</div>

                    <div class="c-menu__after"></div>
                </a>
            </li>

            <li class="c-menu__item has-sub">
                <a role="button" class="c-menu__link">
                    <div class="c-menu__icon">
                        <i class="icon-quill2"></i>
                    </div>

                    <div class="c-menu__text">Posts</div>
                </a>

                <ul class="c-menu">
                    <li class="c-menu__item">
                        <a href="#" class="c-menu__link">
                            <div class="c-menu__text">All</div>
                        </a>
                    </li>

                    <li class="c-menu__item">
                        <a href="#" class="c-menu__link">
                            <div class="c-menu__text">Add</div>
                        </a>
                    </li>

                    <li class="c-menu__item">
                        <a href="#" class="c-menu__link">
                            <div class="c-menu__text">Category</div>
                        </a>
                    </li>

                    <li class="c-menu__item">
                        <a href="#" class="c-menu__link">
                            <div class="c-menu__text">Trash</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="c-menu__divider"></li>

            <li class="c-menu__item">
                <a href="#" class="c-menu__link">
                    <div class="c-menu__icon">
                        <i class="icon-bubbles"></i>
                    </div>

                    <div class="c-menu__text">Comments</div>

                    <div class="c-menu__after">
                        <span class="badge badge--info">35+</span>
                    </div>
                </a>
            </li>
        </ul>
    </sidebar>

    <div class="l-app__content">
        <header id="topbar" class="l-app__topbar">
            <nav class="c-navbar c-navbar--light">
                <div class="c-navbar__left">
                    <a role="button" class="c-navbar__item u-hiddenUp@md" v-toggle:sidebar>
                        <i class="i-menu i-menu--light"></i>
                    </a>

                    <drop class="c-navbar__item">
                        <a role="button" slot="trigger">
                            New<i class="i-caret i-caret--light u-ml-5"></i>
                        </a>

                        <drop-content slot="content">
                            <ul class="c-nav c-nav--menus">
                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Menu 1</a>
                                </li>

                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Menu 2</a>
                                </li>

                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Menu 3</a>
                                </li>

                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Menu 4</a>
                                </li>
                            </ul>
                        </drop-content>
                    </drop>
                </div>

                <div class="c-navbar__right">
                    <div class="c-navbar__item u-hiddenDown@md">
                        <form action="/" class="c-navbar__form">
                            <div class="form-control has-iconRight">
                                <i class="icon-search4 form-iconRight u-mr-5"></i>

                                <input type="text" class="form-input form-input--rounded">
                            </div>
                        </form>
                    </div>

                    <a class="c-navbar__item">
                        <i class="icon-bell2"></i>
                    </a>

                    <drop class="c-navbar__item">
                        <a role="button" class="c-account" slot="trigger">
                            <div class="c-account__media">
                                <img src="http://7xnssr.com1.z0.glb.clouddn.com/image/avatar/avatar.jpg"
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

                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Inbox</a>
                                </li>

                                <li class="c-nav__divider"></li>

                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Log out</a>
                                </li>
                            </ul>
                        </drop-content>
                    </drop>
                </div>
            </nav>
        </header>

        <div class="l-app__body">
            <main id="main" class="l-app__main" role="main">
                <alert>You have your way. I have my way. As for the right way, the correct way, and the only way, it
                    does not exist.
                </alert>
            </main>
        </div>
    </div>
@endsection
