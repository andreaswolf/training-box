
# only run this inside the box!
ansible:
	ansible-playbook devbox.yml --limit=localhost --inventory-file=hosts --sudo -vvvv
