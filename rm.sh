#!/bin/bash

# List all Docker containers
echo "Listing all Docker containers..."
docker ps -a

# Stop all Docker containers
echo "Stopping all Docker containers..."
docker stop $(docker ps -aq)

# Remove all Docker containers
echo "Removing all Docker containers..."
docker rm $(docker ps -aq)

# List all Docker images
echo "Listing all Docker images..."
docker images -a

# Remove all Docker images
echo "Removing all Docker images..."
docker rmi -f $(docker images -aq)

# List all Docker volumes
echo "Listing all Docker volumes..."
docker volume ls

# Remove all Docker volumes
echo "Removing all Docker volumes..."
docker volume rm $(docker volume ls -q)

# Final list of Docker containers, images, and volumes
echo "Final list of Docker containers..."
docker ps -a
echo "Final list of Docker images..."
docker images -a
echo "Final list of Docker volumes..."
docker volume ls
