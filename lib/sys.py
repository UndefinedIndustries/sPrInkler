#!/usr/bin/python
import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
pin = [13,18,23,17,27,22,10,9,11,19]
for i in pin:
    GPIO.setup(i, GPIO.OUT)
    print i
    GPIO.output(i, False)
    time.sleep(300)
    GPIO.output(i, True)
quit()
