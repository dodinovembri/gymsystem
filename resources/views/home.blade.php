@extends('layouts.app')

@section('content')
<div class="content">
  @include('templates.content_header')
  <div class="content-header">
    <div>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>      
          <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
      </nav>
      <h4 class="content-title content-title-xs">Dashboard</h4>
    </div>
  </div><!-- content-header -->
  <div class="content-body">
    <div class="row row-sm mg-t-15 mg-sm-t-20">
      <div class="col-xl-8">
        <div class="row row-sm">
          <div class="col-sm-6">
            <div class="card card-hover card-profile-visits">
              <div>
                <p class="content-label mg-b-5 tx-pink">Profile Visits</p>
                <div class="d-flex align-items-end">
                  <h4 class="tx-color-01 tx-numeric tx-normal mg-b-0">361,782</h4>
                  <span class="d-flex align-items-center tx-success mg-l-2 tx-13"><i data-feather="arrow-up" class="svg-14 stroke-25"></i>1.2%</span>
                </div>
              </div>
              <div class="flot-wrapper">
                <div id="flotChart10" class="flot-chart"></div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 mg-t-15 mg-sm-t-0">
            <div class="card card-hover card-profile-visits">
              <div>
                <p class="content-label mg-b-5 tx-orange">Unique Visits</p>
                <div class="d-flex align-items-end">
                  <h4 class="tx-color-01 tx-numeric tx-normal mg-b-0">102,004</h4>
                  <span class="d-flex align-items-center tx-danger mg-l-2 tx-13"><i data-feather="arrow-down" class="svg-14 stroke-25"></i>0.4%</span>
                </div>
              </div>
              <div class="flot-wrapper">
                <div id="flotChart11" class="flot-chart"></div>
              </div>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-12 mg-t-15 mg-sm-t-20">
            <div class="card card-hover card-cash-flow">
              <div class="card-body pd-0">
                <div class="row no-gutters">
                  <div class="col-sm-5 col-md-4">
                    <div class="pd-y-15 pd-sm-y-20 pd-l-15 pd-sm-l-20 ht-100p">
                      <h6 class="tx-color-01 mg-b-3">Cash Flow Summary</h6>
                      <p class="tx-11 tx-color-03">Jan 01, 2019 - Dec 31, 2019</p>

                      <label class="tx-color-03 tx-12 mg-b-5">Total Income</label>
                      <h4 class="card-value">9,174,700<small>usd</small></h4>
                      <span class="tx-12 tx-color-04"><span class="tx-success"><i class="icon ion-android-arrow-up"></i> 1.5%</span> higher from last year</span>

                      <hr class="mg-y-10 op-0">

                      <label class="tx-color-03 tx-12 mg-b-5">Total Expenses</label>
                      <h4 class="card-value">2,628,740<small>usd</small></h4>
                      <span class="tx-12 tx-color-04"><span class="tx-danger"><i class="icon ion-android-arrow-up"></i> 0.9%</span> higher from last year</span>
                    </div>
                  </div><!-- col -->
                  <div class="col-sm-7 col-md-8">
                    <div class="pd-15 pd-t-0 pd-sm-20 bd-sm-l">
                      <div class="d-flex align-items-center justify-content-between mg-b-15">
                        <div class="chart-legend">
                          <label><span class="bg-green"></span> Income</label>
                          <label><span class="bg-gray-400"></span> Expenses</label>
                        </div>
                        <nav class="nav nav-card-icon">
                          <a href=""><i data-feather="help-circle"></i></a>
                          <a href=""><i data-feather="more-horizontal"></i></a>
                        </nav>
                      </div>
                      <div id="flotChart12" class="flot-chart"></div>
                    </div>
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->
      </div><!-- col -->
      <div class="col-sm-6 col-xl-4 mg-t-15 mg-sm-t-20 mg-xl-t-0">
        <div class="card card-hover card-customer-score">
          <div class="card-header bg-transparent">
            <h6 class="card-title mg-b-0">Customer Satisfaction</h6>
            <nav class="nav nav-card-icon">
              <a href=""><i data-feather="download"></i></a>
              <a href=""><i data-feather="printer"></i></a>
              <a href=""><i data-feather="more-horizontal"></i></a>
            </nav>
          </div><!-- card-header -->
          <div class="card-body pd-t-10">
            <h1 class="card-value mg-b-5">9.7<small class="tx-danger"><i class="icon ion-android-arrow-down"></i> 2.8%</small></h1>
            <p class="tx-12 tx-color-03">Performance Score</p>
            <div class="progress bg-transparent ht-10 mg-b-15">
              <div class="progress-bar bg-blue wd-50p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-green wd-25p bd-l bd-white" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-orange wd-5p bd-l bd-white" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-pink wd-5p bd-l bd-white" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-brand-02 wd-10p bd-l bd-white" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              <div class="progress-bar bg-primary wd-5p bd-l bd-white" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <table class="table-card">
              <tbody>
                <tr>
                  <td><div class="bd-blue"></div></td>
                  <td class="tx-medium">Excellent</td>
                  <td class="text-right">3,007</td>
                  <td class="text-right">50%</td>
                </tr>
                <tr>
                  <td><div class="bd-green"></div></td>
                  <td class="tx-medium">Very Good</td>
                  <td class="text-right">1,674</td>
                  <td class="text-right">25%</td>
                </tr>
                <tr>
                  <td><div class="bd-orange"></div></td>
                  <td class="tx-medium">Good</td>
                  <td class="text-right">125</td>
                  <td class="text-right">6%</td>
                </tr>
                <tr>
                  <td><div class="bd-pink"></div></td>
                  <td class="tx-medium">Fair</td>
                  <td class="text-right">98</td>
                  <td class="text-right">5%</td>
                </tr>
                <tr>
                  <td><div class="bd-brand-02"></div></td>
                  <td class="tx-medium">Poor</td>
                  <td class="text-right">512</td>
                  <td class="text-right">10%</td>
                </tr>
                <tr>
                  <td><div class="bd-brand-01"></div></td>
                  <td class="tx-medium">Very Poor</td>
                  <td class="text-right">81</td>
                  <td class="text-right">4%</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-md-7 col-lg-6 mg-t-15 mg-sm-t-20">
        <div class="card card-hover card-chart-two">
          <div class="card-header bg-transparent bd-b-0">
            <h1 class="card-value">8,217.34<span>usd</span></h1>
            <p class="card-value-label">Your Earnings</p>
            <p class="tx-color-03">Your sales and referral earnings over the last 30 days</p>
            <p class="tx-11 tx-gray-500 mg-b-20">This does not show transactions affecting your deposits balance. Detailed breakdown is available on your statement page.</p>
            <a href="" class="btn btn-xs btn-brand-01">View Statements</a>
          </div><!-- card-header -->

          <nav class="nav nav-card-icon">
            <a href=""><i data-feather="refresh-ccw"></i></a>
            <a href=""><i data-feather="printer"></i></a>
            <a href=""><i data-feather="more-horizontal"></i></a>
          </nav>

          <div class="card-body">
            <div class="chart-wrapper">
              <div id="flotChart4" class="flot-chart"></div>
            </div><!-- chart-wrapper -->
          </div>
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-md-12 col-xl-6 mg-t-15 mg-sm-t-20">
        <div class="card card-hover card-chart-three">
          <div class="card-header bg-transparent pd-lg-y-15">
            <h6 class="card-title mg-b-0">Sales Revenue</h6>
            <nav class="nav nav-card-icon">
              <a href=""><i data-feather="refresh-ccw"></i></a>
              <a href=""><i data-feather="printer"></i></a>
              <a href=""><i data-feather="more-horizontal"></i></a>
            </nav>
          </div><!-- card-header -->
          <div class="card-body">
            <div class="card-chart-header">
              <div class="chart-legend">
                <label><span class="bg-blue"></span> Online</label>
                <label><span class="bg-green"></span> Offline</label>
              </div>
              <div class="btn-group">
                <button class="btn btn-white btn-xs">Day</button>
                <button class="btn btn-white btn-xs">Week</button>
                <button class="btn btn-white btn-xs active">Month</button>
              </div><!-- btn-group -->
            </div><!-- card-chart-header -->

            <div class="chart-wrapper"><canvas id="chartBar1"></canvas></div>
          </div>
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->
    <div class="row row-sm">

      <div class="col-md-12 col-xl-8 mg-t-15 mg-sm-t-20">
        <div class="card card-hover card-total-sales">
          <div class="card-header bg-transparent pd-y-15 pd-l-15 pd-sm-l-20 pd-r-15 bd-b-0">
            <h6 class="card-title mg-b-0">Total Sales</h6>
            <nav class="nav">
              <a href="" class="link-gray-500"><i data-feather="help-circle" class="svg-16"></i></a>
              <a href="" class="link-gray-500"><i data-feather="more-vertical" class="svg-16"></i></a>
            </nav>
          </div><!-- card-header -->
          <div class="card-body pd-x-15 pd-sm-x-20 pd-t-5">
            <div class="d-flex flex-column flex-sm-row align-items-start justify-content-between mg-b-15">
              <div class="total-sales-info order-2 order-sm-0">
                <div>
                  <label>Total Sales</label>
                  <h5>486,030<span>usd</span></h5>
                </div>
                <div>
                  <label>Total Profit</label>
                  <h5>988,097<span>usd</span></h5>
                </div>
                <div>
                  <label>No. of Orders</label>
                  <h5>36,760</h5>
                </div>
              </div><!-- total-sales-info -->
              <div class="order-1 order-sm-0 mg-sm-t-7 mg-b-15 mg-sm-b-0">
                <button class="btn btn-xs btn-white pd-x-10">Quarterly <i class="icon ion-ios-arrow-down mg-l-5"></i></button>
                <button class="btn btn-xs btn-white pd-x-10">All Products <i class="icon ion-ios-arrow-down mg-l-5"></i></button>
              </div>
            </div>
            <div class="flot-wrapper">
              <div class="chart-legend">
                <label><span class="bg-blue"></span> Offline Sales</label>
                <label><span class="bg-green"></span> Online Sales</label>
              </div>
              <div id="flotChart7" class="flot-chart"></div>
            </div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-md-6 mg-t-15 mg-sm-t-20">
        <div class="card card-hover card-chart-four">
          <div class="card-header bg-transparent">
            <h6 class="card-title mg-b-0">Incremental Sales<span class="d-none d-sm-inline"> By Campaign</span></h6>
            <nav class="nav nav-card-icon">
              <a href=""><i data-feather="refresh-ccw"></i></a>
              <a href=""><i data-feather="printer"></i></a>
              <a href=""><i data-feather="more-horizontal"></i></a>
            </nav>
          </div><!-- card-header -->
          <div class="card-body">
            <div class="chart-wrapper"><canvas id="chartBar2"></canvas></div>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- content-body -->
</div>
@endsection
