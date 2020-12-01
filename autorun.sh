#!/bin/sh

#install dependencies
sudo apt-get --yes install php

#set permissions
sudo chmod -R +x ./run*

#more dependencies
sudo ./dependencies.php

#and run
#(all relevant output must be in stdout)
./run*
