<h3>Mecoson Labs Website and AdminPanel</h3>

<h4>Steps to Install</h4>
<ol>
    <li>setup envirnment variables at .env file</li>
    <li>run composer install to install vendors (third party library)</li>
    <li>
        run 'php artisan migrate' command to create tables in database
        <ul>
            <li>goto App/Providers/SettingsServiceProvider.php file and comment register and boot function code. and uncomment after successful migrate</li>
        </ul>
    </li>
</ol>



<p>Default superadmin login</p>
<ul>
    <li><strong>Username :</strong> superadmin</li>
    <li><strong>Password :</strong> Admin@123</li>
</ul>