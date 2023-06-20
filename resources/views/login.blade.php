<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Portofolio | Isna Nurul</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
        <style>
            .valign {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            }
        </style>
    </head>
    <body id="page-top" >
        <!-- Form  -->
        <div class="container valign">
            <div class="row">
                <div class="col col-md-4"></div>

                <div class="col col-md-4">
                    <div class="card" style="width: 23rem; d-flex">
                        <div class="card-header text-center">
                          <h4>Sign In</h4>
                        </div>
                        <div class="card-body">
                            <form action="/auth" method="post">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Username" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                </div>
                                <div class="mb-3">
                                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                Do you have an account? <a href="/regist">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-md-4"></div>
            </div>
        </div>
        <!-- End Form -->

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
