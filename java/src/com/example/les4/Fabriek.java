package com.example.les4;

import com.example.les3.Auto;

public class Fabriek {

    private int aantalGemaakteAutos;
    public static int totaalAantalGemaakteAutos;
    public int aantalProductiefouten;
    public static int totaalAantalProductieFouten;
    private String naam = "Stuttgart";

    public String getNaam() {
        return naam;
    }

    public Auto maakAuto(){
        Auto auto = new Auto("Tesla", "model3", 360, this);
        this.aantalGemaakteAutos++;
        Fabriek.totaalAantalGemaakteAutos++;
        return auto;
    }
    public Auto maakAuto(String merk, String type, int pk){
        Auto auto = new Auto(merk, type, pk, this);
        this.aantalGemaakteAutos++;
        Fabriek.totaalAantalGemaakteAutos++;
        return auto;
    }
    // Opgave 1 c
    public static void printGemaakteAutos(){
        System.out.println("aantal: " + Fabriek.totaalAantalGemaakteAutos);
    }

    public int getAantalProductiefouten() {
        return aantalProductiefouten;
    }

    public static int getTotaalAantalProductieFouten() {
        return totaalAantalProductieFouten;
    }
    public void printAutosZonderProductiefouten(){
        System.out.println("Totaal aantal autos zonder productiefouten: "+(totaalAantalGemaakteAutos - totaalAantalProductieFouten));
    }
}
