<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## UI Examples
### Newly Updated Features And UI

### Authentication
- **Login**: Only authenticated users can access the post creation and editing pages. Users must be logged in to perform these actions.

### Event Handling
- **Post Added Event**: When a post is created, an event triggers to update the user's post count. This ensures the post count is kept accurate for each user.

### Protected Routes
- **Route Protection**: Only authenticated users can access routes that modify or view posts. Non-authenticated users will be redirected to the login page when attempting to access protected routes.

### Rules for Creating and Updating Posts
- **Validation Rules**: The creation and updating of posts are validated based on certain rules like ensuring the post has a title, body, and user association. For updates, the current user can only update their own posts.

### Register Api request
![register](screenshots/register.png)

### Login Api request
![login](screenshots/login.png)

### UnAuthenticated 403 message ( requesting posts without login in )
![403](screenshots/403.png)

### View All Posts
![403](screenshots/allposts.png)

### View Single Post With ID
![403](screenshots/singlepost.png)

### Create new Post
![403](screenshots/createpost.png)

### Update Post
![403](screenshots/updatepost.png)

### Delete Post
![403](screenshots/deletepost.png)

### Posts Shows New Posts For Authenticated User and Can Only Edit His Posts
![Posts](screenshots/auth_posts.png)

### Dashboard Shows The Current User and His Posts Count (Configured with Event)
![Posts](screenshots/dashboard.png)

### Update Post Page Shows Unauthorized Rule When User Tries to Update a Post He Doesn't Own
![Post Update Rule](screenshots/post_update_rule.png)

### Posts
![Posts](screenshots/posts.png)

### Post Details
![Post Details](screenshots/post_details.png)

### Create Post Validation
![Create Post Validation](screenshots/validation.png)

### User Id List
![User Id List](screenshots/user.png)

### Create Post Result
![Create Post Result](screenshots/create_result.png)

### Update Post
![Update Post](screenshots/update.png)

### Update Post Result
![Update Post Result](screenshots/update_result.png)



