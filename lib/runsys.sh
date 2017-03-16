#!/bin/bash
workdir=/var/www/html/modules/sPrInkler/lib
echo 'running the sprinkler script...'
while [ true ]; do
systime=$(date +%H%M)
runsys=$(cat $workdir/sys.dat)
#change that dir ^ to needed.
sysday=$(cat "$workdir/../data/day$(date +%u).dat")
if [ "$runsys" == "1" ]; then
  if [ "$sysday" == "1" ]; then
    if [ "$systime" == "2330" ]; then
      ./sys.py &
    else
      echo ''
    fi
  else
    echo 'Not a day today'
  fi
else
  echo ''
fi
sleep 60
done
