package com.example.les11.reisaanbod.speciaal;


import com.example.les11.locatie.Bestemming;
import com.example.les11.reisaanbod.Reis;

public class Groepsreis extends Reis {

    private int aantalPersonen;

     public Groepsreis(String naam, Bestemming bestemming, int aantalPersonen) {
        super(naam, bestemming);
        this.aantalPersonen = aantalPersonen;
    }

     public void printOverzicht() {
        System.out.println(naam + "\n - met  " + aantalPersonen + " personen naar " + bestemming);
    }
}
