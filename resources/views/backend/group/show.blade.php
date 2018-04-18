@extends('backend.layouts.app')

@section('title', app_name() . ' | Groups create')

@section('content')
    <main id="main" class="l-app__main" role="main">
        <section class="c-panel">
            <header class="c-toolbar u-mb-0">
                <div class="c-toolbar__group l-level">
                    <div class="l-level__left is-auto">
                        <div class="c-cell">
                            <div class="c-cell__media">
                                <i class="icon-stats-bars3"></i>
                            </div>
                            <div class="c-cell__content">
                                <h1 class="c-toolbar__title">Data Table</h1>
                                <ol class="c-breadcrumb group-breadcrumb-list">
                                    <li class="c-breadcrumb__item">
                                        <a href="#" class="c-breadcrumb__link">Dashboard</a>
                                    </li>
                                    <li class="c-breadcrumb__item">
                                        <a href="#" class="c-breadcrumb__link">Group</a>
                                    </li>
                                    <li class="c-breadcrumb__item">View</li>
                                </ol>
                            </div>
                        </div>
                        <!-- END .l-media -->
                    </div>
                    <!-- END .l-level__left -->
                </div>
            </header>
            <!-- END .c-toolbar -->
        </section>
        <section class="c-panel">
            <header class="c-panel__header">
                <h3 class="c-panel__title">Group view</h3>
            </header>
            <div class="c-panel__body">
                <h6 class="c-card__title">Google I/O 2017</h6>
                <div class="c-card__content">
                    <strong>Status: </strong><span>Active</span>
                </div>
            </div>
        </section>
    </main>
@endsection
