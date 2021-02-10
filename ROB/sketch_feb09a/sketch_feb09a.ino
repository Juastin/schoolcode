void setup()
{
  pinMode(2, OUTPUT);
  pinMode(3, OUTPUT);
  pinMode(4, OUTPUT);
  pinMode(5, OUTPUT);
  pinMode(6, OUTPUT);
  pinMode(7, OUTPUT);
  pinMode(8, OUTPUT);  
}


void loop()
{
  int x = random(1, 7);
  dobbel(x);
  delay(1000);
  
}
void dobbel(int dobbel)
{
  if (dobbel == 1)
  {
    digitalWrite(3, HIGH);
    
    digitalWrite(2, LOW);
    digitalWrite(4, LOW);
    digitalWrite(5, LOW);
    digitalWrite(6, LOW);
    digitalWrite(7, LOW);
    digitalWrite(8, LOW);
    
  }
  if (dobbel == 2)
  {
    digitalWrite(5, HIGH);
    digitalWrite(8, HIGH);
    
    digitalWrite(2, LOW);
    digitalWrite(3, LOW);
    digitalWrite(4, LOW);
    digitalWrite(6, LOW);
    digitalWrite(7, LOW);
  }
  if (dobbel == 3)
  {
    digitalWrite(5, HIGH);
    digitalWrite(3, HIGH);
    digitalWrite(8, HIGH);
    
    digitalWrite(2, LOW);
    digitalWrite(4, LOW);
    digitalWrite(6, LOW);
    digitalWrite(7, LOW);
  }
  if (dobbel == 4)
  {
    digitalWrite(5, HIGH);
    digitalWrite(6, HIGH);
    digitalWrite(8, HIGH);
    digitalWrite(2, HIGH);
    
    digitalWrite(3, LOW);
    digitalWrite(4, LOW);
    digitalWrite(7, LOW);
  }
  if (dobbel == 5)
  {
    digitalWrite(5, HIGH);
    digitalWrite(6, HIGH);
    digitalWrite(8, HIGH);
    digitalWrite(2, HIGH);
    digitalWrite(3, HIGH);
    
    digitalWrite(4, LOW);
    digitalWrite(7, LOW);
  }
  if (dobbel == 6)
  {
    digitalWrite(2, HIGH);
    digitalWrite(4, HIGH);
    digitalWrite(5, HIGH);
    digitalWrite(6, HIGH);
    digitalWrite(7, HIGH);
    digitalWrite(8, HIGH);
    
    digitalWrite(3, LOW);
  }
}
