#!/usr/bin/python
import sys
import time
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
args = sys.argv
pin = 23 # GPIO PIN 23
htr = args[1] #Argument 1 for ON/OFF
if (int(htr) == 1):
	print("hotting up")
	GPIO.setup(pin, GPIO.OUT)
	GPIO.output(pin, GPIO.HIGH)
	time.sleep(5)
	GPIO.output(pin, GPIO.LOW)
