{% if auth%}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
{% endif %}

{% if flash.global  %}

    <div class="alert alert-info message" role="alert">
      {{flash.global}}
    </div>
{% endif %}
