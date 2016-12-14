{% extends 'templates/default.php' %}

{% block resources %}
<script src="{{ resourcesUrl }}javascript/chart.js" type="text/javascript"></script>
{% endblock %}


{% block title %} Dashboard {% endblock %}
{% block helptitle %} Dashboard {% endblock %}
{% block helpcontent %} Dashboard help window {% endblock %}

{% block content %}


  <div class="row">
    
      <h1 class="page-header">Dashboards</h1>

      <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
          <canvas id="chart_1" width="400" height="400"></canvas>
          <h4>Dashboard 1</h4>
          <span class="text-muted">Something else</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <canvas id="chart_2" width="400" height="400"></canvas>
          <h4>Dashboard 2</h4>
          <span class="text-muted">Something else</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <canvas id="chart_3" width="400" height="400"></canvas>
          <h4>Dashboard 3</h4>
          <span class="text-muted">Something else</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
          <canvas id="chart_4" width="400" height="400"></canvas>
          <h4>Dashboard 4</h4>
          <span class="text-muted">Something else</span>
        </div>
      </div>
    </div>
  </div>

{% endblock %}
