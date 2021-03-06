<!DOCTYPE html>

<?php

  include './php/connection.php';
  
?>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>C A R D Pine | Admin</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Datatables -->

    <link href="vendors/datatables.net/extensions/FixedHeader/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Scroller/css/scroller.bootstrap.min.css" rel="stylesheet">
    

    
    <link href="vendors/datatables.net/media/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Buttons/css/buttons.dataTables.css" rel="stylesheet">
    <link href="vendors/datatables.net/extensions/Select/css/select.dataTables.css" rel="stylesheet">
    <link href="vendors/datatables.net-editor/css/editor.dataTables.css" rel="stylesheet">



  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>C A R D Pine</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Administrator</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li id="home_nav"><a class="link active"><i class="fa fa-home"></i> Home </a></li>

                  <li id="category_nav"><a class="link"><i class="fa fa-edit"></i> Categories </a></li>

                  <li id="edit_card_nav"><a class="link"><i class="fa fa-desktop"></i> Cards </a></li>

                  <li id="edit_testimonials_nav"><a class="link"><i class="fa fa-table"></i> Testimonials </a></li>

                  <li id="edit_orders_nav"><a class="link" ><i class="fa fa-bar-chart-o"></i> User Orders </a></li>

                  <li><a class="link" ><i class="fa fa-clone"></i> About </a></li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>ADMIN SETTING</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Admin Profile </a></li>

                  <li><a><i class="fa fa-windows"></i> Messages </a></li>

                  <li><a><i class="fa fa-sitemap"></i> Site Profile </span></a></li>                  
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a> Profile</a></li>
                    <li><a><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

          <div class="menu_tabs">
            <!-- top menu tabs -->
            <div class="top_menu" >

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_slider" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h3>EDIT SLIDER</h3>
                  
                  <p>EDIT SLIDER DETAILS.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_tile" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                    
                  <div class="count">389</div>

                  <h3>EDIT TILES</h3>
                  
                  <p>EDIT TILES DETAILS.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_card" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h3>ADD CARD</h3>
                  
                  <p>ADD CARD DETAILS.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div id="add_testimonial" class="tile-stats">
                  <div class="icon"><i class="fa fa-plus-square"></i>
                  </div>
                  
                  <div class="count">389</div>
                  
                  <h3>ADD TESTI</h3>
                  
                  <p>ADD TESTIMONIAL DETAILS.</p>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <!-- content -->
            <div hidden id="content_add">  

              <!-- content to add slider to site -->
              <div class="row" id="slider_div">

                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>EDIT SLIDER DETAILS</h2>
                      <div class="clearfix"></div>
                    </div>

                    <div class="x_content" style="display: block;">
                      <table id="slider_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      </table>  
                    </div>
                  </div>
                </div>
              </div>

              <!-- content to add tile to site -->
              <div class="row" id="tiles_div">
                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>EDIT TILES</h2>
                    <div class="clearfix"></div>
                    </div>

                      <div class="x_content" style="display: block;">
                        <table id="tiles_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                      </table>

  
                      </div>
                  </div>
                </div>
              </div>

              <!-- content to add card to site -->
              <div class="row" id="card_div">
                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>ADD NEW CARD</h2>
                    <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="x_content" style="display: block;">
                    <br>

                    <form id="card_form" enctype="multipart/form-data" data-parsley-validate="" method="post"  class="form-horizontal form-label-left" novalidate="">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card_name">Card Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="card_name" id="card_name" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="5"><ul class="parsley-errors-list" id="parsley-id-5"></ul>
                          </div>
                        </div>
                  

                        <div class="form-group">
                          <label for="card_category" class="control-label col-md-3 col-sm-3 col-xs-12">Select Category 
                          <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="card_category" data-parsley-dropdown="true" name="card_category" class="select2_single form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                              <option  value="-1">Select a category</option>
                              <?php 

                                $sql = "SELECT category_name FROM category";

                                $res = $conn -> query($sql);

                                while ($row = $res -> fetch_assoc()) {
                                    # code                             

                              ?>
              
                              <option value = "<?php echo ($row['category_name']); ?>"><?php echo ($row['category_name']); ?></option>
                              
                              <?php

                                }

                              ?>
                            
                            </select>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="card_price">Card Price <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="dropdown" name="card_price" data-parsley-type="digits" id="card_price" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="7"><ul class="parsley-errors-list" id="parsley-id-7"></ul>
                          </div>
                        </div>


                        <div class="form-group">
                          <label for="card_description"  class="control-label col-md-3 col-sm-3 col-xs-12">Card Description <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea type="text" style="resize: vertical;" required="required" id="card_description" name="card_description" class="resizable_textarea form-control col-md-7 col-xs-12 parsley-success" rows="3" data-parsley-id="8" ></textarea><ul class="parsley-errors-list" id="parsley-id-8"></ul>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="card_image" class="control-label col-md-3 col-sm-3 col-xs-12">Card Image<span class="required">* (900*1024)</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="card_image" data-parsley-fileextension="jpg png"  data-parsley-dimensions="true" data-parsley-dimensions-options='{"width": "900","height": "1024"}'  class="form-control col-md-7 col-xs-12" required="required" type="file" name="card_image" data-parsley-id="9">
                            <ul class="parsley-errors-list" id="parsley-id-9"></ul>
                          </div>
                        </div>
                
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="submit" name="submit_card_details" value="Add Details" class="btn btn-success">
                          </div>
                        </div>

                      </form>
                    </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- content to add testimonial  -->
              <div class="row" id="testimonial_div">
                <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_panel">

                    <div class="x_title">
                      <h2>ADD NEW TESTIMONIAL</h2>
                    <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="x_content" style="display: block;">
                    <br>

                    <form id="testimonial_form" enctype="multipart/form-data" data-parsley-validate="" method="post"  class="form-horizontal form-label-left" novalidate="">

                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Customer Name <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="customer_name" id="customer_name" required="required" class="form-control col-md-7 col-xs-12 parsley-success" data-parsley-id="5"><ul class="parsley-errors-list" id="parsley-id-5"></ul>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_message">Message <span class="required">*</span>
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea type="text" style="resize: vertical;" required="required" id="customer_message" name="customer_message" class="resizable_textarea form-control col-md-7 col-xs-12 parsley-success" rows="5" data-parsley-id="7" ></textarea><ul class="parsley-errors-list" id="parsley-id-7"></ul>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="customer_image" class="control-label col-md-3 col-sm-3 col-xs-12">Customer Image<span class="required">* (150*150)</span></label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="customer_image" data-parsley-fileextension="jpg png"  data-parsley-dimensions="true" data-parsley-dimensions-options='{"width": "150","height": "150"}'  class="form-control col-md-7 col-xs-12" required="required" type="file" name="customer_image" data-parsley-id="9">
                            <ul class="parsley-errors-list" id="parsley-id-9"></ul>
                          </div>
                        </div>
                
                        <div class="ln_solid"></div>
                        <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <input type="submit" name="submit_testimonial_details" value="Add Details" 
                            class="btn btn-success">
                          </div>
                        </div>

                      </form>
                    </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="clearfix"></div>

          <div id="content_main">
            
            <!-- content to add/edit slider -->
            <div hidden class="row" id="category_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT CATEGORY DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="category_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                    </table>  
                  </div>
                </div>
              </div>
            </div>    

            <!-- content to edit/delete card -->
            <div hidden class="row" id="edit_card_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT CARD DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="card_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                    </table>  
                  </div>
                </div>
              </div>
            </div>   

            <!-- content to edit/delete testimonials -->
            <div hidden  class="row" id="testimonials_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>EDIT TESTIMONIALS DETAILS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="testimonials_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                    </table>  
                  </div>

                </div>

              </div>
            </div> 

            <!-- content to view orders -->
            <div hidden  class="row" id="orders_div">

              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">
                    <h2>VIEW INCOMPLETE ORDERS</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="display: block;">
                    <table id="orders_datatable-responsive" class="table table-striped table-bordered dt-responsive wrap" cellspacing="0" width="100%">
                    </table>  
                  </div>

                </div>

              </div>
            </div> 

          </div>

        </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            C A R D Pine - Admin Template by <a href="https://iacsoftware.com">IAC SOFTWARE SOLUTION</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/datatables.net/media/js/jquery.js"></script>               
    
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>

    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>

    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <script src="vendors/parsleyjs/dist/laravel-parsley.js"></script> 

    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>

    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>

    <!-- Datatables -->
    <script src="vendors/datatables.net/media/js/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net/media/js/dataTables.bootstrap.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net/extensions/FixedHeader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net/extensions/Responsive/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/datatables.net/extensions/Select/js/dataTables.select.min.js"></script>
    <script src="js/dataTables.altEditor.js"></script>


