<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>woocommerce Shop</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>
    <div class="accountbg"></div>


        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
                    <div class="card-body">
                        <h5 class="font-18 text-center">Veuillez saisir vos coordonnées</h5>
                        <form class="form-horizontal m-t-30" action="{{url('/Connection')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Domaine</label>
                                    <input name="host" class="form-control" type="text" required="" placeholder="domain">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Clé Client</label>
                                    <input name="key" class="form-control" type="password" required="" placeholder="customer key">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Clé Secrète</label>
                                    <input name="secret" class="form-control" type="password" required="" placeholder="secret key">
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-info btn-block btn-lg waves-effect waves-light" type="submit">Se Connecter</button>
                                </div>
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>

</html>