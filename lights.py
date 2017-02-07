#!/usr/bin/python
import sys
import time
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
args = sys.argv
pin = 17 # GPIO PIN 17
ctl = args[1] #Argument 1 for ON/OFF
if (int(ctl) == 1):
	print("buzzzzz")
	GPIO.setup(pin, GPIO.OUT)
	GPIO.output(pin, GPIO.HIGH)
	time.sleep(5)
	GPIO.output(pin, GPIO.LOW)
	time.sleep(3)	
	GPIO.output(pin, GPIO.HIGH)
	time.sleep(3)
	GPIO.output(pin, GPIO.LOW)

