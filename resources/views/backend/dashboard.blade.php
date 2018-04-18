@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <main id="main" class="l-app__main">
        <div class="l-col-12">
            <section class="c-panel">
                <header class="c-panel__header">
                    <h3 class="c-panel__title">Messages</h3>
                </header>

                <div class="c-panel__body">
                    <canvas id="myChart" width="600" height="200"></canvas>
                </div>
            </section>
        </div>

        <div class="l-col-12">
            <section class="c-panel">
                <header class="c-panel__header">
                    <h2 class="c-panel__title">Unread messages</h2>
                </header>

                <div class="c-panel__body">
                    <div class="form-group">
                        <label class="form-label u-textMuted">Group 1(56)</label>

                        <progress class="progress progress--info" value="45" max="100"></progress>
                    </div>

                    <div class="form-group">
                        <label class="form-label u-textMuted">Group 2(60)</label>

                        <progress class="progress progress--danger" value="60" max="100"></progress>
                    </div>

                    <div class="form-group">
                        <label class="form-label u-textMuted">Group 3(80)</label>

                        <progress class="progress progress--warning" value="80" max="100"></progress>
                    </div>

                    <div class="form-group">
                        <label class="form-label u-textMuted">Group 4(15)</label>

                        <progress class="progress" value="15" max="100"></progress>
                    </div>

                    <div class="form-group">
                        <label class="form-label u-textMuted">Group 5(30)</label>

                        <progress class="progress progress--primary" value="30" max="100"></progress>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

@push('before-scripts')
    <script src="{{asset('coverui/vendor/chart/Chart.bundle.min.js')}}"></script>
@endpush
