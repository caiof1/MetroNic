<!DOCTYPE html>
<html lang="en" class="no-js">
  <!--<![endif]-->
  <!-- BEGIN HEAD -->
  <head>
    <meta charset="utf-8" />
    <title>Multidados TI</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="MobileOptimized" content="320" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link
      href="assets/plugins/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/plugins/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/css/themes/default.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link
      href="assets/css/style-metronic.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link
      href="assets/css/style-responsive.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link
      href="assets/css/themes/default.css"
      rel="stylesheet"
      type="text/css"
      id="style_color"
    />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
  </head>
  <!-- END HEAD -->


  <!-- BEGIN BODY -->
  <body class="page-header-fixed">
    <?php require "./cabecalho.php" ?>
    <div class="clearfix"></div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
      <?php require "./menu.php" ?>
      <!-- BEGIN CONTENT -->
      <div class="page-content-wrapper">
        <div class="page-content">
          <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <div
            class="modal fade"
            id="portlet-config"
            tabindex="-1"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-hidden="true"
                  ></button>
                  <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">Widget settings form goes here</div>
                <div class="modal-footer">
                  <button type="button" class="btn blue">Save changes</button>
                  <button
                    type="button"
                    class="btn default"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
          <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
          <!-- BEGIN PAGE HEADER-->
          <div class="row">
            <div class="col-md-12">
              <!-- BEGIN PAGE TITLE & BREADCRUMB-->
              <h3 class="page-title">
                Dashboard <small>tudo que você precisa à um click.</small>
              </h3>
              <ul class="page-breadcrumb breadcrumb">
                <li>
                  <i class="fa fa-home"></i>
                  <a href="index.php">Home</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>
                  <a href="#">Dashboard</a>
                </li>
                <li class="pull-right">
                  <div
                    id="dashboard-report-range"
                    class="dashboard-date-range tooltips"
                    data-placement="top"
                    data-original-title="Change dashboard date range"
                  >
                    <i class="fa fa-calendar"></i>
                    <span> </span>
                    <i class="fa fa-angle-down"></i>
                  </div>
                </li>
              </ul>
              <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
          </div>
          <!-- END PAGE HEADER-->
          <!-- BEGIN DASHBOARD STATS -->
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="dashboard-stat blue 0">
                <div class="visual">
                  <i class="fa fa-shopping-cart"></i>
                </div>
                <div class="details">
                  <div class="number"></div>
                  <div class="desc">Clientes</div>
                </div>
                <a class="more" href="#">
                  Visualizar <i class="m-icon-swapright m-icon-white"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="dashboard-stat green 1">
                <div class="visual">
                  <i class="fa fa-group"></i>
                </div>
                <div class="details">
                  <div class="number"></div>
                  <div class="desc">Usuários</div>
                </div>
                <a class="more" href="#">
                  Visualizar <i class="m-icon-swapright m-icon-white"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
              <div class="dashboard-stat purple 2">
                <div class="visual">
                  <i class="fa fa-globe"></i>
                </div>
                <div class="details">
                  <div class="number"></div>
                  <div class="desc">Fornecedores</div>
                </div>
                <a class="more" href="#">
                  Visualizar <i class="m-icon-swapright m-icon-white"></i>
                </a>
              </div>
            </div>
          </div>
          <!-- END DASHBOARD STATS -->
          <div class="clearfix"></div>
          <!--Tabela-->
          <div class="row">
            <div class="col-md-12">
              <!-- BEGIN SAMPLE TABLE PORTLET-->
              <div class="portlet box grey">
                <div class="portlet-title">
                  <div class="caption">
                    <i class="fa fa-folder-open"></i>Tabela Simples
                  </div>
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a
                      href="#portlet-config"
                      data-toggle="modal"
                      class="config"
                    ></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="portlet-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nome</th>
                          <th>CPF</th>
                          <th class="userOrEmail">Usuario</th>
                          <th>Endereço</th>
                          <th>Telefone</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- END SAMPLE TABLE PORTLET-->
            </div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <?php require "./rodape.php" ?>
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <script
      src="assets/plugins/jquery-1.10.2.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/plugins/jquery-migrate-1.2.1.min.js"
      type="text/javascript"
    ></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script
      src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/plugins/bootstrap/js/bootstrap.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/plugins/jquery.cockie.min.js"
      type="text/javascript"
    ></script>
    <script
      src="assets/plugins/uniform/jquery.uniform.min.js"
      type="text/javascript"
    ></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js" type="text/javascript"></script>
    <script src="assets/scripts/index.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
      jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins
        Index.init();
      });


      let dataGlobal

      $.post("./DataRequest.php", function(result, status) {
        const datas = JSON.parse(result)

        let cont = 0;

        dataGlobal = datas

        // Mostrando na tela a quantidade de clientes, usuarios e fornecedores
        $('.row .0 .number').html(datas[0].length)
        $('.row .1 .number').html(datas[1].length)
        $('.row .2 .number').html(datas[2].length)

        // Ao abrir a pagina, a primeira tabela que deve mostrar, é a clients
        datas[0].forEach(element => {

          cont++;

          let newRow = $("<tr>");
          let cols = '';

          cols += `<td>${cont}</td>`;
          cols += `<td>${element.nome}</td>`;
          cols += `<td>${element.cpf}</td>`;
          cols += `<td>${element.usuario}</td>`;
          cols += `<td>${element.endereco}</td>`;
          cols += `<td>${element.telefone}</td>`;
          cols += `<td><span class="label label-sm ${
                                                     element.status == 'Aprovado' ? 'label-success' :
                                                     element.status == 'Pendente' ? 'label-info' : 
                                                     element.status == 'Suspenso' ? 'label-warning' : 'label-danger'}">${element.status}</span></td>`;

          newRow.append(cols);

          $('.table tbody').append(newRow);

          $(".portlet-title").css("background", 'blue')
          $(".portlet.box.grey").css("border-color", 'blue')
          $(".table tbody tr td").css("border-top-color", 'blue')
        });
      })

      

      
      // Changing color table simple
      $(".more").on('click', function(e) {

        let cont = 0;

        // remove tbody
        $('.table tbody').remove();

        $('.table').append($("<tbody>"))


        if(e.target.offsetParent.children[0].classList[2] == 0) {
          dataGlobal[0].forEach(element => {

            cont++;

            $('.userOrEmail').html('Usuario')
            let newRow = $("<tr>");
            let cols = '';

            cols += `<td>${cont}</td>`
            cols += `<td>${element.nome}</td>`;
            cols += `<td>${element.cpf}</td>`;
            cols += `<td>${element.usuario}</td>`;
            cols += `<td>${element.endereco}</td>`;
            cols += `<td>${element.telefone}</td>`;
            cols += `<td><span class="label label-sm ${
                                                     element.status == 'Aprovado' ? 'label-success' :
                                                     element.status == 'Pendente' ? 'label-info' : 
                                                     element.status == 'Suspenso' ? 'label-warning' : 'label-danger'}">${element.status}</span></td>`;

            newRow.append(cols);

            $('.table tbody').append(newRow);
          });
        }

        // Como temos informações divergentes entre clientes e users/fornecedores, resolvi fazer dois códigos, um para clientes e o outro para users e fornecedores
        if(e.target.offsetParent.children[0].classList[2] == 1 || e.target.offsetParent.children[0].classList[2] == 2) {
          dataGlobal[e.target.offsetParent.children[0].classList[2]].forEach(element => {

          cont++;

          $('.userOrEmail').html('E-mail')
          let newRow = $("<tr>");
          let cols = '';

          cols += `<td>${cont}</td>`
          cols += `<td>${element.nome}</td>`;
          cols += `<td>${element.cpf}</td>`;
          cols += `<td>${element.email}</td>`;
          cols += `<td>${element.endereco}</td>`;
          cols += `<td>${element.telefone}</td>`;
          cols += `<td><span class="label label-sm ${
                                                     element.status == 'Aprovado' ? 'label-success' :
                                                     element.status == 'Pendente' ? 'label-info' : 
                                                     element.status == 'Suspenso' ? 'label-warning' : 'label-danger'}">${element.status}</span></td>`;

          newRow.append(cols);

          $('.table tbody').append(newRow);
        });
        }

        
        $(".portlet-title").css("background", e.target.offsetParent.children[0].classList[1])
        $(".portlet.box.grey").css("border-color", e.target.offsetParent.children[0].classList[1])
        $(".table tbody tr td").css("border-top-color", e.target.offsetParent.children[0].classList[1])
      })

      // Eu não sabia se queriam com js puro ou com jquery, então, fiz das duas formas, para cumprir com o que foi pedido :D

      // const mores = document.querySelectorAll(".more")

      // mores.forEach(element => {
      //   element.addEventListener('click', function(e) {
      //     document.querySelector(".portlet-title").style.background = e.target.offsetParent.children[0].classList[1];
      //     document.querySelector(".portlet.box.grey").style.borderColor = e.target.offsetParent.children[0].classList[1];
      //     const allTd = document.querySelectorAll(".table tbody tr td");

      //     allTd.forEach(element => {
      //       element.style.borderTopColor = e.target.offsetParent.children[0].classList[1];
      //     });
      //   })
      // });

    </script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- END BODY -->
</html>
