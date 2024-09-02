my wp custom folder structure

# Instalation

1. just clone or upload this repo to your hosting and create user and db
2. download wordpress and extract to system folder just overwrite or you can skip downloading latest wordpress and update later on dashboard
   https://wordpress.org/latest.zip
3. edit wp-config.php change
   define('DB_NAME', 'dbname');
   define('DB_USER', 'dbuser');
   define('DB_PASSWORD', 'dbpass');
4. create symlink app on system folder https://www.namecheap.com/support/knowledgebase/article.aspx/9561/29/how-to-create-a-symbolic-link-in-cpanel/
5. open your url and start instalation
6. change your WordPress Address (URL) to https://www.domain.com/system


How to create symlink on cpanel
go to cronjob add 1 min in Common Settings
and add command 
ln -s /home/yourfolder/public_html/app/ /home/yourfolder/public_html/system/app

after cpanel create symlink remove the cron
