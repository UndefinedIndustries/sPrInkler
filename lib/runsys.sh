#!/bin/bash
echo 'running the script...'
while [ true ]; do
test=$(date +%H%M)
test1=$(cat /var/www/html/lib/sys.dat)
#change that dir ^ to needed.
if [ $test1 == "1" ]; then
  if [ $test == "2330" ]; then
    /var/www/html/lib/sys.py &
  else
    echo 'test'
  fi
else
  echo 'No'
fi
sleep 60
done
