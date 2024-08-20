#!/bin/bash

# Wait for the database to be ready
echo "Waiting for the database to be ready..."
until mysql -h db -u changeme -pchangeme. -e 'SELECT 1'; do
  >&2 echo "MySQL is unavailable - sleeping"
  sleep 1
done

>&2 echo "MySQL is up - executing command"

# # Run CakePHP migrations
# cd /var/www/html
# mysql -u "$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < "$SQL_FACILITY_CODES"
#  echo "Performing action 2 with SQL file $SQL_FACILITY_CODES."
#  mysql -u "$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < "$SQL_FILE_ACTION_1"
#   echo "SQL script executed successfully for action 1."
#    mysql -u "$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < "$SQL_DOSES"
#      echo "Successfully inserted doses"
# bin/cake migrations migrate

# Wait for the database to be ready
# echo "Waiting for the database to be ready..."

# until docker exec -i pvers_web_app mysql -h db -u changeme -pchangeme. -e 'SELECT 1' > /dev/null 2>&1; do
#   >&2 echo "MySQL is unavailable - sleeping"
#   sleep 1
# done

# >&2 echo "MySQL is up - executing command"
