<sidebar id="sidebar">
    <div class="logo u-bg-primary" slot="start">
        <img src="{{asset('coverui/images/logo-white.svg')}}">
    </div>

    <ul class="c-menu c-menu--dark" v-menu slot="content">
        <li class="c-menu__item">
            <a href="{{route('admin.dashboard')}}" class="c-menu__link">
                <div class="c-menu__icon">
                    <i class="icon-grid"></i>
                </div>

                <div class="c-menu__text">Dashboard</div>

                <div class="c-menu__after"></div>
            </a>
        </li>

        <li class="c-menu__item">
            <a href="{{route('admin.dashboard')}}" class="c-menu__link">
                <div class="c-menu__icon">
                    <i class="icon-phone"></i>
                </div>

                <div class="c-menu__text">Contacts</div>

                <div class="c-menu__after"></div>
            </a>
        </li>

        <li class="c-menu__item">
            <a href="{{route('admin.dashboard')}}" class="c-menu__link">
                <div class="c-menu__icon">
                    <i class="icon-profile"></i>
                </div>

                <div class="c-menu__text">Groups</div>

                <div class="c-menu__after"></div>
            </a>
        </li>

        <li class="c-menu__item">
            <a href="{{route('admin.dashboard')}}" class="c-menu__link">
                <div class="c-menu__icon">
                    <i class="icon-mail"></i>
                </div>

                <div class="c-menu__text">Send Message</div>

                <div class="c-menu__after"></div>
            </a>
        </li>

        <li class="c-menu__item">
            <a href="{{route('admin.dashboard')}}" class="c-menu__link">
                <div class="c-menu__icon">
                    <i class="icon-box-add"></i>
                </div>

                <div class="c-menu__text">Inbox</div>

                <div class="c-menu__after"></div>
            </a>
        </li>

        <li class="c-menu__divider"></li>

        <li class="c-menu__item">
            <a href="{{route('admin.dashboard')}}" class="c-menu__link">
                <div class="c-menu__icon">
                    <i class="icon-wrench"></i>
                </div>

                <div class="c-menu__text">Settings</div>

                <div class="c-menu__after"></div>
            </a>
        </li>
    </ul>
</sidebar>
