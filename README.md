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
