#!/bin/bash

# Define variables
SERVICE_NAME="cakephp-queue-worker.service"
SERVICE_PATH="/etc/systemd/system/$SERVICE_NAME"
CAKEPHP_PATH="/var/www/html/cake/ppbpvers" # Update this to your CakePHP project path
EXEC_COMMAND="$CAKEPHP_PATH/bin/cake queue run worker"
USER="www-data" # Change this to the user running your web server, e.g., 'nginx' or 'www-data'
GROUP="www-data" # Change this to the group running your web server
WORKING_DIRECTORY="$CAKEPHP_PATH"

# Function to create the service file
create_service_file() {
    echo "Creating systemd service file at $SERVICE_PATH"

    # Create the systemd service file
    sudo tee $SERVICE_PATH > /dev/null <<EOL
[Unit]
Description=CakePHP Queue Worker
After=network.target

[Service]
User=$USER
Group=$GROUP
WorkingDirectory=$WORKING_DIRECTORY
ExecStart=$EXEC_COMMAND
Restart=always
RestartSec=5

# Logging
StandardOutput=syslog
StandardError=syslog
SyslogIdentifier=cakephp-queue-worker

[Install]
WantedBy=multi-user.target
EOL
}

# Check if the service file already exists
if [ -f "$SERVICE_PATH" ]; then
    echo "Service file $SERVICE_NAME already exists."
else
    # Create the service if it doesn't exist
    create_service_file
    echo "Service file created."
fi

# Reload the systemd daemon to pick up the new service
echo "Reloading systemd daemon..."
sudo systemctl daemon-reload

# Enable the service to start on boot
echo "Enabling $SERVICE_NAME to start on boot..."
sudo systemctl enable $SERVICE_NAME

# Start the service
echo "Starting $SERVICE_NAME..."
sudo systemctl start $SERVICE_NAME

# Check the status of the service
echo "Checking service status..."
sudo systemctl status $SERVICE_NAME

echo "Service setup complete."
