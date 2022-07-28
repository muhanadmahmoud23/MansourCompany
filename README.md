PleaseNote :
if there is misunderstanding with any provided information that was given to me ,
Please take into considration that im not familiar with Your system,
But i would be greatfull to know more about your system in the future.
___________________________________________________________________________________________
Assume we have :

# branches table => branch_code , region
# company table  => id , name , seq
# categpry  => id , desc
# TER => id , name
# sales_ter => id , name 
# pos => id , code , name
# sales_rep => id , name
# route => id , type
# family => id,seq
# product=> id , family , seq , name
____________________________________________________________________________________________

Assume:

# Jou_id is random number,
# Temp = 0,
# Call_status_id = s
_____________________________________________________________________________________________

Please follow the following commands to start the project

- Download the Laravel folder
- composer install
- CREATE DATABASE 'mansour'
- php artisan migrate:fresh
- php artisan db:seed --class=FundamentalDataBaseSeeder
- php artisan serve
______________________________________________________________________________________________
This Seeder assume we have 2 of entries for each table

to add,edit,delete any entries of 
(SALES , SALES MAN , BRANCH, REGION , COMPANY , CATEGORY , TERMINAL , SALES TER ,POSITION , SALES REP , ROUTES , FAMILY, PRODUCT)
please follow the following link:
localhost:8000
______________________________________________________________________________________________

Postman Request Ex => localhost:8000/api/sales?id=1

id = 1 => for SALESMAN ID


