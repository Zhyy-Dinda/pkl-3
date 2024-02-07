<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 21:16:20 GMT -->

<head>
  <!--  Title -->
  <title>CSIRT</title>
  <!--  Required Meta Tag -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="handheldfriendly" content="true" />
  <meta name="MobileOptimized" content="width" />
  <meta name="description" content="Mordenize" />
  <meta name="author" content="" />
  <meta name="keywords" content="Mordenize" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!--  Favicon -->
  <link rel="shortcut icon" type="image/png" href="{{ asset('dist/images/logos/logo-2.png')}}">
  <link id="themeColors" rel="stylesheet" href="{{ asset('dists/css/style.min.css')}}" />
</head>

<body>
  <!-- Preloader -->
  {{-- <div class="preloader">
    <img src="dist/images/logos/logo-2.png" width="500"
      alt="loader" class="lds-ripple img-fluid" />
  </div> --}}
  <!-- Preloader -->
  {{-- <div class="preloader">
    <img src="dist/images/logos/logo-2.png" width="500"
      alt="loader" class="lds-ripple img-fluid" />
  </div> --}}
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    @include('admin.component.sidebar')
    <!-- Sidebar End -->
    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      @include('admin.component.header')
      <!-- Header End -->

      {{-- section --}}
      @yield('content')
      
      {{-- <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card bg-light-primary shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <div class="round rounded bg-primary d-flex align-items-center justify-content-center">
                    <i class="cc BTC text-white fs-7" title="BTC"></i>
                  </div>
                  <h6 class="mb-0 ms-3">BTC</h6>
                  <div class="ms-auto text-primary d-flex align-items-center">
                    <i class="ti ti-trending-up text-primary fs-6 me-1"></i>
                    <span class="fs-2 fw-bold">+ 2.30%</span>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <h3 class="mb-0 fw-semibold fs-7">0.1245</h3>
                  <span class="fw-bold">$1,015.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card bg-light-danger shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <div class="round rounded bg-danger d-flex align-items-center justify-content-center">
                    <i class="cc ETH text-white fs-7" title="ETH"></i>
                  </div>
                  <h6 class="mb-0 ms-3">ETH</h6>
                  <div class="ms-auto text-danger d-flex align-items-center">
                    <i class="ti ti-trending-up text-danger fs-6 me-1"></i>
                    <span class="fs-2 fw-bold">+ 3.20%</span>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <h3 class="mb-0 fw-semibold fs-7">0.5620</h3>
                  <span class="fw-bold">$2,110.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card bg-light-success shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <div class="round rounded bg-success d-flex align-items-center justify-content-center">
                    <i class="cc LTC text-white fs-7" title="LTC"></i>
                  </div>
                  <h6 class="mb-0 ms-3">LTC</h6>
                  <div class="ms-auto text-info d-flex align-items-center">
                    <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                    <span class="fs-2 fw-bold text-success">+ 3.20%</span>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <h3 class="mb-0 fw-semibold fs-7">1.200</h3>
                  <span class="fw-bold">$1,100.00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card bg-light-warning shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <div class="round rounded bg-warning d-flex align-items-center justify-content-center">
                    <i class="cc XRP text-white fs-7" title="XRP"></i>
                  </div>
                  <h6 class="mb-0 ms-3">XRP</h6>
                  <div class="ms-auto text-info d-flex align-items-center">
                    <i class="ti ti-trending-down text-warning fs-6 me-1"></i>
                    <span class="fs-2 fw-bold text-warning">+ 2.20%</span>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4">
                  <h3 class="mb-0 fw-semibold fs-7">1.150</h3>
                  <span class="fw-bold">$2,150.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-9">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title fw-semibold">Featured BTCs</h5>
                <p class="card-subtitle mb-0">The Top BTCs for New Investors</p>
                <div class="row mt-4">
                  <div class="col-md-4">
                    <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                      <img src="../../dists/images/crypto/c1.jpg" alt="img" />
                      <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="mb-0 fs-5 fw-semibold">Els Idunn</h6>
                            <span>els@email</span>
                          </div>
                          <img src="../../dists/images/profile/user-1.jpg" alt="user1" width="35"
                            class="rounded-circle" />
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-3">
                          <span>Price</span>
                          <div class="text-end">
                            <h5 class="mb-0 fs-5 fw-semibold">
                              <i class="cc BTC" title="BTC"></i> 0.25 BTC
                            </h5>
                            <span class="fs-3">$21,23,000</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-3">
                          <span>
                            <i class="ti ti-clock-hour-4 me-1 fs-4"></i>5d 16h </span>
                          <span>
                            <i class="ti ti-eye fs-4 me-1"></i>2.5k </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                      <img src="../../dists/images/crypto/c2.jpg" alt="img" />
                      <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="mb-0 fs-5 fw-semibold">Liam William</h6>
                            <span>lian@email</span>
                          </div>
                          <img src="../../dists/images/profile/user-2.jpg" alt="user1" width="35"
                            class="rounded-circle" />
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-3">
                          <span>Price</span>
                          <div class="text-end">
                            <h5 class="mb-0 fs-5 fw-semibold">
                              <i class="cc ETH" title="ETH"></i> 1.42 ETH
                            </h5>
                            <span class="fs-3">$15,000</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-3">
                          <span>
                            <i class="ti ti-clock-hour-4 me-1 fs-4"></i>3d 1h </span>
                          <span>
                            <i class="ti ti-eye fs-4 me-1"></i>1.2k </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card overflow-hidden shadow-none border card-hover mb-4 mb-md-0">
                      <img src="../../dists/images/crypto/c3.jpg" alt="img" />
                      <div class="card-body p-4">
                        <div class="d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="mb-0 fs-5 fw-semibold">John Smith</h6>
                            <span>john@email</span>
                          </div>
                          <img src="../../dists/images/profile/user-3.jpg" alt="user1" width="35"
                            class="rounded-circle" />
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-3">
                          <span>Price</span>
                          <div class="text-end">
                            <h5 class="mb-0 fs-5 fw-semibold">
                              <i class="cc XRP" title="XRP"></i> 0.25 XRP
                            </h5>
                            <span class="fs-3">$61,25,000</span>
                          </div>
                        </div>
                        <div class="d-flex align-items-start justify-content-between mt-3">
                          <span>
                            <i class="ti ti-clock-hour-4 me-1 fs-4"></i>2d 11h </span>
                          <span>
                            <i class="ti ti-eye fs-4 me-1"></i>5.3k </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body pb-2">
                <div class="d-md-flex align-items-center gap-3 justify-content-between mb-3">
                  <div>
                    <h5 class="card-title fw-semibold">Your Investments</h5>
                    <p class="card-subtitle mb-0">What Are the Risks of Investing?</p>
                  </div>
                  <div class="d-flex align-items-center gap-3 mt-4 mt-md-0">
                    <div class="dropdown">
                      <button class="btn btn-light-primary dropdown-toggle" type="button" id="invest1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="cc BTC me-1" title="BTC"></i> BTC </button>
                      <ul class="dropdown-menu" aria-labelledby="invest1">
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="cc ETH me-1" title="ETH"></i> ETH </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="cc LTC me-1" title="LTC"></i> LTC </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="cc XRP me-1" title="XRP"></i> XRP </a>
                        </li>
                      </ul>
                    </div>
                    <span
                      class="round bg-primary flex-shrink-0 rounded-circle text-white d-flex align-items-center justify-content-center">
                      <i class="ti ti-repeat fs-6"></i>
                    </span>
                    <div class="dropdown">
                      <button class="btn btn-light-danger dropdown-toggle" type="button" id="invest2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="cc ETH me-1" title="ETH"></i> ETH </button>
                      <ul class="dropdown-menu" aria-labelledby="invest2">
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="cc BTC me-1" title="BTC"></i> BTC </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="cc ETH me-1" title="ETH"></i> ETH </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <i class="cc LTC me-1" title="LTC"></i> LTC </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div id="investments"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 mt-4 mt-md-0">
            <div class="card">
              <div class="card-body p-4">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-fill" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                      <span>Buy</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab">
                      <span>Sell</span>
                    </a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content mt-4">
                  <div class="tab-pane active" id="home" role="tabpanel">
                    <form>
                      <span class="d-block mb-1">Amount</span>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control  border-end-0"
                          aria-label="Text input with dropdown button" value="0.20125" />
                        <button
                          class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0"
                          type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="bg-light-danger text-danger p-6 rounded">
                            <span> USD </span>
                            <i class="ti ti-chevron-down ms-1 fs-4"></i>
                          </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">INR</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">CLP</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">AMD</a>
                          </li>
                        </ul>
                      </div>
                      <span class="d-block mb-1">Amount</span>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control  border-end-0"
                          aria-label="Text input with dropdown button" value="0.20125" />
                        <button
                          class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0"
                          type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="bg-light-primary text-primary p-6 rounded">
                            <span> BTC </span>
                            <i class="ti ti-chevron-down ms-1 fs-4"></i>
                          </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">LTC</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">XRP</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">ETH</a>
                          </li>
                        </ul>
                      </div>
                      <button class="btn btn-primary w-100">Buy BTC</button>
                    </form>
                  </div>
                  <div class="tab-pane" id="profile" role="tabpanel">
                    <form>
                      <span class="d-block mb-1">Amount</span>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control  border-end-0"
                          aria-label="Text input with dropdown button" value="0.20125" />
                        <button
                          class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0"
                          type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="bg-light-danger text-danger p-6 rounded">
                            <span> USD </span>
                            <i class="ti ti-chevron-down ms-1 fs-4"></i>
                          </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">INR</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">CLP</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">AMD</a>
                          </li>
                        </ul>
                      </div>
                      <span class="d-block mb-1">Amount</span>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control  border-end-0"
                          aria-label="Text input with dropdown button" value="0.20125" />
                        <button
                          class="btn btn-sm dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0"
                          type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="bg-light-primary text-primary p-6 rounded">
                            <span> BTC </span>
                            <i class="ti ti-chevron-down ms-1 fs-4"></i>
                          </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="#">LTC</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">XRP</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="#">ETH</a>
                          </li>
                        </ul>
                      </div>
                      <button class="btn btn-danger w-100">Sell BTC</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body p-4">
                <div class="mb-9">
                  <h5 class="card-title fw-semibold">Converter</h5>
                  <p class="card-subtitle">The Future of Quick Transfers</p>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button"
                    value="$1000" />
                  <button class="btn dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="bg-light-primary text-primary p-6 rounded">
                      <span> USD </span>
                      <i class="ti ti-chevron-down ms-1 fs-4"></i>
                    </span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </li>
                  </ul>
                </div>
                <div class="input-group mb-3">
                  <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button"
                    value="0.20125" />
                  <button class="btn dropdown-toggle arrow-none p-0 border-top border-bottom border-end border-0"
                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="bg-light-danger text-danger p-6 rounded">
                      <span> ETH </span>
                      <i class="ti ti-chevron-down ms-1 fs-4"></i>
                    </span>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </li>
                  </ul>
                </div>
                <button class="btn btn-primary w-100">Convert</button>
              </div>
            </div>
            <div class="card">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold">Quick Transfer</h5>
                <p class="card-subtitle">The History of Converters</p>
                <div class="d-flex align-items-center gap-2 mt-4 mb-3">
                  <a href="javascript:void(0)">
                    <img src="../../dists/images/profile/user-1.jpg" class="rounded-circle" alt="t1" width="40" />
                  </a>
                  <a href="javascript:void(0)">
                    <img src="../../dists/images/profile/user-2.jpg" class="rounded-circle" alt="t2" width="40" />
                  </a>
                  <a href="javascript:void(0)">
                    <img src="../../dists/images/profile/user-3.jpg" class="rounded-circle" alt="t3" width="40" />
                  </a>
                  <a href="javascript:void(0)">
                    <div
                      class="round-40 rounded-circle bg-light-primary d-flex align-items-center justify-content-center">
                      <i class="ti ti-plus fs-4"></i>
                    </div>
                  </a>
                </div>
                <span class="d-block mb-1">To</span>
                <div class="mb-3">
                  <span
                    class="badge px-2 d-inline-flex align-items-center bg-light-primary text-primary rounded-pill fs-3">
                    <img src="../../dists/images/profile/user-1.jpg" class="rounded-circle me-1" alt="user1"
                      width="30" /> John </span>
                </div>
                <span class="d-block mb-1">Amount</span>
                <div class="input-group rounded">
                  <input type="text" class="form-control  border-end-0" aria-label="Text input with dropdown button"
                    value="$1000" />
                  <button class="btn p-0 border-top border-bottom border-end border-0" type="button">
                    <span class=" btn btn-primary m-1 rounded"> Transfer <i class="ti ti-arrow-right fs-4"></i>
                    </span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold">Trade History</h5>
            <p class="card-subtitle mb-0">Trade and the Age of Exploration</p>
            <div class="table-responsive mt-4">
              <table class="table table-borderless text-nowrap align-middle mb-0">
                <tbody>
                  <tr class="bg-light">
                    <td class="rounded-start bg-transparent">
                      <div class="d-flex align-items-center gap-3">
                        <div>
                          <i class="cc BTC fs-7"></i>
                        </div>
                        <div>
                          <h6 class="mb-0">Bitcoin</h6>
                          <span class="fs-3">BTC</span>
                        </div>
                      </div>
                    </td>
                    <td class="bg-transparent"> $981.1254 <i class="ti ti-chevron-down text-danger ms-1 fs-4"></i>
                    </td>
                    <td class="bg-transparent">
                      <i class="cc ETC me-1 text-primary fs-5" title="ETC"></i> 0.23125
                    </td>
                    <td class="bg-transparent">$1.23560 B</td>
                    <td class="bg-transparent">04 Feb 2023</td>
                    <td class="text-end rounded-end bg-transparent">
                      <span class="badge bg-danger">transfer</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6"></td>
                  </tr>
                  <tr class="bg-light">
                    <td class="rounded-start bg-transparent">
                      <div class="d-flex align-items-center gap-3">
                        <div>
                          <i class="cc ETH fs-7"></i>
                        </div>
                        <div>
                          <h6 class="mb-0">Ethereum</h6>
                          <span class="fs-3">ETH</span>
                        </div>
                      </div>
                    </td>
                    <td class="bg-transparent"> $450.1254 <i class="ti ti-chevron-down text-danger ms-1 fs-4"></i>
                    </td>
                    <td class="bg-transparent">
                      <i class="cc ETC me-1 text-primary fs-5" title="ETC"></i> 0.45000
                    </td>
                    <td class="bg-transparent">$3.23560 B</td>
                    <td class="bg-transparent">09 Mar 2023</td>
                    <td class="text-end rounded-end bg-transparent">
                      <span class="badge bg-primary">sell</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6"></td>
                  </tr>
                  <tr class="bg-light">
                    <td class="rounded-start bg-transparent">
                      <div class="d-flex align-items-center gap-3">
                        <div>
                          <i class="cc LTC fs-7"></i>
                        </div>
                        <div>
                          <h6 class="mb-0">Litecoin</h6>
                          <span class="fs-3">LTC</span>
                        </div>
                      </div>
                    </td>
                    <td class="bg-transparent"> $100.1254 <i class="ti ti-chevron-up text-success ms-1 fs-4"></i>
                    </td>
                    <td class="bg-transparent">
                      <i class="cc BTC me-1 text-danger fs-5" title="BTC"></i> 0.56012
                    </td>
                    <td class="bg-transparent">$2.45620 B</td>
                    <td class="bg-transparent">12 Dec 2023</td>
                    <td class="text-end rounded-end bg-transparent">
                      <span class="badge bg-success">buy</span>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="6"></td>
                  </tr>
                  <tr class="bg-light">
                    <td class="rounded-start bg-transparent">
                      <div class="d-flex align-items-center gap-3">
                        <div>
                          <i class="cc XRP fs-7"></i>
                        </div>
                        <div>
                          <h6 class="mb-0">XRP</h6>
                          <span class="fs-3">XRP</span>
                        </div>
                      </div>
                    </td>
                    <td class="bg-transparent"> $450.1254 <i class="ti ti-chevron-down text-danger ms-1 fs-4"></i>
                    </td>
                    <td class="bg-transparent">
                      <i class="cc ETC me-1 text-primary fs-5" title="ETC"></i> 0.45000
                    </td>
                    <td class="bg-transparent">$3.23560 B</td>
                    <td class="bg-transparent">01 Aug 2023</td>
                    <td class="text-end rounded-end bg-transparent">
                      <span class="badge bg-danger">transfer</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
  <!--  Shopping Cart -->
  <div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header py-4">
      <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">Shopping Cart</h5>
      <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
    </div>
    <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
      <ul class="mb-0">
        <li class="pb-7">
          <div class="d-flex align-items-center">
            <img src="../../dists/images/products/product-1.jpg" width="95" height="75"
              class="rounded-1 me-9 flex-shrink-0" alt="" />
            <div>
              <h6 class="mb-1">Supreme toys cooker</h6>
              <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
              <div class="d-flex align-items-center justify-content-between mt-2">
                <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                <div class="input-group input-group-sm w-50">
                  <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button"
                    id="add1"> - </button>
                  <input type="text"
                    class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                    placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1" />
                  <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button" id="addo2">
                    + </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="pb-7">
          <div class="d-flex align-items-center">
            <img src="../../dists/images/products/product-2.jpg" width="95" height="75"
              class="rounded-1 me-9 flex-shrink-0" alt="" />
            <div>
              <h6 class="mb-1">Supreme toys cooker</h6>
              <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
              <div class="d-flex align-items-center justify-content-between mt-2">
                <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                <div class="input-group input-group-sm w-50">
                  <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button"
                    id="add2"> - </button>
                  <input type="text"
                    class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                    placeholder="" aria-label="Example text with button addon" aria-describedby="add2" value="1" />
                  <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button"
                    id="addon34"> + </button>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="pb-7">
          <div class="d-flex align-items-center">
            <img src="../../dists/images/products/product-3.jpg" width="95" height="75"
              class="rounded-1 me-9 flex-shrink-0" alt="" />
            <div>
              <h6 class="mb-1">Supreme toys cooker</h6>
              <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
              <div class="d-flex align-items-center justify-content-between mt-2">
                <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                <div class="input-group input-group-sm w-50">
                  <button class="btn border-0 round-20 minus p-0 bg-light-success text-success " type="button"
                    id="add3"> - </button>
                  <input type="text"
                    class="form-control round-20 bg-transparent text-muted fs-2 border-0  text-center qty"
                    placeholder="" aria-label="Example text with button addon" aria-describedby="add3" value="1" />
                  <button class="btn text-success bg-light-success  p-0 round-20 border-0 add" type="button"
                    id="addon3"> + </button>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <div class="align-bottom">
        <div class="d-flex align-items-center pb-7">
          <span class="text-dark fs-3">Sub Total</span>
          <div class="ms-auto">
            <span class="text-dark fw-semibold fs-3">$2530</span>
          </div>
        </div>
        <div class="d-flex align-items-center pb-7">
          <span class="text-dark fs-3">Total</span>
          <div class="ms-auto">
            <span class="text-dark fw-semibold fs-3">$6830</span>
          </div>
        </div>
        <a href="eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
      </div>
    </div>
  </div>
  <!--  Mobilenavbar -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <nav class="sidebar-nav scroll-sidebar">
      <div class="offcanvas-header justify-content-between">
        <img
          src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dists/images/logos/favicon.ico"
          alt="" class="img-fluid">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
        <ul id="sidebarnav">
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span>
                <i class="ti ti-apps"></i>
              </span>
              <span class="hide-menu">Apps</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level my-3">
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                    <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                    <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                    <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                    <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                    <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                    <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                  </div>
                </a>
              </li>
              <li class="sidebar-item py-2">
                <a href="#" class="d-flex align-items-center">
                  <div class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                    <img
                      src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg"
                      alt="" class="img-fluid" width="24" height="24">
                  </div>
                  <div class="d-inline-block">
                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                  </div>
                </a>
              </li>
              <ul class="px-8 mt-7 mb-4">
                <li class="sidebar-item mb-3">
                  <h5 class="fs-5 fw-semibold">Quick Links</h5>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Register Now</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Notes App</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">User Application</a>
                </li>
                <li class="sidebar-item py-2">
                  <a class="fw-semibold text-dark" href="#">Account Settings</a>
                </li>
              </ul>
            </ul>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
              <span>
                <i class="ti ti-message-dots"></i>
              </span>
              <span class="hide-menu">Chat</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
              <span>
                <i class="ti ti-components"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="app-email.html" aria-expanded="false">
              <span>
                <i class="ti ti-mail"></i>
              </span>
              <span class="hide-menu">Email</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- Search Bar -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content rounded-1">
        <div class="modal-header border-bottom">
          <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
          <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
            <i class="ti ti-x fs-5 ms-3"></i>
          </span>
        </div>
        <div class="modal-body message-body" data-simplebar="">
          <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
          <ul class="list mb-0 py-2">
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                <span class="fs-3 text-muted d-block">/apps/contacts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                <span
                  class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                <span class="fs-3 text-muted d-block">/apps/contacts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                <span
                  class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
              </a>
            </li>
            <li class="p-1 mb-1 bg-hover-light-black">
              <a href="#">
                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Customizer -->
  <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
  </button>
  <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel" data-simplebar="">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
      <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
      <div class="theme-option pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)" onclick="toggleTheme('../..//css/style.min.css')"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
            <i class="ti ti-brightness-up fs-7 text-primary"></i>
            <span class="text-dark">Light</span>
          </a>
          <a href="javascript:void(0)" onclick="toggleTheme('../../dists/css/style-dark.min.css')"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
            <i class="ti ti-moon fs-7 "></i>
            <span class="text-dark">Dark</span>
          </a>
        </div>
      </div>
      <div class="theme-direction pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Direction</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="index-2.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-text-direction-ltr fs-6 text-primary"></i>
            <span class="text-dark">LTR</span>
          </a>
          <a href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/rtl/index.html"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
            <span class="text-dark">RTL</span>
          </a>
        </div>
      </div>
      <div class="theme-colors pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"
                class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme "
                onclick="toggleTheme('../../dists/css/style.min.css')" data-color="blue_theme" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="BLUE_THEME"><i
                  class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"
                class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary "
                onclick="toggleTheme('../../dists/css/style-aqua.min.css')" data-color="aqua_theme"
                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME"><i
                  class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"
                class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary"
                onclick="toggleTheme('../../dists/css/style-purple.min.css')" data-color="purple_theme"
                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME"><i
                  class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"
                class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary"
                onclick="toggleTheme('../../dists/css/style-green.min.css')" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="GREEN_THEME"><i
                  class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"
                class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary"
                onclick="toggleTheme('../../dists/css/style-cyan.min.css')" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="CYAN_THEME"><i
                  class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
            <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
              <a href="javascript:void(0)"
                class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary"
                onclick="toggleTheme('../../dists/css/style-orange.min.css')" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="ORANGE_THEME"><i
                  class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="layout-type pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Layout Type</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="index-2.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-layout-sidebar fs-6 text-primary"></i>
            <span class="text-dark">Vertical</span>
          </a>
          <a href="../horizontal/index.html"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
            <i class="ti ti-layout-navbar fs-6 text-dark"></i>
            <span class="text-dark">Horizontal</span>
          </a>
        </div>
      </div>
      <div class="container-option pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Container Option</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">
            <i class="ti ti-layout-distsribute-vertical fs-7 text-primary"></i>
            <span class="text-dark">Boxed</span>
          </a>
          <a href="javascript:void(0)"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
            <i class="ti ti-layout-distsribute-horizontal fs-7"></i>
            <span class="text-dark">Full</span>
          </a>
        </div>
      </div>
      <div class="sidebar-type pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Sidebar Type</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 fullsidebar">
            <i class="ti ti-layout-sidebar-right fs-7"></i>
            <span class="text-dark">Full</span>
          </a>
          <a href="javascript:void(0)"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center text-dark sidebartoggler gap-2">
            <i class="ti ti-layout-sidebar fs-7"></i>
            <span class="text-dark">Collapse</span>
          </a>
        </div>
      </div>
      <div class="card-with pb-4">
        <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
        <div class="d-flex align-items-center gap-3 my-3">
          <a href="javascript:void(0)"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">
            <i class="ti ti-border-outer fs-7"></i>
            <span class="text-dark">Border</span>
          </a>
          <a href="javascript:void(0)"
            class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
            <i class="ti ti-border-none fs-7"></i>
            <span class="text-dark">Shadow</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  {{-- @include('admin.berita.create') --}}
  <!-- Customizer -->
  <!-- Import Js Files -->
  <script src="{{asset('../../dists/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('../../dists/libs/simplebar/dist/simplebar.min.js')}}"></script>
  <script src="{{asset('../../dists/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!-- core files -->
  <script src="{{asset('../../dists/js/app.min.js')}}"></script>
  <script src="{{asset('../../dists/js/app.init.js')}}"></script>
  <script src="{{asset('../../dists/js/app-style-switcher.js')}}"></script>
  <script src="{{asset('../../dists/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('../../dists/js/custom.js')}}"></script>
  <!-- current page js files -->
  <script src="{{ asset('../../dists/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('../../dists/js/dashboard4.js')}}"></script>



  <script>
    //message with toastr
    @if(session()->has('success'))
    
        toastr.success('{{ session('success') }}', 'BERHASIL!'); 

    @elseif(session()->has('error'))

        toastr.error('{{ session('error') }}', 'GAGAL!'); 
        
    @endif
</script>

</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Aug 2023 21:16:23 GMT -->

</html>