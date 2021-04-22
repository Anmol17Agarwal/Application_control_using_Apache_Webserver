# Application_control_using_Apache_Webserver

Install Apache web server in Raspberry Pi to control the LED from a webpage that can be accessed from anywhere over the internet.Here we control an LED, connected to Raspberry Pi by using Apache web server. For this we create an html/php web page which has two buttons - one for turning on the LED and second for turning off the LED.It can be futher modified into Home Automation by adding additional appliances to it.

### What is Webserver?

A web server is software and hardware that uses HTTP (Hypertext Transfer Protocol) and other protocols to respond to client requests made over the World Wide Web. The main job of a web server is to display website content through storing, processing and delivering webpages to users.

![alt text](https://github.com/Anmol17Agarwal/Application_control_using_Apache_Webserver/blob/main/webserver.png)

### Components Required

- Raspberry pi board (With Raspbian operating system)
- LED
- 250 ohm resistor
- Jumper Wires

### Connection
 
The connections in this project are quite simple - positive pin of LED is connected to GPIO 21 pin and the negative to a 270 ohm resistor, the other side of which is connected to GND pin.

![alt text](https://github.com/Anmol17Agarwal/Application_control_using_Apache_Webserver/blob/main/Circuit-Diagram.jpg)

### Installing WiringPi Library

WiringPi is a PIN based GPIO access library written in C for the BCM2835, BCM2836 and BCM2837 SoC devices used in all Raspberry Pi versions. It’s released under the GNU LGPLv3 license and is usable from C, C++ and RTB (BASIC) as well as many other languages with suitable wrappers.

Open command prompt and run following command
```
sudo apt-get purge wiringpi
```
```
hash -r
```
- Now obtain WiringPi using git by this command:
```
git clone --branch final_official_2.50 https://github.com/WiringPi/WiringPi.git 
```
-  Then install WiringPi library using:
```
~/wiringpi
```
```
cd ~/wiringPi
```
```
./build
```
### Install Websever

- Install Apache web server using following commands:
```
sudo apt-get install apache2
```
- Now, install the apache2 package by using this command command in terminal:
```
sudo apt-get install php libapache2-mod-php
```

Now, run the following command to run HTML page and Paste gpio.php file inside the directory.
```
Sudo chown pi: /var/www/html
```

- To check server is working or not, search ip address of your raspberry pi.
- By default, Apache puts a test HTML file in the web folder. This default web page is served when you browse to http://192.168.1.19 (whatever the Pi's IP address is) from another computer on the network.


![alt text](https://github.com/Anmol17Agarwal/Application_control_using_Apache_Webserver/blob/main/Webserver.png)

If this webpage opens which means server is working.
Now run in browser http://192.168.1.19/gpio.php
This page will open

![alt text](https://github.com/Anmol17Agarwal/Application_control_using_Apache_Webserver/blob/main/HTML%20page.png)

PHP code is running in backend, try to have look by opening gpio.php file.
- **It you press Turn On, server will send information to RPi and it will turn LED on and show notification "Turning Light On".**
- **It you press Turn Off, server will send information to RPi and it will turn LED off and show notification "Turning Light Off.**

### TECH News

##### Amazon’s Ring now reportedly partners with more than 2,000 US police and fire departments
All but two US states — Montana and Wyoming— now have police or fire departments participating in Amazon’s Ring network, which lets law enforcement ask users for footage from their Ring security cameras to assist with investigations, the Financial Times reported, Figures from Ring show more than 1,189 departments joined the program in 2020 for a total of 2,014. That’s up sharply from 703 departments in 2019 and just 40 in 2018. The FT reports that local law enforcement departments on the platform asked for Ring videos for a total of more than 22,335 incidents in 2020.

- **“Don’t confuse schooling with education. I didn’t go to Harvard but the people that work for me did ”-Elon Musk**





