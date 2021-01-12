
cd /var/www/html
wp core download --allow-root
wp config create --allow-root --skip-check --dbname="mtav" --dbuser="admin" --dbpass="admin" --dbhost=mysql --dbprefix="wp_" --extra-php="define( 'MTAV_ENABLE_LOCAL_SETTINGS', true ); define('WP_DEBUG',true); define('WP_DEBUG_LOG',true); define('WP_DEBUG_DISPLAY',false); define('WP_ENV', 'development'); define('WP_SITEURL', 'http://mtav.local/'); define('WP_HOME', 'http://mtav.local/');"
wp core install --allow-root --admin_user="mtav" --admin_email="admin@admin.com" --admin_password="admin" --url="http://mtav.local/" --title="MTAV"

wp theme activate mtav --allow-root
wp plugin activate --all --allow-root
wp plugin list --allow-root