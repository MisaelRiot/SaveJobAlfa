<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial</title>

    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('user/css/fresh-bootstrap-table.css') }}" rel="stylesheet" />
    <!-- <link href="assets/css/demo.css" rel="stylesheet" /> -->

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ asset('user/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/js/bootstrap-table.js') }}"></script>

    <!--  Just for demo purpose, do not include in your project     -->
    <!-- <script type="text/javascript" src="assets/js/demo/gsdk-switch.js"></script>
    <script type="text/javascript" src="assets/js/demo/jquery.sharrre.js"></script>
    <script type="text/javascript" src="assets/js/demo/demo.js"></script> -->
    <style>
      * {
        box-sizing: border-box;
      }

      .bg{
          position: absolute;
          /* top: 7vh; */
          left: 0;
          width: 100%;
          height: 100vh;
          overflow-y: hidden;
          z-index:-1;

          /* height: 100vh; */

      }
      .fresh-table{
        opacity: 0.8;
      }
    </style>

  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">SaveJob</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Notificationes <span id="nota" style="  background-color: #fa3e3e; border-radius: 2px; color: white; padding: 1px 3px; font-size: 10px;">
               6</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <div class="" style="max-height:50px; overflow:auto;">
                <a class="dropdown-item" href="#">Notificación 1</a>
                <a class="dropdown-item" href="#">Notificación 2</a>
              </div>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Ver todas..</a>
            </div>



          </li>
          <li class="nav-item drop">
            <a class="nav-link" href="#">Editar perfil</a>
          </li>
        </ul>
      </div>
    </nav>
    <img src="img/FondoPerfil.png" class="bg" alt="">

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="description">
                    <h1 class="text-center">Historial de interacciones</h1>
                </div>

                <div class="fresh-table toolbar-color-azure">
                <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
                        Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
                -->
                    <div class="toolbar">
                        <button id="alertBtn" class="btn btn-default">Interacciones SaveJob</button>
                    </div>

                    <table id="fresh-table" class="table">
                        <thead>
                          <th data-field="id">ID</th>
                        	<th data-field="name" data-sortable="true">Solicitante</th>
                        	<th data-field="salary" data-sortable="true">Valor</th>
                        	<th data-field="country" data-sortable="true">Estado</th>
                        	<th data-field="city">Tutor</th>

                        </thead>
                        <tbody>
                            <tr>
                            	<td>1</td>
                            	<td>Dakota Rice</td>
                            	<td>$36,738</td>
                            	<td>Niger</td>
                            	<td>Oud-Turnhout</td>

                            </tr>
                            <tr>
                            	<td>2</td>
                            	<td>Minerva Hooper</td>
                            	<td>$23,789</td>
                            	<td>Curaçao</td>
                            	<td>Sinaai-Waas</td>

                            </tr>
                            <tr>
                            	<td>3</td>
                            	<td>Sage Rodriguez</td>
                            	<td>$56,142</td>
                            	<td>Netherlands</td>
                            	<td>Baileux</td>

                            </tr>
                            <tr>
                            	<td>4</td>
                            	<td>Philip Chaney</td>
                            	<td>$38,735</td>
                            	<td>Korea, South</td>
                            	<td>Overland Park</td>

                            </tr>
                            <tr>
                            	<td>5</td>
                            	<td>Doris Greene</td>
                            	<td>$63,542</td>
                            	<td>Malawi</td>
                            	<td>Feldkirchen in Kärnten</td>

                            </tr>
                            <tr>
                            	<td>6</td>
                            	<td>Mason Porter</td>
                            	<td>$78,615</td>
                            	<td>Chile</td>
                            	<td>Gloucester</td>

                            </tr>
                            <tr>
                            	<td>7</td>
                            	<td>Alden Chen</td>
                            	<td>$63,929</td>
                            	<td>Finland</td>
                            	<td>Gary</td>

                            </tr>
                            <tr>
                            	<td>8</td>
                            	<td>Colton Hodges</td>
                            	<td>$93,961</td>
                            	<td>Nicaragua</td>
                            	<td>Delft</td>

                            </tr>
                            <tr>
                            	<td>9</td>
                            	<td>Illana Nelson</td>
                            	<td>$56,142</td>
                            	<td>Heard Island</td>
                            	<td>Montone</td>

                            </tr>
                            <tr>
                            	<td>100</td>
                            	<td>Vielka Norton</td>
                            	<td>$44,584</td>
                            	<td>Spain</td>
                            	<td>Thane</td>

                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    <script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false;

        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",

                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: false,
                pagination: true,
                striped: true,
                pageSize: 5,
                pageList: [5],

                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });



            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });


            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });

                }
            };

            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });


        });

    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>



</html>
