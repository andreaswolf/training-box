# TYPO3 Development box

## Quickstart
   
You need to have the following software installed:

* Vagrant >= 1.9.0
* Virtualbox >= 5.0


First of all, open `Vagrantfile` and change the ID to your current user. To get that ID, run `id -u` (on Mac OS X and Linux).

Afterwards, run `vagrant up` to in this directory to get a working machine. This will create a new Virtualbox VM based on a customized Ubuntu 16.04 image, install Ansible and then provision the machine.

If you change any configuration after the initial setup has run, re-provision the machine using `vagrant provision`.
