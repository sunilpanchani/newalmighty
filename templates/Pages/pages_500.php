<?= $this->element('main') ?>

    <head>
        
        <?= $this->element('title-meta', array('title' => '500 Error Page')) ?>

        <?= $this->element('head-css') ?>

    </head>

    <body>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h1 class="display-2 fw-medium">5<i class="bx bx-buoy bx-spin text-primary display-3"></i>0</h1>
                            <h4 class="text-uppercase">Internal Server Error</h4>
                            <div class="mt-5 text-center">
                                <a class="btn btn-primary waves-effect waves-light" href="/">Back to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-6">
                        <div>
                            <img src="/images/error-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= $this->element('vendor-scripts') ?>

        <script src="/js/app.js"></script>

    </body>
</html>
