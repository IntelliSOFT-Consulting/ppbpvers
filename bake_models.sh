#!/bin/sh

# Database connection details
DB_USER="root"
DB_PASSWORD="hatua."
DB_NAME="pvers"

# Get list of tables from the database
TABLES=$(mysql -u "$DB_USER" -p"$DB_PASSWORD" -e 'SHOW TABLES;' "$DB_NAME" | tail -n +2)

# Loop through each table and run the bake model command
for TABLE in $TABLES
do
  echo "Baking model for table: $TABLE"
  yes | bin/cake bake all "$TABLE"
done
