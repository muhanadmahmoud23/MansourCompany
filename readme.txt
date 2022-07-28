composer create-project laravel/laravel 212Solutions

cd 212Solutions

composer require yajra/laravel-datatables-oracle
composer require yajra/laravel-datatables
composer require "laravelcollective/html"

php artisan make:migration create_companies_table
php artisan make:migration create_employees_table

php artisan migrate
#change migration date

php artisan make:model Company
php artisan make:model Employee

php artisan make:controller CompaniesController --resource
php artisan make:controller EmployeesController --resource

php artisan make:request StoreCompanyRequest
php artisan make:request UpdateCompanyRequest
php artisan make:request StoreEmployeeRequest
php artisan make:request UpdateEmployeeRequest



php artisan serve

## For Mail Config ##
Please Change Before Creating New Employee :
MAIL_USERNAME = your-gmail-username
MAIL_PASSWORD = your-application-specific-password



