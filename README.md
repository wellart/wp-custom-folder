my wp custom folder structure

# Instalation

1. just clone or upload this repo to your hosting
2. download wordpress and extract to system folder just overwrite or you can skip downloading latest wordpress and update later on dashboard
   https://wordpress.org/latest.zip
3. edit wp-config.php change
   define('DB_NAME', 'dbname');
   define('DB_USER', 'dbuser');
   define('DB_PASSWORD', 'dbpass');
4. create folder app symlink on system folder

```
cd system
ln -s ../app app
```
