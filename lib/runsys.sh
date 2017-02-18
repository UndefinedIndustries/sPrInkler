#!/bin/bash
echo 'running the sprinkler script...'
while [ true ]; do
systime=$(date +%H%M)
runsys=$(cat /var/www/html/lib/sys.dat)
#change that dir ^ to needed.
sysday=$(cat "/var/www/html/lib/day$(date +%u).dat")
if [ "$runsys" == "1" ]; then
  if [ "$sysday" == "1" ]; then
    if [ "$systime" == "2330" ]; then
      /var/www/html/lib/sys.py &
    else
      echo ''
    fi
  else
    echo ''
  fi
else
  echo ''
fi
sleep 60
done
