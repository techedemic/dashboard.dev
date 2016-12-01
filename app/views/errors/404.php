{% extends 'templates/default.php' %}

{% block title %} Error: 404 {% endblock %}

{% block content %}
<div class="well well-lg">
<h3>404</h3>
<p>That page cannot be found</p>
<p>Go back <a href="{{urlFor('home')}}">home</a></p>
</div>
{% endblock %}
