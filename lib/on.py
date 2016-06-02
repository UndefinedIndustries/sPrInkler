#!/usr/bin/python
import sys
import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
i = int(sys.argv[1])
GPIO.setup(i, GPIO.OUT)
GPIO.output(i, False)
