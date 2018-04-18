@extends('backend.layouts.app')

@section('title', app_name() . ' | Groups')

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
                                    <li class="c-breadcrumb__item">
                                        List
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- END .l-media -->
                    </div>
                    <!-- END .l-level__left -->
                    <div class="l-level__right is-fixed">
                        <a href="#" class="btn btn--success btn--smart">
                            <i class="icon-plus3 u-mr-5"></i>Create
                        </a>
                    </div>
                    <!-- END .l-level__right -->
                </div>
            </header>
            <!-- END .c-toolbar -->
            <table class="table table--data">
                <thead>
                    <tr>
                        <th class="u-hiddenDown@md">
                            <label class="form-checkbox u-m-0">
                                <input type="checkbox">
                                <span class="form-checkbox__indicator"></span>
                            </label>
                        </th>
                        <th>Group Name</th>
                        <th>Contact number</th>
                        <th>Group Tag</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row" class="u-hiddenDown@md">
                            <label class="form-checkbox u-m-0">
                                <input type="checkbox">
                                <span class="form-checkbox__indicator"></span>
                            </label>
                        </th>
                        <td data-label="Product">
                            <a role="button">elit voluptate ullamco laborum</a>
                        </td>
                        <td data-label="Category">Toys</td>
                        <td data-label="Price">
                            <code>#first</code>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="u-hiddenDown@md">
                            <label class="form-checkbox u-m-0">
                                <input type="checkbox">
                                <span class="form-checkbox__indicator"></span>
                            </label>
                        </th>
                        <td data-label="Product">
                            <a role="button">elit voluptate ullamco laborum</a>
                        </td>
                        <td data-label="Category">Toys</td>
                        <td data-label="Price">
                            <code>#first</code>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="u-hiddenDown@md">
                            <label class="form-checkbox u-m-0">
                                <input type="checkbox">
                                <span class="form-checkbox__indicator"></span>
                            </label>
                        </th>
                        <td data-label="Product">
                            <a role="button">elit voluptate ullamco laborum</a>
                        </td>
                        <td data-label="Category">Toys</td>
                        <td data-label="Price">
                            <code>#first</code>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="c-panel__body l-level">
                <div class="l-level__left is-fixed">
                    <div class="l-level__item">
                        <form action="#" class="form-inline">
                            <div class="form-group">
                                <div class="form-flex">
                                    <select class="form-select">
                                        <option>-- Select the number --</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                    <button type="button" class="form-addon btn btn--info">Apply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="l-level__right is-auto">
                    <div class="l-level__item">
                        <nav class="c-pagination c-pagination--bordered">
                            <span class="c-pagination__item is-disabled">Previous</span>
                            <em class="c-pagination__item is-active">1</em>
                            <a href="#" class="c-pagination__item">2</a>
                            <a href="#" class="c-pagination__item">3</a>
                            <a href="#" class="c-pagination__item">4</a>
                            <a href="#" class="c-pagination__item">5</a>
                            <span class="c-pagination__item is-disabled">...</span>
                            <a href="#" class="c-pagination__item">99</a>
                            <a href="#" class="c-pagination__item">100</a>
                            <a href="#" class="c-pagination__item">Next</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
