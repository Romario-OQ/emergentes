#include <SoftwareSerial.h>
#include <ESP8266WiFi.h>
SoftwareSerial s(D6, D5);
//SoftwareSerial t(D3, D4);

const char* ssid     = "ULASALLE-Docentes";
const char* password = "lasalledocentes";
const char* host = "192.168.60.53";

//const char* ssid     = "ROMARIO TRIBAL";
//const char* password = "07ItachiNaruto13";
//const char* host = "192.168.0.10";

//const char* ssid     = "VPR";
//const char* password = "veproser2018";
//const char* host = "192.168.0.100";


float data;
float data2;
void setup() {
  // Initialize Serial port
  Serial.begin(9600);
  s.begin(9600);
  //t.begin(9600);
  //while (!Serial) continue;

  Serial.print("Connecting to ");
  Serial.println(ssid);

  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void loop() {

  Serial.println("########");
  s.write("s");
  if (s.available() > 0)
  {
    data = s.read();
    data2 = s.read();
    Serial.println(data);
    Serial.println(data2);
    delay(1000);
  }

  Serial.print("connecting to ");
  Serial.println(host);

  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  const int httpPort = 80;
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    return;

  }
  
  String url = "/Emergentes/salvar.php?";
  url += "sensor_ph=";
  url += data;
  url +="&sensor_temp=";
  url += data2;

  Serial.print("Requesting URL: ");
  Serial.println(url);

  // This will send the request to the server
  client.print(String("GET ") + url + " HTTP/1.1\r\n" +
               "Host: " + host + "\r\n" +
               "Connection: close\r\n\r\n");

  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 500) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      return;
    }
  }

  // Read all the lines of the reply from server and print them to Serial
  while (client.available()) {
    String line = client.readStringUntil('\r');
    Serial.print(line);
  }

  Serial.println();
  Serial.println("closing connection");
  delay(1000);
}
