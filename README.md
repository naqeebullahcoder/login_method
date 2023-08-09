Build a solution in Laravel that allows a backend admin and a frontend user to log into the solution concurrently using Laravel Auth, guards, and middleware. 
it maintain both the admin and the user login sessions separately, meaning if I log in or log out as an admin, it should not be logged in or logged out as a user while using the same browser and vice versa.

   Login Method Flow Working 
 Step 1:
	composer create-project laravel/laravel login_method
Step2:
	php artisan make:migration create_users_table
	php artisan make:migration create_admins_table
	php artisan migrate
Step3:
	php artisan make:seeder UsersTableSeeder
	php artisan make:seeder AdminsTableSeeder
Step4:
	php artisan db:seed --class=UsersTableSeeder
	php artisan db:seed --class=AdminsTableSeeder
Step5:
	php artisan make:middleware RedirectIfNotAdmin
	php artisan make:middleware RedirectIfNotUser
Step6:
	php artisan make:controller AdminAuthController
	php artisan make:controller UserAuthController
Step7:
	routes/web.php
Step8:
	php artisan make:model Models/Admin
	php artisan make:model Models/User
Step9:
	resources/views/admin/login.blade.php
	resources/views/user/login.blade.php
Step10: 
	php artisan make:controller AdminDashboardController
	php artisan make:controller UserDashboardController
