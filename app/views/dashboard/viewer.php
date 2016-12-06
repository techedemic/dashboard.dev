{% extends 'templates/default.php' %}

{% block resources %}
<script src="{{ resourcesUrl }}javascript/dashboard.js" type="text/javascript"></script>
{% endblock %}


{% block title %} Dashboard {% endblock %}
{% block helptitle %} Dashboard {% endblock %}
{% block helpcontent %} Dashboard help window {% endblock %}

{% block content %}

    <div id="graph_container">

    </div>

{% endblock %}
