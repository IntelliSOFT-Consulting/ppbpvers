#!/bin/sh

# Database connection details
DB_USER="root"
DB_PASSWORD="hatua."
DB_NAME="pvers"

# List of prefixes
PREFIXES=("Admin" "Manager" "Reporter")

# Get list of tables from the database
TABLES=$(mysql -u "$DB_USER" -p"$DB_PASSWORD" -e 'SHOW TABLES;' "$DB_NAME" | tail -n +2)

# Loop through each prefix
for PREFIX in "${PREFIXES[@]}"
do
  # Loop through each table and run the bake controller command
  for TABLE in $TABLES
  do
    echo "Baking controller for table: $TABLE with prefix: $PREFIX"
    yes | bin/cake bake controller "$TABLE" --prefix "$PREFIX"
  done
done
