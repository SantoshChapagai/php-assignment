# php-assignment
- PHP-MAMP is a set of docker images that include a MAMP stack (macOS, Apache, MySQL, PHP8 and phpMyAdmin all in one handy package.

## Recipe app

### Technologies
php, css, and database(mysql)
Use in your device
git clone https://github.com/SantoshChapagai/php-assignment
cd to the folder
run command: docker-compose up
Access http://localhost:8005/personal/

### Landing page
- Front page has two options either sign up or sign in.
- The new user can enter there email address and set the password.
- If the email is already existed in the database it notify the users.
- The sign in link navigates to the another page.

### Sign in page
- The user can sign in to make a recipe or view recipe.
- The user enter email address is checked from the database.
- If enter email existed, it checks the enter password against the stored password.
- If both email and password matched, the page redirects the user to the recipe page.

### Recipe page
User can create a recipe in this page.
The view recipe button navigates to the page with all recipes.
The log out button of the page navigates user to the landing page
