<ul>
    {% if auth %}
        <img src="{{ auth.getAvatarUrl({size:30}) }}" alt="Your avatar" >
        Hello, {{ auth.getFullNameOrUsername() }}

    {% endif %}
    <li><a href="{{ urlFor('home') }}">Home</a></li>
    {% if auth %}
    <li><a href="{{ urlFor('logout') }}">Logout</a></li>
    <li><a href="{{ urlFor('user.profile', {username:auth.username}) }}">Your profile</a></li>
    <li><a href="{{ urlFor('auth.password.change') }}">Change Password</a></li>
    <li><a href="{{ urlFor('user.profile.edit') }}">Update Profile</a></li>
        {% if auth.isAdmin() %}
        <li><a href="{{ urlFor('admin.example') }}">Admin</a></li>
        {% endif %}
    {% else %}
    <li><a href="{{ urlFor('register') }}">Register</a></li>
    <li><a href="{{ urlFor('login') }}">Login</a></li>
    {% endif %}
    <li><a href="{{ urlFor('user.all') }}">All Users</a></li>
</ul>
