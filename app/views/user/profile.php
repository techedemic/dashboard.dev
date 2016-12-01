{% extends 'templates/default.php' %}

{% block title %} {{ user.getFullNameOrUsername() }} {% endblock %}

{% block content %}
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="well well-lg">
        <h3>User Profile</h3>
        <h2><i>{{ user.username }}</i></h2>
        <img src="{{ user.getAvatarUrl({size:100}) }}" alt="Profile picture for {{ user.getFullNameOrUsername() }}"
        <dl>
            {% if user.getFullName() %}
                <dt>Full name:</dt>
                <dd>{{ user.getFullName() }}</dd>


            {% endif %}
            <dt>Email:</dt>
            <dd>{{ user.email }}</dd>
        </dl>
        {% if user.isAdmin() %}
            admin
        {% endif %}
        </div>

{% endblock %}
