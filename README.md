# Blog Application with Role-Based Access Control

## Objective

A simple blog application with role-based access control. It allows users to view and comment on blog posts, while admins can manage blog posts (add, edit, delete).

## Features

1. **User Roles:**
   - **Admin:** Can add, edit, and delete blog posts.
   - **User:** Can view posts and add comments to any post.

2. **Authentication:**
   - Only logged-in users can perform actions (comment, manage posts).

3. **Post Management (Admin):**
   - Admins can add new posts, edit existing posts, and delete posts.
   - Each post contains a title, content, and timestamp.
   - **Simple Dashboard:** A dashboard is provided for admins to perform CRUD operations on posts.
   - **Soft Deletes:** Instead of permanently deleting posts, the application uses soft deletes. This means posts are marked as deleted in the database but are not removed. This allows posts to be restored if needed.

4. **Commenting (User):**
   - Logged-in users can comment on any post.
   - Comments are associated with the user and the post.
   - Users can edit or delete their own comments.

5. **User Interface:**
   - Simple and user-friendly UI.
   - Blade templates used for structuring views.
   - Form validation with jQuery for a smooth user experience.
   - Basic validation and error handling in forms.

6. **Database:**
   - Eloquent ORM is used for managing database interactions.
   - Necessary database tables created using migrations.
   - Sample data seeded for testing.

## Some Screenshots

![Screenshot 1](app/screenshots/login.png)

![Screenshot 2](app/screenshots/signup.png)

![Screenshot 3](app/screenshots/home.png)

![Screenshot 4](app/screenshots/single-post.png)

![Screenshot 5](app/screenshots/confirm-delete-comment.png)

![Screenshot 6](app/screenshots/dashboard-index.png)

![Screenshot 7](app/screenshots/add-new-post.png)

![Screenshot 8](app/screenshots/edit-post.png)

![Screenshot 9](app/screenshots/post-details.png)

## Installation

Before proceeding with the installation, ensure you have Apache installed and configured on your system. Additionally, make sure you have created a MySQL database named `technical_hub`.

1. **Clone the repository:**

    ```
    git clone https://github.com/Momen-Alshouha/laravel-blog.git
    ```

2. **Navigate into the project directory:**

    ```
    cd laravel-blog
    ```

3. **install dependencies**

    ```
    composer install
    npm install
    npm run dev
    ```
    
4. **Copy `.env.example` to `.env`:**

    ```
    cp .env.example .env
    ```

5. **Generate application key:**

    ```
    php artisan key:generate
    ```

6. **Migrate the database:**

    ```
    php artisan migrate
    ```

7. **Run the database seeder:**

    ```
    php artisan db:seed
    ```
    
8. **Serve the application:**

    ```
    php artisan serve
    ```

## Login Credentials

### Admin
- **Email:** ahmad@gmail.com
- **Password:** password

### User
- **Email:** mohammed@gmail.com
- **Password:** password


Once the server is running, access the application through your web browser.

## Note:

- Ensure Apache is installed and configured properly.
- Create a MySQL database named `blog` before running migrations.
