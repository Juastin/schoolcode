package com.example.les2;

public class Auto {
   public String merk;
   public String type;
   public int pk;
   public Aanhanger aanhanger = new Aanhanger();

   public String toString() {
       return merk+" "+type+" "+ "("+pk+")"; // hier uiteraard een zinvolle String returnen
   }

}
