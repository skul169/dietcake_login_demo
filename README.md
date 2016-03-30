# Hướng dẫn cài đặt source

# Bước 1: Clone source code về =))))
# Bước 2: Thiết định apache (dành cho bản 2.2) như sau

<VirtualHost 127.0.0.1:80>
<Directory "{Đường_dẫn_thư_mục_source}/app/webroot">
Options FollowSymLinks Indexes
AllowOverride All
Order deny,allow
allow from All
</Directory>
ServerName dietcake.local
ServerAlias dietcake.local
ScriptAlias /cgi-bin/ "{Đường_dẫn_thư_mục_source}/app/webroot/cgi-bin/"
DocumentRoot "{Đường_dẫn_thư_mục_source}/app/webroot"
</VirtualHost>

# Bước 3: mở file [C:\Windows\System32\drivers\etc\hosts] thêm dòng sau
127.0.0.1 dietcake.local

# Bước 4: chạy file SQL sau [{Đường_dẫn_thư_mục_source}/app/cofig/sql/board.sql]

# Bước 5: mở source code, tìm file [app/config/core.php]:
sửa lại thông tin connect DB tương ứng
define('DB_DSN', 'mysql:host=localhost;dbname=board');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');

Bước 6: restart Apache, mở url: http://dietcake.local và tận hưởng :)