<!-- file extention validation -->
<script>
    $(document).ready(function() {
        window.ParsleyValidator
            .addValidator('fileextension', function (value, requirement) {
                // the value contains the file path, so we can pop the extension
                var fileExtension = value.split('.').pop();
                var extent = requirement.split(" ");

                return fileExtension === extent[0] || fileExtension === extent[1];
            }, 32)
            .addMessage('en', 'fileextension', 'The extension doesn\'t match the required');

        $("#slider_form").parsley();
        $("#card_form").parsley();
        $("#tile_form").parsley();
        $("#testimonial_form").parsley();
    });
</script>


<!-- dropdown validation -->
<script>
    $(document).ready(function() {
        window.ParsleyValidator
            .addValidator('dropdown', function (value, requirement) {
                // the value contains the file path, so we can pop the extension
                if (requirement) 
                {
                  return value != -1;
                }

            }, 32)
            .addMessage('en', 'dropdown', 'Please select a valid option');

        $("#slider_form").parsley();
        $("#card_form").parsley();
        $("#tile_form").parsley();
        $("#testimonial_form").parsley();
    });
</script>




<!-- collapsable content -->
<script>

var initalized_slider,initalized_category,initalized_tiles,initalized_testimonial,initalized_card,initalized_orders;

  $('#add_slider').click(function() {

    if (!initalized_slider) 
    {
      init_slider();
      initalized_slider = true;
    }
    else
    {
      sliderDatatable.ajax.reload();
    }
    $(".link").removeClass('active');
    $("#home_nav .link").addClass('active');

    $("#content_main").slideUp();

    if($("#content_add").is(':visible') && $("#slider_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#slider_div").is(':hidden'))
    {
      $("#slider_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#slider_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
  });

  $('#add_tile').click(function() {

    if (!initalized_tiles) 
    {
      init_tiles();
      initalized_tiles = true;
    }
    else
    {
      tilesDatatable.ajax.reload();
    }

    $(".link").removeClass('active');
    $("#home_nav .link").addClass('active');

    $("#content_main").slideUp();

    if($("#content_add").is(':visible') && $("#tiles_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#card_div").is(':hidden'))
    {
      $("#tiles_div").slideDown();
      $("#slider_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#tiles_div").slideDown();
      $("#slider_div").slideUp();
      $("#card_div").slideUp();
      $("#testimonial_div").slideUp();
    }
  });

  $('#add_card').click(function() {


    $(".link").removeClass('active');
    $("#home_nav .link").addClass('active');

    $("#content_main").slideUp();

    if($("#content_add").is(':visible') && $("#card_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#card_div").is(':hidden'))
    {
      $("#card_div").slideDown();
      $("#tiles_div").slideUp();
      $("#slider_div").slideUp();
      $("#testimonial_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#card_div").slideDown();
      $("#tiles_div").slideUp();
      $("#slider_div").slideUp();
      $("#testimonial_div").slideUp();
    }
  });

  $('#add_testimonial').click(function() {

    $(".link").removeClass('active');
    $("#home_nav .link").addClass('active');
    
    $("#content_main").slideUp();

    if($("#content_add").is(':visible') && $("#testimonial_div").is(':visible'))
    {
      $("#content_add").slideUp();
    }
    else if($("#content_add").is(':visible') && $("#testimonial_div").is(':hidden'))
    {
      $("#testimonial_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#slider_div").slideUp();
    }
    else
    {
      $("#content_add").slideDown();
      $("#testimonial_div").slideDown();
      $("#tiles_div").slideUp();
      $("#card_div").slideUp();
      $("#slider_div").slideUp();
    }
  });


  $("#home_nav").click(function(){

    $(".link").removeClass('active');
    $("#home_nav .link").addClass('active');
    $("#content_main").slideUp();
    $("#content_add").slideUp();

  });

  $("#category_nav").click(function(){

    if (!initalized_category) 
    {
      init_category();
      initalized_category = true;
    }
    else
    {
      categoryDatatable.ajax.reload();
    }
    
    $(".link").removeClass('active');
    $("#category_nav .link").addClass('active');
    $("#content_main").slideDown();
    $("#orders_div").slideUp();
  	$("#category_div").slideDown();
    $("#edit_card_div").slideUp();
    $("#testimonials_div").slideUp();
    $("#content_add").slideUp();

  });

  $("#edit_card_nav").click(function(){

    if (!initalized_card) 
    {
      init_card();
      initalized_card = true;
    }
    else
    {
      cardDatatable.ajax.reload();
    }
    
    $(".link").removeClass('active');
    $("#edit_card_nav .link").addClass('active');
    $("#content_main").slideDown();
    $("#orders_div").slideUp();
    $("#category_div").slideUp();
    $("#edit_card_div").slideDown();
    $("#testimonials_div").slideUp();
    $("#content_add").slideUp();

  });

  $("#edit_testimonials_nav").click(function(){

    if (!initalized_testimonial) 
    {
      init_testimonials();
      initalized_testimonial = true;
    }
    else
    {
      testimonialDatatable.ajax.reload();
    }
    
    $(".link").removeClass('active');
    $("#edit_testimonials_nav .link").addClass('active');
    $("#content_main").slideDown();
    $("#orders_div").slideUp();
    $("#category_div").slideUp();
    $("#edit_card_div").slideUp();
    $("#testimonials_div").slideDown();
    $("#content_add").slideUp();

  }); 

    $("#edit_orders_nav").click(function(){

    if (!initalized_orders) 
    {
      init_orders();
      initalized_orders = true;
    }
    else
    {
      ordersDatatable.ajax.reload();
    }
    
    $(".link").removeClass('active');
    $("#edit_orders_nav .link").addClass('active');
    $("#orders_div").slideDown();
    $("#content_main").slideDown();
    $("#category_div").slideUp();
    $("#edit_card_div").slideUp();
    $("#testimonials_div").slideUp();
    $("#content_add").slideUp();

  });  
</script>

<!-- Autosize -->
<script>
  $(document).ready(function() {
    autosize($('.resizable_textarea'));
  });
</script>
<!-- /Autosize -->


<!-- Datatables -->
<script>

var is_latest,is_category,cardDatatable,sliderDatatable,tilesDatatable,categoryDatatable,testimonialDatatable,ordersDatatable;


  $(document).ready(function() {

    initalized_slider=false;
    initalized_category=false;
    initalized_tiles=false;
    initalized_testimonial=false;
    initalized_card=false;
    initalized_orders=false;

    
    getLatest();
    getOptions();
    

  });

  function getLatest(argument) {

    $.post("./php/get_card_data.php",{getLatest:"yes"},function(data){

      is_latest = data;

    },"json");
  }

  function getOptions(argument) {

    $.post("./php/get_category_data.php",{getOptions:"yes"},function(data){

      is_category = data;

    },"json");
  }

  function init_slider(){

    sliderDatatable = $('#slider_datatable-responsive').DataTable({
        dom: "Bfrtip",
        ajax: "./php/get_slider_data.php",
        columns: [
            { 
              title: "SLIDER ID",
              data: "slider_id",
              type: "readonly"
              
            },
            { 
              title: "MAIN TEXT",
              data: "main_text",
              type: "text"
            },
            { 
              title: "TOP HEADING",
              data: "sub_heading_top",
              type: "text"
            },
            { 
              title: "BOTTOM HEADING",
              data: "sub_heading_bottom",
              type: "text"
            },
            { 
              title: "SLIDER IMAGE",
              data: "background_img",
              type: "file"
            },
            { 
              title: "STATUS",
              data: "status",
              type:  "select",
              options: [
                  { label: "published", value: "published" },
                  { label: "unpublished", value: "unpublished" } 
                ]
            }
        ],
        order: [ 0, 'asc' ],
        altEditor: true,
        responsive: true,
        select: {
          style: 'os',
          blurable: true
        },
         buttons: [
            {
              extend: 'selected', // Bind to Selected row
              text: 'Edit',
              name: 'edit'        // do not change name
            }
          ]
    });

  }

  function init_category(){

    categoryDatatable = $('#category_datatable-responsive').DataTable({
        dom: "Bfrtip",
        ajax: "./php/get_category_data.php",
        columns: [
            { 
              title: "CATEGORY ID",
              data: "category_id", 
              type: "readonly"
            },
            { 
              title: "CATEGORY NAME",
              data: "category_name",
              type: "text"
            },
            { 
              title: "CATEGORY DESCRIPTION",
              data: "category_description", 
              type: "txtarea"
            },
            { 
              title: "STOCK",
              data: "stock",
              type: "readonly"
            }
        ],
        order: [ 0, 'asc' ],
        altEditor: true,
        responsive: true,
        select: {
          style: 'os',
          blurable: true
        },
        buttons: [
          {
            text: 'Add',
            name: 'add'        // do not change name
          },
          {
            extend: 'selected', // Bind to Selected row
            text: 'Edit',
            name: 'edit'        // do not change name
          }
          
        ]
    });
  }


  function init_card(){

    cardDatatable =  $('#card_datatable-responsive').DataTable({
        dom: "Bfrtip",
        ajax: "./php/get_card_data.php",
        columns: [  
            {
              title: "CARD ID",
              data: "card_id",
              type: "readonly"
            },
            { 
              title: "CARD NAME",
              data: "card_name",
              type: "text"
            },
            { 
              title: "CARD DESCRIPTION",
              data: "card_description", 
              type: "txtarea"
            },
            { 
              title: "CARD PRICE",
              data: "card_price",
              type: "text"
            },
            { 
              title: "CARD CATEGORY",
              data: "card_category",
              type: "select",
              options: is_category
            },
            { 
              title: "CARD IMAGE",
              data: "card_image", 
              type: "file"
            },
            { 
              title: "CARD ON HOME",
              data: "on_home", 
              type: "select",
              options: [
                    { label: "no", value: "no" },
                    { label: "yes", value: "yes" } 
                  ]
            },
            { 
              title: "LATEST",
              data: "is_latest", 
              type: "select",
              options: is_latest
            }
        ],
        order: [ 0, 'asc' ],
        altEditor: true,
        responsive: true,
        select: {
          style: 'os',
          blurable: true
        },
         buttons: [
          {
            extend: 'selected', // Bind to Selected row
            text: 'Edit',
            name: 'edit'        // do not change name
          },
          {
            extend: 'selected', // Bind to Selected row
            text: 'Delete',
            name: 'delete'        // do not change name
          }
        ]
    });
  }


  function init_tiles(){

        tilesDatatable = $('#tiles_datatable-responsive').DataTable({
            dom: "Bfrtip",
            ajax: "./php/get_tiles_data.php",
            columns: [
                { 
                  title: "TILE ID",
                  data: "tile_id", 
                  type: "readonly"
                  
                },
                { 
                  title: "MAIN TEXT",
                  data: "tile_main_text",
                  type: "text"
                },
                { 
                  title: "TOP HEADING",
                  data: "top_heading", 
                  type: "text"
                },
                
                { 
                  title: "TILE IMAGE",
                  data: "tile_image",
                  type: "file"
                },

                { 
                  title: "ON LEFT",
                  data: "tile_on_left",
                  type: "select",
                  options: [
                    { label: "select for left", value: "no" },
                    { label: "yes", value: "yes" }  
                  ]
                },
            ],
            order: [ 0, 'asc' ],
            altEditor: true,
            responsive: true,
            select: {
              style: 'os',
              blurable: true
            },
             buttons: [
                {
                  extend: 'selected', // Bind to Selected row
                  text: 'Edit',
                  name: 'edit'        // do not change name
                }
              ]
        });
  }

  
  function init_testimonials(){

        testimonialDatatable = $('#testimonials_datatable-responsive').DataTable({
            dom: "Bfrtip",
            ajax: "./php/get_testimonials_data.php",
            columns: [
                { 
                  title: "TESTIMONIAL ID",
                  data: "testimonial_id", 
                  type: "readonly"
                  
                },
                { 
                  title: "CUSTOMER NAME",
                  data: "customer_name",
                  type: "text"
                },
                { 
                  title: "CUSTOMER MESSAGE",
                  data: "customer_message", 
                  type: "txtarea"
                },  
                { 
                  title: "CUSTOMES IMAGE",
                  data: "customer_image",
                  type: "file"
                },
                { 
                  title: "ON HOME",
                  data: "testimonial_on_home",
                  type: "select",
                  options: [
                      { label: "yes", value: "yes" },
                      { label: "no", value: "no" } 
                    ]
                }
            ],
            order: [ 0, 'asc' ],
            altEditor: true,
            responsive: true,
            select: {
              style: 'os',
              blurable: true
            },
             buttons: [
                {
                  extend: 'selected', // Bind to Selected row
                  text: 'Edit',
                  name: 'edit'        // do not change name
                },
                {
                  extend: 'selected', // Bind to Selected row
                  text: 'Delete',
                  name: 'delete'        // do not change name
                }
              ]
        });
  }

  function init_orders(){

        ordersDatatable = $('#orders_datatable-responsive').DataTable({
            dom: "Bfrtip",
            ajax: "./php/get_orders_data.php",
            columns: [
                { 
                  title: "ORDER ID",
                  data: "order_id", 
                  type: "readonly"
                  
                },
                { 
                  title: "CUSTOMER NAME",
                  data: "user_name",
                  type: "readonly"
                },
                { 
                  title: "CUSTOMER EMAIL",
                  data: "user_email", 
                  type: "readonly"
                },  
                { 
                  title: "BILLING ADDRESS",
                  data: "billing_address",
                  type: "readonly"
                },
                { 
                  title: "SHIPPING ADDRESS",
                  data: "shipping_address",
                  type: "readonly"
                },
                { 
                  title: "ORDER DATE",
                  data: "order_date",
                  type: "readonly"
                }
            ],
            order: [ 0, 'asc' ],
            altEditor: true,
            responsive: true,
            select: {
              style: 'os',
              blurable: true
            },
             buttons: [
                {
                  extend: 'selected', // Bind to Selected row
                  text: 'Complete Order',
                  name: 'generateInvoice'        // do not change name
                },
              ]
        });
  }
  

</script>
<!-- /Datatables -->




<!-- <script>
  var notice = new PNotify({ title: 'Regular Success', text: 'Data Entered Successfully!', type: 'success', styling: 'bootstrap3'});
</script> -->


  </body>


  <?php 


  if (isset($_POST['submit_card_details'])) {
               
      $target_dir = "./images/";
      $base_path = "";
      
      // saving and retrieving image path from database
      $target_path = $base_path . basename($_FILES['card_image']['name']); 
      $target_file = $target_dir . basename($_FILES['card_image']['name']);
      
      
      $query = "INSERT into cards (card_name,card_price,card_category,card_description,card_image) "
      . "VALUES ('{$_POST['card_name']}','{$_POST['card_price']}','{$_POST['card_category']}','{$_POST['card_description']}','{$target_path}')";
     
      if (move_uploaded_file($_FILES["card_image"]["tmp_name"], $target_file)) {
      if ($conn->query($query) === TRUE){

          if (stock($_POST['card_category'])) {
            # code...

            echo "<script>alert('Data has been inserted successfully.');</script>";

          }
          else
          {
            echo "<script>alert('some error');</script>";
          }

      
        } 
      // else{
      //        echo "--------------------------------------------Some error occured" . "Error: " . $query ." -------  ". $conn->error;
      //     }
      } else {
      echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
          }
      $conn->close();     
    
  }


  function stock($card_category)
  {

    $res =  $GLOBALS['conn']  -> query("SELECT stock from category WHERE category_name = '$card_category'");
    $count = 0;
    while ($row = $res -> fetch_assoc()) {
        # code...
        $count = $row['stock'] + 1;
    }

    $chk = $GLOBALS['conn'] -> query("UPDATE category SET stock='$count' WHERE  category_name = '$card_category'");

    return $chk;
  }


  if (isset($_POST['submit_testimonial_details'])) {              
               
    $target_dir = "./images/";
    $base_path = "";
    
    // saving and retrieving image path from database
    $target_path = $base_path . basename($_FILES['customer_image']['name']); 
    $target_file = $target_dir . basename($_FILES['customer_image']['name']);
    
    
    $query = "INSERT into testimonials (customer_name,customer_message,customer_image) "
    . "VALUES ('{$_POST['customer_name']}','{$_POST['customer_message']}','{$target_path}')";
   
    if (move_uploaded_file($_FILES["customer_image"]["tmp_name"], $target_file)) {
    if ($conn->query($query) === TRUE){
    echo "<script>alert('data successfully entered')</script>";
        } 
    else{
           echo "--------------------------------------------Some error occured" . "Error: " . $query ." -------  ". $conn->error;
        }
    } else {
    echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
        }
    $conn->close();     
    
  }

?>



</html>
