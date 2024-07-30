#!/bin/bash

# Load environment variables from a .env file if it exists
if [ -f .env ]; then
  export $(cat .env | xargs)
fi

# Check if required environment variables are set
if [ -z "$DB_USER" ] || [ -z "$DB_PASSWORD" ] || [ -z "$DB_NAME" ] || [ -z "$SQL_FILE" ]; then
  echo "One or more required environment variables are not set."
  echo "Please set DB_USER, DB_PASSWORD, DB_NAME, and SQL_FILE."
  exit 1
fi

# Execute the SQL file
mysql -u "$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < "$SQL_FILE"

echo "SQL script executed successfully."
