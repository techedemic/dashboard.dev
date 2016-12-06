{% extends 'templates/default.php' %}

{% block title %} Error: 404 {% endblock %}
{% block helptitle %} Error {% endblock %}
{% block helpcontent %} This is a 404 page. You don't belong here. Go back! {% endblock %}

{% block content %}
<div class="well well-lg">
<h3>404</h3>
<p>That page cannot be found</p>
<p>Go back to the <a href="{{urlFor('home')}}">Home</a> page</p>
</div>
{% endblock %}
