#!/bin/bash

# Load environment variables from a .env file if it exists
if [ -f .env ]; then
  export $(cat .env | xargs)
fi

# Check if required environment variables are set
if [ -z "$DB_USER" ] || [ -z "$DB_PASSWORD" ] || [ -z "$DB_NAME" ]; then
  echo "One or more required environment variables are not set."
  echo "Please set DB_USER, DB_PASSWORD, and DB_NAME."
  exit 1
fi
 

# Check if the correct number of arguments is provided
if [ "$#" -ne 1 ]; then
  echo "Usage: $0 <action>"
  echo "Actions:"
  echo "1 - Execute SQL script from $SQL_FILE_ACTION_1"
  echo "2 - Another action (e.g., backup database) using $SQL_FACILITY_CODES"
  echo "3 - Another action (e.g., restore database) using $SQL_FILE_ACTION_3"
  exit 1
fi

ACTION=$1

case $ACTION in
  1)
    # Execute the SQL file for action 1
    if [ ! -f "$SQL_FILE_ACTION_1" ]; then
      echo "SQL file for action 1 does not exist: $SQL_FILE_ACTION_1"
      exit 1
    fi
    mysql -u "$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < "$SQL_FILE_ACTION_1"
    echo "SQL script executed successfully for action 1."
    ;;
  2)
    # Perform action 2 with the provided SQL file
    if [ ! -f "$SQL_FACILITY_CODES" ]; then
      echo "SQL file for action 2 does not exist: $SQL_FACILITY_CODES"
      exit 1
    fi
     mysql -u "$DB_USER" -p"$DB_PASSWORD" "$DB_NAME" < "$SQL_FACILITY_CODES"
    echo "Performing action 2 with SQL file $SQL_FACILITY_CODES."
    # Add your logic for action 2 using the SQL file
    ;;
  3)
    # Perform action 3 with the provided SQL file
    if [ ! -f "$SQL_FILE_ACTION_3" ]; then
      echo "SQL file for action 3 does not exist: $SQL_FILE_ACTION_3"
      exit 1
    fi
    echo "Performing action 3 with SQL file $SQL_FILE_ACTION_3."
    # Add your logic for action 3 using the SQL file
    ;;
  *)
    echo "Invalid action: $ACTION"
    echo "Valid actions are: 1, 2, 3."
    exit 1
    ;;
esac
