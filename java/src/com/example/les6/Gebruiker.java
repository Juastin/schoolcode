package com.example.les6;

public class Gebruiker {
    String naam;
    int leeftijd;

    public int getLeeftijd() {
        return leeftijd;
    }
    public String getNaam() {
        return naam;
    }
    public void setNaam(String naam) {
        this.naam = naam;
    }
    public void setLeeftijd(int leeftijd) {
        this.leeftijd = leeftijd;
    }

    Gebruiker(String naam, int leeftijd){
        this.leeftijd = leeftijd;
        this.naam = naam;
    }

    @Override
    public String toString() {
        return "Gebruiker{" +
                "naam='" + naam + '\'' +
                ", leeftijd=" + leeftijd +
                '}';
    }
}
