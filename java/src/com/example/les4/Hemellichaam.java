package com.example.les4;

public class Hemellichaam {
    private String naam;
    private String type;
    private int tempMin = 0;
    private int tempMax = 0;

    public Hemellichaam (String naam, String type){
        this.naam = naam;
        this.type = type;
    }
    // Opgave 8 c
    public Hemellichaam (String naam){
        this.naam = naam;
        this.type = "onbekend";
    }
    public void printTemperatuur() {
        if (this.tempMin == this.tempMax) {
            System.out.println("De temperatuur is ongeveer "+this.tempMax+" graden");
        }
        else {
            System.out.println("Het is minimaal "+this.tempMin+" graden, en maximaal "+this.tempMax+" graden");
        }
    }
    // opgave 8 b
    public String toString() {
        return getNaam()+" ("+getType()+")";
    }
    public void setNaam(String naam) {
        this.naam = naam;
    }
    // Opgave 8 d
    public void setType(String type) {
        this.type = type;
    }
    public String getNaam() {
        return naam;
    }
    public String getType() {
        return type;
    }
    public void setTemperatuur(int temp) {
        this.tempMax = temp;
        this.tempMin = temp;
    }
    public void setTemperatuur(int tempMin, int tempMax) {
        this.tempMin = tempMin;
        this.tempMax = tempMax;
    }
    public int getTempMin() {
        return tempMin;
    }
    public int getTempMax() {
        return tempMax;
    }
}
