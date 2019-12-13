#include <SoftwareSerial.h>
#include <OneWire.h>                
#include <DallasTemperature.h>
SoftwareSerial s(5,6);

OneWire ourWire(2);                //Se establece el pin 2  como bus OneWire 
DallasTemperature sensors(&ourWire); //Se declara una variable u objeto para nuestro sensor
const byte pHpin = A0;// Connect the sensor's Po output to analogue pin 0.

// Variables:-
float data;
float data2;
void setup() {
  delay(1000);
  Serial.begin(9600);
  s.begin(9600);
  sensors.begin();   //Se inicia el sensor
}
 
void loop() {
 sensors.requestTemperatures();   //Se envía el comando para leer la temperatura
 data2 = sensors.getTempCByIndex(0); //Se obtiene la temperatura en ºC
 data = (1023 - analogRead(pHpin)) / 73.07; // Read and reverse the analogue input value from the pH sensor then scale 0-14.
 Serial.println("*****");
 /*StaticJsonBuffer<1000> jsonBuffer;
 JsonObject& root = jsonBuffer.createObject();
  root["data1"] = 100;
  root["data2"] = 200;*/
  if(s.available()>0)
  {
   //root.printTo(s);
   s.write(data);
   s.write(data2);
   Serial.println("dentro"); 
  }
  //delay(500);
}
