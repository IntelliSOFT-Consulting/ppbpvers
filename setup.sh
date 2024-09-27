#!/bin/bash

# Set the MySQL credentials
DB_HOST="localhost"
DB_USER="root"
DB_PASSWORD="hatua."
DB_NAME="pvers"
SQL_DIR="localdb" # Directory containing the .sql files

# Check if the database exists
DB_EXISTS=$(mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWORD -e "SHOW DATABASES LIKE '$DB_NAME';" | grep "$DB_NAME" > /dev/null; echo "$?")

# If the database doesn't exist, create it
if [ $DB_EXISTS -ne 0 ]; then
  echo "Database $DB_NAME does not exist. Creating..."
  mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWORD -e "CREATE DATABASE $DB_NAME;"
  echo "Database $DB_NAME created."
else
  echo "Database $DB_NAME already exists."
fi

# Loop through each .sql file in the specified directory
for SQL_FILE in "$SQL_DIR"/*.sql; do
  if [ -f "$SQL_FILE" ]; then
    echo "Importing $SQL_FILE into $DB_NAME..."
    mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWORD $DB_NAME < "$SQL_FILE"
    echo "$SQL_FILE imported successfully."
  else
    echo "No .sql files found in $SQL_DIR."
  fi
done
