{% extends 'templates/default.php' %}

{% block title %} Home {% endblock %}

{% block content %}



<div class="container-fluid">
  <div class="row">
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">


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
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-primary">Save changes</button>
         </div>
       </div>
     </div>
   </div>

{% endblock %}
