@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section')

            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Order</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Total Order</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Customers</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Product</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                @section ('pane2_panel_title', 'Customer List')
                @section ('pane2_panel_body')

                    <!-- /.panel -->
                    <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email Id</th>
                    <th>Product Order</th>
                    <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="success">
                    <td>meena</td>
                    <td>meena@gmail.com</td>
                    <td>Rice</td>
                    <td>100.00</td>
                    </tr>
                    <tr>
                    <td>aathiswari</td>
                    <td>aathiswari@gmail.com</td>
                    <td>Rice</td>
                    <td>100.00</td>
                    </tr>
                    <tr class="info">
                    <td>Naavena</td>
                    <td>Naavena@gmail.com</td>
                    <td>Rice</td>
                    <td>100.00</td>
                    </tr>
                    <tr>
                    <td>Devi</td>
                    <td>devi@gmail.com</td>
                    <td>Rice</td>
                    <td>100.00</td>
                    </tr>
                    <tr class="warning">
                    <td>kavi</td>
                    <td>kavi@gmail.com</td>
                    <td>Rice</td>
                    <td>100.00</td>
                    </tr>
                    <tr>
                    <td>ragul</td>
                    <td>ragul@gmail.com</td>
                    <td>Rice</td>
                    <td>100.00</td>
                    </tr>
                    <tr class="danger">
                    <td>anbu</td>
                    <td>anbu@gmail.com</td>
                    <td>Rice</td>
                    <td>100.00</td>
                    </tr>
                    </tbody>
                    </table>
                        <!-- /.panel-body -->

                    <!-- /.panel -->
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
                </div>
                <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.panel .chat-panel -->
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'pane3'))
                </div>

                <!-- /.col-lg-4 -->

@stop
