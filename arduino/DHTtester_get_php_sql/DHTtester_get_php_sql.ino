// Example testing sketch for various DHT humidity/temperature sensors
// Written by ladyada, public domain

//#include "DHT.h"
#include <Ethernet.h>
#include <SPI.h>
 
#define DHTTYPE DHT22   // DHT 22  (AM2302)


byte mac[] = { 0x90, 0xA2, 0xDA, 0x0F, 0x2A, 0x8D };
byte ip[] = { 10, 220, 216, 49};
byte gw[] = {10,220,216,1};
byte subnet[] = { 255, 255, 255, 0 };

EthernetClient client;//(server, 80);

byte server[] = { 138, 68, 150, 56  }; // Server IP
float h =0.0;
float t =0.0;
int mq7_analogPin = A0;
int mq3_analogPin = A1;


void setup() {
  Serial.begin(9600);
  Ethernet.begin(mac, ip, gw, gw, subnet);
  delay(1000);
  //dht.begin();
}

void loop() {
    
  int mq7_value = analogRead(mq7_analogPin);
  int mq3_value = analogRead(mq3_analogPin);
  delay(5000);
  if (isnan(t) || isnan(h)) {
    Serial.println("Failed to read from DHT");
  } else {
    senddata(mq7_value, mq3_value);
  }

  Serial.print("Humidity: ");
  Serial.print(h);
  Serial.print(" %\t");
  Serial.print("Temperature: ");
  Serial.print(t);
  Serial.print(" *C "); 

  
}
void senddata(int mq7_value, int mq3_value)
{ 

Serial.println();
Serial.println("GET REQUEST");
delay(3000);                                    //Keeps the connection from freezing

if (client.connect(server, 80)) {
Serial.println("Connected");
client.print("GET /Verkefni6/public/index.php?data=");
client.print(h);
client.print("&data2=");  
client.print(t);
client.print("&data3=");
client.print(mq7_value );
client.println(" HTTP/1.1");
client.println("Host: 10.220.216.49");
client.println("Connection: close");
client.println();
Serial.println();
while(client.connected()) {
  while(client.available()) {
    Serial.write(client.read());
    }
   }
}

else
{
Serial.println("Connection unsuccesful");
}
//}
 //stop client
 client.stop();
 while(client.status() != 0)
{
  delay(5);
}
}
