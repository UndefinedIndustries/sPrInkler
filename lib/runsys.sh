#!/bin/bash
echo 'running the script...'
while [ true ]; do
test=$(date +%H%M)
if [ $test == "2204" ]; then
  /var/www/html/lib/sys.py &
else
  echo 'test'
fi
sleep 60
done
