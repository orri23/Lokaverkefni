#include "DHT.h"
#include <Ethernet.h>
#include <SPI.h>

#define DHTPIN 8
#define DHTTYPE DHT22

DHT dht(DHTPIN, DHTTYPE);

byte mac[] = { 0x90, 0xA2, 0xDA, 0x0F, 0x2A, 0x8D };
byte ip[] = { 10, 220, 216, 49};
byte gw[] = {10,220,216,1};
byte subnet[] = { 255, 255, 255, 0 };
byte server[] = { 138, 68, 150, 56  }; // Server IP

EthernetClient client;//(server, 80);

void setup() {
  Serial.begin(9600);
  
  Ethernet.begin(mac, ip, gw, gw, subnet);

  dht.begin();
}

void loop() {
  // put your main code here, to run repeatedly:

  delay(2000);
  int mq7_analogPin = A0;
  int mq7_value = analogRead(mq7_analogPin);

  int mq3_analogPin = A1;
  int mq3_value = analogRead(mq3_analogPin);
  float h = dht.readHumidity();
  float t = dht.readTemperature();
  float f = dht.readTemperature(true);

  if (isnan(h) || isnan(t) || isnan(f)) {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }
  else {
    senddata(h, t, mq7_analogPin);
  }

  
    // Compute heat index in Fahrenheit (the default)
  float hif = dht.computeHeatIndex(f, h);
  // Compute heat index in Celsius (isFahreheit = false)
  float hic = dht.computeHeatIndex(t, h, false);

  Serial.print("Humidity: ");
  Serial.print(h);
  Serial.print(" %\t");
  Serial.print("Temperature: ");
  Serial.print(t);
  Serial.print(" *C ");
  Serial.print(f);
  Serial.print(" *F\t");
  Serial.print("Heat index: ");
  Serial.print(hic);
  Serial.print(" *C ");
  Serial.print(hif);
  Serial.println(" *F");

  Serial.print(mq7_value);

}

void senddata(float h, float t, int mq7_value)
{
  Serial.println();
  Serial.println("TEST");
  delay(3000);

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

