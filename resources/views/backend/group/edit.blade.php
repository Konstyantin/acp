@extends('backend.layouts.app')

@section('title', app_name() . ' | Groups edit')

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
                                    <li class="c-breadcrumb__item">Edit</li>
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
    </main>
@endsection
