# Api News Example 

## Requirements

1. composer
2. php ^8.3.*
3. NodeJS 23.6.*
4. Npm 10.9.*


## Development
For execute this project in development enviroments,  you need to run the following commands
> php artisan serve
> npm run dev

## Production
For execute this project in production enviroments,  you need to run the following commands
> npm run build


you can run this in Nginx or Apache 

> < VirtualHost *:80>
>>    ServerAdmin admin@example.com
>>
>>    ServerName mydomain.com
>>
>>    DocumentRoot /var/www/html/laravel/public
>>
>>    <Directory /var/www/html/laravel>
>>>
>>>    Options Indexes MultiViews FollowSymLinks 
>>>
>>>   AllowOverride All
>>>
>>>   Require all granted 
>>>
>>   < /Directory>
>>
>>    ErrorLog ${APACHE_LOG_DIR}/error.log
>>
>>    CustomLog ${APACHE_LOG_DIR}/access.log combined
>>
> < /VirtualHost>


So, you should need enable apache modules for run laravel aap


>sudo a2enmod rewrite
>
>sudo a2ensite laravel.conf

and restart Apache server

> sudo systemctl restart apache2

after you should install laravel app with next permissions.
>
>sudo chown -R www-data:www-data /var/www/html/laravel
>
>sudo chmod -R 775 /var/www/html/laravel
>
>sudo chmod -R 775 /var/www/html/laravel/storage
>
>sudo chmod -R 775 /var/www/html/laravel/bootstrap/cache


Run next  command  to generate app key and env file.

>cp .env.example .env
>php artisan key:generate


Run migration if is needs.