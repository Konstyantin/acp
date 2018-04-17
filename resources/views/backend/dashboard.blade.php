@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <main id="main" class="l-app__main">
        <div class="c-alert  has-close"><a role="button" class="c-alert__close"><i class="i-remove"></i></a>
            You have your way. I have my way. As for the right way, the correct way, and the only way, it does not
            exist.
        </div>
        <div class="l-row l-panelGroup">
            <div class="l-col-12 l-col-6@sm l-col-3@lg">
                <section class="c-panel">
                    <div class="c-panel__body">
                        <div class="l-level">
                            <div class="l-level__left"><i class="icon-stats-growth2 icon-2x u-color-warning"></i></div>
                            <div class="l-level__right">
                                <div class="l-level__item c-count u-textRight">
                                    <div class="c-count__label">Monthly Sales</div>
                                    <div class="c-count__content"><i class="icon-arrow-up5 u-color-success u-mr5"></i>371
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="l-col-12 l-col-6@sm l-col-3@lg">
                <section class="c-panel">
                    <div class="c-panel__body">
                        <div class="l-level">
                            <div class="l-level__left"><i class="icon-users icon-2x u-color-info"></i></div>
                            <div class="l-level__right">
                                <div class="l-level__item c-count u-textRight">
                                    <div class="c-count__label">New Users</div>
                                    <div class="c-count__content"><i class="icon-arrow-up5 u-color-success u-mr5"></i>113
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="l-col-12 l-col-6@sm l-col-3@lg">
                <section class="c-panel">
                    <div class="c-panel__body">
                        <div class="l-level">
                            <div class="l-level__item c-count">
                                <div class="c-count__label">Followers</div>
                                <div class="c-count__content">8346</div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="l-col-12 l-col-6@sm l-col-3@lg">
                <section class="c-panel">
                    <div class="c-panel__body">
                        <div class="l-level">
                            <div class="l-level__left"><i class="icon-download4 icon-2x u-color-success"></i></div>
                            <div class="l-level__right">
                                <div class="l-level__item c-count u-textRight">
                                    <div class="c-count__label">Downloads</div>
                                    <div class="c-count__content"><i class="icon-arrow-up5 u-color-success u-mr5"></i>113
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <section class="c-panel">
            <header class="c-panel__header"><h3 class="c-panel__title">Sales Trending</h3></header>
            <div class="c-panel__body">
                <iframe class="chartjs-hidden-iframe" tabindex="-1"
                        style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                <canvas id="myChart" width="1000" height="250"
                        style="display: block; height: 125px; width: 500px;"></canvas>
            </div>
        </section>
        <div class="l-row l-panelGroup">
            <div class="l-col-6@lg">
                <section class="c-panel">
                    <header class="c-panel__header"><h2 class="c-panel__title">Recent orders</h2>
                        <div class="c-panel__controls">
                            <ul class="c-nav c-nav--actions">
                                <li class="c-nav__item"><a role="button" class="c-nav__link">MORE</a></li>
                            </ul>
                        </div>
                    </header>
                    <div class="c-panel__body">
                        <table class="table table--responsive u-mb-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Fee</th>
                                <th>Status</th>
                                <th class="u-textRight@md">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td data-label="Id"><a href="apps/cms/invoice.html">1</a></td>
                                <td data-label="User">Cruz Oneal</td>
                                <td data-label="Fee"><code>$69.00</code></td>
                                <td data-label="Status"><span class="badge badge--default">Refunded</span></td>
                                <td data-label="Date" class="u-textRight@md">2017-01-13 22:17</td>
                            </tr>
                            <tr>
                                <td data-label="Id"><a href="apps/cms/invoice.html">2</a></td>
                                <td data-label="User">Lula Holder</td>
                                <td data-label="Fee"><code>$86.30</code></td>
                                <td data-label="Status"><span class="badge badge--info">Paid</span></td>
                                <td data-label="Date" class="u-textRight@md">2017-03-15 11:50</td>
                            </tr>
                            <tr>
                                <td data-label="Id"><a href="apps/cms/invoice.html">3</a></td>
                                <td data-label="User">Lloyd Murphy</td>
                                <td data-label="Fee"><code>$84.80</code></td>
                                <td data-label="Status"><span class="badge badge--default">Refunded</span></td>
                                <td data-label="Date" class="u-textRight@md">2017-04-02 15:12</td>
                            </tr>
                            <tr>
                                <td data-label="Id"><a href="apps/cms/invoice.html">4</a></td>
                                <td data-label="User">Lula Holder</td>
                                <td data-label="Fee"><code>$76.90</code></td>
                                <td data-label="Status"><span class="badge badge--default">Refunded</span></td>
                                <td data-label="Date" class="u-textRight@md">2017-01-21 08:33</td>
                            </tr>
                            <tr>
                                <td data-label="Id"><a href="apps/cms/invoice.html">5</a></td>
                                <td data-label="User">Lloyd Murphy</td>
                                <td data-label="Fee"><code>$36.00</code></td>
                                <td data-label="Status"><span class="badge badge--default">Refunded</span></td>
                                <td data-label="Date" class="u-textRight@md">2017-02-18 08:32</td>
                            </tr>
                            <tr>
                                <td data-label="Id"><a href="apps/cms/invoice.html">6</a></td>
                                <td data-label="User">Bentley Christensen</td>
                                <td data-label="Fee"><code>$79.00</code></td>
                                <td data-label="Status"><span class="badge badge--default">Refunded</span></td>
                                <td data-label="Date" class="u-textRight@md">2017-03-04 02:14</td>
                            </tr>
                            <tr>
                                <td data-label="Id"><a href="apps/cms/invoice.html">7</a></td>
                                <td data-label="User">Carol Lancaster</td>
                                <td data-label="Fee"><code>$28.00</code></td>
                                <td data-label="Status"><span class="badge badge--default">Refunded</span></td>
                                <td data-label="Date" class="u-textRight@md">2017-03-08 10:09</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            <div class="l-col-6@sm l-col-3@lg">
                <section class="c-panel">
                    <header class="c-panel__header"><h2 class="c-panel__title">Summary</h2></header>
                    <div class="c-panel__body">
                        <div class="l-row">
                            <div class="l-col-6">
                                <table class="table table--simple">
                                    <thead>
                                    <tr>
                                        <th colspan="2">This Month</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="u-textMuted">Income</td>
                                        <td class="u-textRight">$23,500</td>
                                    </tr>
                                    <tr>
                                        <td class="u-textMuted">Sales</td>
                                        <td class="u-textRight">940</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="l-col-6">
                                <table class="table table--simple">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Today</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="u-textMuted">Income</td>
                                        <td class="u-textRight">$575</td>
                                    </tr>
                                    <tr>
                                        <td class="u-textMuted">Sales</td>
                                        <td class="u-textRight">23</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="l-row">
                            <div class="l-col-6">
                                <table class="table table--simple">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Last Month</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="u-textMuted">Income</td>
                                        <td class="u-textRight">$20,300</td>
                                    </tr>
                                    <tr>
                                        <td class="u-textMuted">Sales</td>
                                        <td class="u-textRight">812</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="l-col-6">
                                <table class="table table--simple">
                                    <thead>
                                    <tr>
                                        <th colspan="2">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="u-textMuted">Income</td>
                                        <td class="u-textRight">$65,000</td>
                                    </tr>
                                    <tr>
                                        <td class="u-textMuted">Sales</td>
                                        <td class="u-textRight">2600</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="l-col-6@sm l-col-3@lg">
                <section class="c-panel">
                    <header class="c-panel__header"><h2 class="c-panel__title">Schedule</h2></header>
                    <div class="c-panel__body">
                        <ul class="c-stream">
                            <li class="c-stream__item"><span class="badge badge--primary c-stream__badge"></span>
                                <time class="u-color-muted u-fontSize-12">2 minutes ago</time>
                                <p class="u-m-0">
                                    Check your internet connection
                                </p></li>
                            <li class="c-stream__item">
                                <time class="u-color-muted u-fontSize-12">9:30</time>
                                <p class="u-m-0">
                                    Meeting with tech leader
                                </p></li>
                            <li class="c-stream__item">
                                <time class="u-color-muted u-fontSize-12">8:30</time>
                                <p class="u-m-0">
                                    Call to customer <a href="#">Jacob</a> and discuss the detail.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, consequatur.
                                </p></li>
                            <li class="c-stream__item">
                                <time class="u-color-muted u-fontSize-12">Wed, 25 Mar</time>
                                <p class="u-m-0">
                                    Finished task Testing.
                                </p></li>
                            <li class="c-stream__item">
                                <time class="u-color-muted u-fontSize-12">Thu, 10 Mar</time>
                                <p class="u-m-0">
                                    Trip to the mars
                                </p></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
