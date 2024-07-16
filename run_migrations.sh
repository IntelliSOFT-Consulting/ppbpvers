#!/bin/bash

# Wait for the database to be ready
echo "Waiting for the database to be ready..."
until mysql -h db -u changeme -pchangeme. -e 'SELECT 1'; do
  >&2 echo "MySQL is unavailable - sleeping"
  sleep 1
done

>&2 echo "MySQL is up - executing command"

# Run CakePHP migrations
cd /var/www/html
bin/cake migrations migrate