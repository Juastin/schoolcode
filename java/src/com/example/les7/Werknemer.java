package com.example.les7;

public class Werknemer extends Persoon{
    double salaris;

    Werknemer(String naam, int leeftijd, double salaris) {
        super(naam, leeftijd);
        this.salaris = salaris;
    }

    @Override
    public String toString() {
        return super.toString()+" (salaris "+this.salaris+")";
    }

    public void salarisverhoging(double bedrag){
        this.salaris+=bedrag;
    }
}
