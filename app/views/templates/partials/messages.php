{% if auth%}

{% endif %}

{% if flash.global  %}

    <div class="alert alert-info message" role="alert">
      {{flash.global}}
    </div>
{% endif %}
