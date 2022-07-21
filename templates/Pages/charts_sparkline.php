<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => 'Sparkline Charts')) ?>

        <?= $this->element('head-css') ?>

    </head>

    <?= $this->element('body') ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?= $this->element('menu') ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <?= $this->element('page-title', array('pagetitle' => 'Charts', 'title' => 'Sparkline Charts')) ?>

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Pie Chart</h4>
                                        <div id="sparkline1" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bar Chart</h4>
                                        <div id="sparkline2" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body analytics-info">
                                        <h4 class="card-title">Line Chart</h4>
                                        <div id="sparkline4"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Composite Bar Chart</h4>
                                        <div id="sparkline3" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Line Chart</h4>
                                        <div id="sparkline5" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <h4 class="card-title text-white">Discrete Chart</h4>
                                        <div id="sparkline6" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Bullet Chart</h4>
                                        <div id="sparkline7"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Box Plot Chart</h4>
                                        <div id="sparkline8" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Tristate Chart</h4>
                                        <div id="sparkline9" class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <?= $this->element('footer') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <?= $this->element('right-sidebar') ?>

        <?= $this->element('vendor-scripts') ?>

        <script src="/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        
        <script src="/js/pages/sparklines.init.js"></script>

        <!-- App js -->
        <script src="/js/app.js"></script>

    </body>
</html>
