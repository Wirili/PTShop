<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{asset("/common/js/jquery-1.12.3.min.js")}}"></script>
        <script src="{{asset("/common/js/bootstrap.min.js")}}"></script>
        <link href="{{asset("/common/css/bootstrap.min.css")}}" rel="stylesheet" />

    </head>
    <body>
        <div class="container-fluid">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" style="margin-top:60px;">

            </div>
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <form action="{{URL::route('admin.postLogin')}}" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input class="form-control" type="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            <input class="form-control" type="password" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline"><input type="checkbox">记住用户</label>
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-sm">注册</a>
                            <input class="btn btn-primary btn-sm" type="submit" value="登陆">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
