{% extends 'templates/default.php' %}

{% block title %} All Users {% endblock %}

{% block content %}
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2>All users</h2>
    {% if users is empty %}
        <p>No registered users</p>
    {% else %}
        {% for user in users %}
            <div class="user">
                <a href="{{ urlFor('user.profile', {username: user.username}) }}">{{ user.username }}</a>
                {% if user.getFullName() %}
                    ({{user.getFullName()}})
                {% endif %}
                {% if user.isAdmin() %}
                    [admin]
                {% endif %}
            </div>
        {% endfor %}
    {% endif %}


{% endblock %}
