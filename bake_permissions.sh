echo "Assiging permissions to users..."
bin/cake acl_extras aco_sync
bin/cake cache clear_all

echo "***************Creating AROS  **********"
bin/cake acl create aro Roles.1
bin/cake acl create aro Roles.2
# bin/cake acl create aro Roles.3


echo "**** Define ACOs: ****"
bin/cake acl create aco controllers
bin/cake acl create aco controllers/Admin
bin/cake acl create aco controllers/Manager


echo "*************** Assign Admin Permissions  *******************"
#Admin permissions
bin/cake acl grant Roles.1 controllers
bin/cake acl grant Roles.1 controllers/Admin
bin/cake acl deny Roles.1 controllers/Manager