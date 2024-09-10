echo "Assiging permissions to users..."
bin/cake acl_extras aco_sync
bin/cake cache clear_all
echo "*************** Assign Admin Permissions  *******************"
#Admin permissions
bin/cake acl grant Roles.1 controllers
bin/cake acl grant Roles.1 controllers/Admin
bin/cake acl deny Roles.1 controllers/Manager


echo "*************** Assign Manager Permissions ********************"
#Manager permissions 
bin/cake acl deny Roles.2 controllers 
bin/cake acl grant Roles.2 controllers/Manager
bin/cake acl grant Roles.2 controllers/Users 

echo "*************** Assign Users Permissions ***********************"
bin/cake acl grant Roles.3 controllers/Reporter  
bin/cake acl grant Roles.3 controllers/Users 

echo "Working on file permissions"

sudo chmod -R 777 .

echo "Completed....."