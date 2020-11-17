#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#define r D2
#define y D3
#define g D4
const char* wifi_name = "vibe";
const char* wifi_password = "baby@1234";
 
void setup () {
  Serial.begin(115200);
  WiFi.begin(wifi_name, wifi_password);
  pinMode(r,OUTPUT);
  pinMode(g,OUTPUT);
  pinMode(y,OUTPUT);
}
void loop() {
 
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    http.begin("http://ratron.000webhostapp.com/file");
    int httpCode = http.GET();
    
    if(httpCode > 0){
    // start of fetching get process
      String response = "";
      response = http.getString();
      Serial.println(response);

      digitalWrite(r,chec(response[0]));
      digitalWrite(g,chec(response[1]));
      digitalWrite(y,chec(response[2]));
    }
    else
      Serial.println(httpCode);
      
    http.end();
    // end of fetching get process
  }
  else{
    delay(1000);
    Serial.print("Connecting..");
  }
  delay(500);
}

int chec(char v){
    return v=='1'?1:0;
    }
