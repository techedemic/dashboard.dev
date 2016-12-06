{% extends 'templates/default.php' %}

{% block title %} Home {% endblock %}

{% block content %}



<div class="container-fluid">
  <div class="row">
      <!--<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">-->
          <div class="col-lg-3 col-md-6">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                              <i class="fa fa-dashboard fa-5x"></i>
                          </div>
                          <div class="col-xs-9 text-right">
                              <div class="text-huge">26</div>
                                <div>Monitored</div>
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
                            <i class="fa fa-upload fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="text-huge">4</div>
                              <div>Site Backup Up</div>
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
                            <i class="fa fa-upload fa-5x fa-rotate-180"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="text-huge">4</div>
                              <div>Site Down</div>
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
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="text-huge">222</div>
                              <div>Other sites</div>
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
  </div>
</div>
<!-- Modal -->
   <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modelInfoLabel">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           <h4 class="modal-title" id="modelInfoLabel">Modal title</h4>
         </div>
         <div class="modal-body">
           ...
       </div>s
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Save changes</button>
         </div>
       </div>
     </div>
   </div>

{% endblock %}
