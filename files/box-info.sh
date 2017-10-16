#!/bin/sh

IP=`LANG=C ip address show enp0s8 | grep "inet\b" | awk '{print $2;}' | cut -d/ -f1`

cat<<END

#########################################################################
#
# Box provisioned. You're ready to go now!
#
# Open http://training.a-w.io for further instructions and an overview.
#
# If http://training.a-w.io cannot be opened, check if it points to the
# correct IP address ($IP).
#
#########################################################################

END