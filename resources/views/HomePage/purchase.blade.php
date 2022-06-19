@extends('HomePage.layout')
@section('content')

<!-- third party css end -->

<link href="http://tes.sumajayaberkah.com/hy_assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="http://tes.sumajayaberkah.com/hy_assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="http://tes.sumajayaberkah.com/hy_assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    <style>
        table.dataTable td {
            padding: 10px;
        }

        #loading {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #3498db;
            /* Blue */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 2s linear infinite;
            margin: auto;
        }

        #preloading {
            position: fixed;
            left: 50%;
            top: 40%;
            transform: translate(-50%, -50%);
            width: 140px;
            height: 140px;
            text-align: center;
        }

        #canvasloading {
            width: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            height: 100%;
            z-index: 999999;
            position: absolute;
            display: none;
        }

        #txt {
            font-weight: 700;
        }

        @keyframes  spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        body {
            /* font-family: "Quicksand", "Open Sans"; */
            font-size: 14px;
        }

    </style>


<body>
    <style>
        .table> :not(caption)>*>* {
            padding: 8px;
        }

        .table {
            min-width: 900px;
        }

    </style>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item "><a href="#">Purchase</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Transaksi</h4>
                    <div class="col-sm-4">
                    </div>
                    <br>
                    <form action="/print-laporan-transaksi" target="_blank" method="post">
                        <input type="hidden" name="_token" value="aEgUfofuap5XSC6Srsx5JUp3LmtVwJQNRKVqqgrT">
                        
                        <div class="row">
                            <div class="col-md-9 input-daterange">
                                <div class="col">
                                    <label for="status_trans">Status Transaksi</label>
                                    <select name="status_trans" id="status_trans" class="form-control">
                                        <option value="">Semua</option>
                                        <option value="1">Menunggu Verifikasi</option>
                                        <option value="2">Proses</option>
                                        <option value="3">Selesai</option>
                                        <option value="4">Dibatalkan</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <div class="col align-self-end">
                                <label for="">Aksi</label>
                                <div class="form-group">
                                    <input type="submit" name="delete" value="Delete" class="btn-danger ">
                                    <input type="submit" name="pdf" value="PDF" class=" btn-success">
                                </div>
                            </div>
                            <br>
                        </div>
                    </form>
                    <br/>

                    </a>
            


                    <div class="table-responsive">
                        <table id="datatable" class="table table-centered w-100 dt-responsive nowrap table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <th>Quantity</th>
                                    <th>Tanggal Beli</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Note</th>
                                   
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <!-- /End-bar -->

    <!-- bundle -->
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/buttons.html5.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/buttons.flash.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/buttons.print.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/dataTables.keyTable.min.js"></script>
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/dataTables.select.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/pages/demo.datatable-init.js"></script>
    <!-- end demo js-->

    <script src="http://tes.sumajayaberkah.com/hy_assets/js/vendor/apexcharts.min.js"></script>

    <!-- Todo js -->
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/ui/component.todo.js"></script>

    <!-- demo app -->
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/pages/demo.dashboard-crm.js"></script>
    <!-- end demo js-->

    <!-- demo -->
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/pages/demo.materialdesignicons.js"></script>
    <!-- end demo js-->

    <script src="http://tes.sumajayaberkah.com/js/sweetalert/sweetalert.min.js"></script>
    <!-- <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script> -->
    <script src="/js/jquery.mask.min.js"></script>
    <!-- demo app -->
    <script src="http://tes.sumajayaberkah.com/hy_assets/js/pages/demo.form-wizard.js"></script>
    <!-- end demo js-->
    @endsection


