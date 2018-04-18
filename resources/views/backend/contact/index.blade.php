@extends('backend.layouts.app')

@section('title', app_name() . ' | Contacts')

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
                                <ol class="c-breadcrumb">
                                    <li class="c-breadcrumb__item">
                                        <a href="#" class="c-breadcrumb__link">Dashboard</a>
                                    </li>
                                    <li class="c-breadcrumb__item">
                                        <a href="#" class="c-breadcrumb__link">Tables</a>
                                    </li>
                                    <li class="c-breadcrumb__item">
                                        data
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <!-- END .l-media -->
                    </div>
                    <!-- END .l-level__left -->
                    <div class="l-level__right is-fixed">
                        <a href="#" class="btn btn--success btn--smart">
                            <i class="icon-plus3 u-mr-5"></i>New Item
                        </a>
                    </div>
                    <!-- END .l-level__right -->
                </div>
                <!-- END .c-toolbar__group -->
                <div class="c-toolbar__group l-level">
                    <div class="l-level__left is-auto">
                        <div class="l-level__item u-hiddenDown@md">
                            <ul class="c-nav c-nav--pills">
                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link is-active">All (32)</a>
                                </li>
                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Publish (16)</a>
                                </li>
                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Pendding (12)</a>
                                </li>
                                <li class="c-nav__item">
                                    <a href="#" class="c-nav__link">Draft (4)</a>
                                </li>
                            </ul>
                        </div>
                        <drop class="l-level__item u-hiddenUp@md">
                            <a role="button" class="btn btn--default" slot="trigger">Menu</a>
                            <div class="c-drop__content" slot="content">
                                <ul class="c-nav c-nav--pills c-nav--stacked">
                                    <li class="c-nav__item">
                                        <a href="#" class="c-nav__link">All (32)</a>
                                    </li>
                                    <li class="c-nav__item">
                                        <a href="#" class="c-nav__link">Publish (16)</a>
                                    </li>
                                    <li class="c-nav__item">
                                        <a href="#" class="c-nav__link">Pendding (12)</a>
                                    </li>
                                    <li class="c-nav__item">
                                        <a href="#" class="c-nav__link">Draft (4)</a>
                                    </li>
                                </ul>
                            </div>
                        </drop>
                    </div>
                    <!-- END .l-level__left -->
                    <div class="l-level__right is-fixed">
                        <div class="l-level__item">
                            <form action="#" class="form-inline">
                                <div class="form-group">
                                    <div class="form-control has-icon">
                                        <i class="form-icon icon-search4 u-ml-5"></i>
                                        <input type="text" class="form-input form-input--rounded">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END .l-level__item -->
                    </div>
                    <!-- END .l-level__right -->
                </div>
                <!-- END .c-toolbar__group -->
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
                    <th class="u-hiddenDown@md">#ID</th>
                    <th>
                        <a role="button">
                            Product Name<i class="i-sort is-down"></i>
                        </a>
                    </th>
                    <th>Category</th>
                    <th>
                        <a role="button">
                            Price<i class="i-sort"></i>
                        </a>
                    </th>
                    <th>
                        <a role="button">
                            Stock<i class="i-sort"></i>
                        </a>
                    </th>
                    <th class="u-textCenter">Status</th>
                    <th>Vendor</th>
                    <th class="u-textRight">
                        <a role="button">
                            Date<i class="i-sort"></i>
                        </a>
                    </th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <th class="u-hiddenDown@md">#ID</th>
                    <th>
                        <a role="button">
                            Product Name<i class="i-sort is-down"></i>
                        </a>
                    </th>
                    <th>Category</th>
                    <th>
                        <a role="button">
                            Price<i class="i-sort"></i>
                        </a>
                    </th>
                    <th>
                        <a role="button">
                            Stock<i class="i-sort"></i>
                        </a>
                    </th>
                    <th class="u-textCenter">Status</th>
                    <th>Vendor</th>
                    <th class="u-textRight">
                        <a role="button">
                            Date<i class="i-sort"></i>
                        </a>
                    </th>
                </tr>
                </tfoot>
                <tbody>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">0</td>
                    <td data-label="Product">
                        <a role="button">elit voluptate ullamco laborum</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/0
                        </div>
                    </td>
                    <td data-label="Category">Toys</td>
                    <td data-label="Price"><code>$48.70</code></td>
                    <td data-label="Stock">122</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--info">Publish</span>

                    </td>
                    <td data-label="Vendor">Concility</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-02-19 20:03</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">1</td>
                    <td data-label="Product">
                        <a role="button">velit tempor cillum ad</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/1
                        </div>
                    </td>
                    <td data-label="Category">Outdoors</td>
                    <td data-label="Price"><code>$65.90</code></td>
                    <td data-label="Stock">84</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Cognicode</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-24 06:15</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">2</td>
                    <td data-label="Product">
                        <a role="button">ea irure exercitation nulla</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/2
                        </div>
                    </td>
                    <td data-label="Category">Toys</td>
                    <td data-label="Price"><code>$69.50</code></td>
                    <td data-label="Stock">82</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Anivet</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-20 18:49</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">3</td>
                    <td data-label="Product">
                        <a role="button">anim consectetur esse ad</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/3
                        </div>
                    </td>
                    <td data-label="Category">Movies</td>
                    <td data-label="Price"><code>$29.00</code></td>
                    <td data-label="Stock">44</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Exospeed</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-01-11 22:41</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">4</td>
                    <td data-label="Product">
                        <a role="button">duis sint incididunt enim</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/4
                        </div>
                    </td>
                    <td data-label="Category">Movies</td>
                    <td data-label="Price"><code>$15.60</code></td>
                    <td data-label="Stock">118</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Pyramis</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-02-13 16:35</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">5</td>
                    <td data-label="Product">
                        <a role="button">qui excepteur exercitation id</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/5
                        </div>
                    </td>
                    <td data-label="Category">Toys</td>
                    <td data-label="Price"><code>$38.70</code></td>
                    <td data-label="Stock">111</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Bluplanet</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-12 23:41</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">6</td>
                    <td data-label="Product">
                        <a role="button">nulla laborum duis adipisicing</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/6
                        </div>
                    </td>
                    <td data-label="Category">Toys</td>
                    <td data-label="Price"><code>$52.30</code></td>
                    <td data-label="Stock">156</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Furnigeer</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-04-14 22:54</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">7</td>
                    <td data-label="Product">
                        <a role="button">culpa mollit labore Lorem</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/7
                        </div>
                    </td>
                    <td data-label="Category">Toys</td>
                    <td data-label="Price"><code>$69.60</code></td>
                    <td data-label="Stock">133</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Brainclip</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-09 08:13</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">8</td>
                    <td data-label="Product">
                        <a role="button">quis nulla tempor esse</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/8
                        </div>
                    </td>
                    <td data-label="Category">Outdoors</td>
                    <td data-label="Price"><code>$25.00</code></td>
                    <td data-label="Stock">132</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Xyqag</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-02-23 15:15</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">9</td>
                    <td data-label="Product">
                        <a role="button">velit Lorem veniam adipisicing</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/9
                        </div>
                    </td>
                    <td data-label="Category">Clothing</td>
                    <td data-label="Price"><code>$52.50</code></td>
                    <td data-label="Stock">106</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Silodyne</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-04-05 20:54</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">10</td>
                    <td data-label="Product">
                        <a role="button">et velit duis adipisicing</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/10
                        </div>
                    </td>
                    <td data-label="Category">Clothing</td>
                    <td data-label="Price"><code>$76.40</code></td>
                    <td data-label="Stock">189</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--info">Publish</span>

                    </td>
                    <td data-label="Vendor">Asimiline</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-23 11:12</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">11</td>
                    <td data-label="Product">
                        <a role="button">magna aliqua aute elit</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/11
                        </div>
                    </td>
                    <td data-label="Category">Outdoors</td>
                    <td data-label="Price"><code>$86.60</code></td>
                    <td data-label="Stock">73</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Infotrips</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-01-02 21:26</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">12</td>
                    <td data-label="Product">
                        <a role="button">qui deserunt minim aliqua</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/12
                        </div>
                    </td>
                    <td data-label="Category">Electronics</td>
                    <td data-label="Price"><code>$66.40</code></td>
                    <td data-label="Stock">128</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Pharmex</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-01-30 14:50</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">13</td>
                    <td data-label="Product">
                        <a role="button">anim quis elit fugiat</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/13
                        </div>
                    </td>
                    <td data-label="Category">Toys</td>
                    <td data-label="Price"><code>$22.70</code></td>
                    <td data-label="Stock">112</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--info">Publish</span>

                    </td>
                    <td data-label="Vendor">Enersave</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-22 01:35</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">14</td>
                    <td data-label="Product">
                        <a role="button">esse esse eu ullamco</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/14
                        </div>
                    </td>
                    <td data-label="Category">Electronics</td>
                    <td data-label="Price"><code>$72.60</code></td>
                    <td data-label="Stock">27</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Naxdis</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-06 12:14</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">15</td>
                    <td data-label="Product">
                        <a role="button">consectetur ad est adipisicing</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/15
                        </div>
                    </td>
                    <td data-label="Category">Clothing</td>
                    <td data-label="Price"><code>$63.20</code></td>
                    <td data-label="Stock">67</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Earthmark</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-02-18 17:20</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">16</td>
                    <td data-label="Product">
                        <a role="button">incididunt eu commodo aliqua</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/16
                        </div>
                    </td>
                    <td data-label="Category">Electronics</td>
                    <td data-label="Price"><code>$84.50</code></td>
                    <td data-label="Stock">176</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Comvex</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-02-24 17:14</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">17</td>
                    <td data-label="Product">
                        <a role="button">id est consectetur mollit</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/17
                        </div>
                    </td>
                    <td data-label="Category">Books</td>
                    <td data-label="Price"><code>$29.20</code></td>
                    <td data-label="Stock">129</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Scentric</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-04-19 22:37</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">18</td>
                    <td data-label="Product">
                        <a role="button">occaecat nulla amet anim</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/18
                        </div>
                    </td>
                    <td data-label="Category">Outdoors</td>
                    <td data-label="Price"><code>$37.30</code></td>
                    <td data-label="Stock">190</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Zilla</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-04-13 01:46</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">19</td>
                    <td data-label="Product">
                        <a role="button">ex culpa exercitation ea</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/19
                        </div>
                    </td>
                    <td data-label="Category">Outdoors</td>
                    <td data-label="Price"><code>$38.20</code></td>
                    <td data-label="Stock">133</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Globoil</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-17 14:45</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">20</td>
                    <td data-label="Product">
                        <a role="button">nostrud non elit pariatur</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/20
                        </div>
                    </td>
                    <td data-label="Category">Clothing</td>
                    <td data-label="Price"><code>$95.60</code></td>
                    <td data-label="Stock">197</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--info">Publish</span>

                    </td>
                    <td data-label="Vendor">Anarco</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-02-07 03:10</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">21</td>
                    <td data-label="Product">
                        <a role="button">irure non ut qui</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/21
                        </div>
                    </td>
                    <td data-label="Category">Toys</td>
                    <td data-label="Price"><code>$59.10</code></td>
                    <td data-label="Stock">171</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Geoform</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-04-04 10:41</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">22</td>
                    <td data-label="Product">
                        <a role="button">ea cillum reprehenderit est</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/22
                        </div>
                    </td>
                    <td data-label="Category">Clothing</td>
                    <td data-label="Price"><code>$32.10</code></td>
                    <td data-label="Stock">23</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Velity</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-08 02:29</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">23</td>
                    <td data-label="Product">
                        <a role="button">irure voluptate laborum eu</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/23
                        </div>
                    </td>
                    <td data-label="Category">Movies</td>
                    <td data-label="Price"><code>$29.10</code></td>
                    <td data-label="Stock">20</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--info">Publish</span>

                    </td>
                    <td data-label="Vendor">Quordate</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-04-12 22:01</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">24</td>
                    <td data-label="Product">
                        <a role="button">duis cillum aliquip occaecat</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/24
                        </div>
                    </td>
                    <td data-label="Category">Movies</td>
                    <td data-label="Price"><code>$76.10</code></td>
                    <td data-label="Stock">144</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Gynko</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-04-05 01:50</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">25</td>
                    <td data-label="Product">
                        <a role="button">qui ut in consectetur</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/25
                        </div>
                    </td>
                    <td data-label="Category">Books</td>
                    <td data-label="Price"><code>$31.50</code></td>
                    <td data-label="Stock">183</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Nurplex</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-01-29 09:14</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">26</td>
                    <td data-label="Product">
                        <a role="button">qui consectetur id adipisicing</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/26
                        </div>
                    </td>
                    <td data-label="Category">Movies</td>
                    <td data-label="Price"><code>$85.20</code></td>
                    <td data-label="Stock">166</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--info">Publish</span>

                    </td>
                    <td data-label="Vendor">Digifad</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-03-07 23:40</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">27</td>
                    <td data-label="Product">
                        <a role="button">sit ut ullamco sunt</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/27
                        </div>
                    </td>
                    <td data-label="Category">Electronics</td>
                    <td data-label="Price"><code>$88.40</code></td>
                    <td data-label="Stock">56</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--default">Outdated</span>

                    </td>
                    <td data-label="Vendor">Zounds</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-02-16 21:07</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">28</td>
                    <td data-label="Product">
                        <a role="button">deserunt consectetur commodo sunt</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/28
                        </div>
                    </td>
                    <td data-label="Category">Movies</td>
                    <td data-label="Price"><code>$37.80</code></td>
                    <td data-label="Stock">48</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--warning">Draft</span>

                    </td>
                    <td data-label="Vendor">Blurrybus</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-01-29 16:46</time>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="u-hiddenDown@md">
                        <label class="form-checkbox u-m-0">
                            <input type="checkbox">
                            <span class="form-checkbox__indicator"></span>
                        </label>
                    </th>
                    <td data-label="ID" class="u-hiddenDown@md">29</td>
                    <td data-label="Product">
                        <a role="button">irure anim occaecat veniam</a>
                        <div class="u-fs-12 u-textMuted">
                            <i class="fa fa-link"></i> http://www.20theme.com/products/29
                        </div>
                    </td>
                    <td data-label="Category">Books</td>
                    <td data-label="Price"><code>$12.70</code></td>
                    <td data-label="Stock">99</td>
                    <td data-label="Status" class="u-textCenter">

                        <span class="badge badge--info">Publish</span>

                    </td>
                    <td data-label="Vendor">Netagy</td>
                    <td data-label="Date" class="u-textRight">
                        <time class="u-fs-12 u-textMuted">2017-01-25 06:41</time>
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
                                        <option>-- Bulk Action --</option>
                                        <option value="publish">Publish</option>
                                        <option value="delete">Delete</option>
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
