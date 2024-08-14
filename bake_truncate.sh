#!/bin/bash

if [ -f .env ]; then
  export $(cat .env | xargs)
fi


# Get the list of tables
TABLES=$(mysql -u"$DB_USER" -p"$DB_PASSWORD" -D"$DB_NAME" -Bse "SHOW TABLES")

# Loop through tables and generate TRUNCATE statements
for TABLE in $TABLES; do
    echo "TRUNCATE TABLE \`$TABLE\`;" >> truncate_tables.sql
done

# Print message indicating that the SQL file has been generated
echo "SQL script 'truncate_tables.sql' has been generated."

# Optionally, execute the script
mysql -u"$DB_USER" -p"$DB_PASSWORD" -D"$DB_NAME" < truncate_tables.sql

# Step 4: Export the database to a file
echo "Exporting database to '$EXPORT_FILE'..."

mysqldump -u"$DB_USER" -p"$DB_PASSWORD"   "$DB_NAME" > "$EXPORT_FILE"

# Print message indicating that the export is complete
echo "Database export completed. The dump file is '$EXPORT_FILE'."
