const int gasInn = 10;
const int gasOut = A3;
const int AholInn = 11;
const int AholOut = A2;
  
void setup() {
pinMode(9, OUTPUT);
pinMode(gasInn, INPUT);
pinMode(gasOut, INPUT);
Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
  int sensorReading = digitalRead(gasInn);
  int gasAnalogReading = analogRead(gasOut);
  int AholReading = digitalRead(AholInn);
  int AholanalogReading = analogRead(AholOut);
  Serial.println("co2");
  Serial.println(sensorReading);
  delay(1000);
  Serial.println(gasAnalogReading);
  delay(1000);
  Serial.println("Alcohol");
  Serial.println(AholReading);
  delay(1000);
  Serial.println(AholanalogReading);
  delay(1000);


}
