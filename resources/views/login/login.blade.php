<!DOCTYPE html>
<html>
@include('includes.head')

<body class="hold-transition login-page">
        @if(session('status'))
            <div class="alert alert-success alert-block" >
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ session('status')}}</strong>
            </div>
        @endif  
     
        <div class="login-box" >
            <!-- /.login-logo -->
            <div class="login-box-body" >
                <p class="login-box-msg">Identificarse para ingresar al Sistema</p>


                <form id="formNuevo" action="{{route('login_session')}}" method="POST"  enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="form-group {{ $errors->has('username') ? 'has-error':''}}">
                        <input type="username" name="username" class="form-control" placeholder="Ingresar usuario">
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        {!! $errors->first('username','<span class="help-block">Ingrese un usuario valido</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error':''}}">
                        <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        {!! $errors->first('password','<span class="help-block">Ingrese una contraseña valida</span>') !!}

                    </div>
                    <div class="row">                       
                        <!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <div class="form-group">
                    <br>
                    <a href="{{route('registrar_usuario')}}" >Registrar Usuario </a>
                    
                </div>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="{{ asset('assets/plugins/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript">
          window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove(); 
            });
            }, 2000);
        </script>
    </body>
</html>