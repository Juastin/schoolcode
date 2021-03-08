package com.example.les7;

public class Klant extends Persoon {
    double budget;

    Klant(String naam, int leeftijd) {
        super(naam, leeftijd);
    }

    @Override
    public String toString() {
        return super.toString()+" (budget "+this.budget+")";
    }

    public void verhoogBudget(double bedrag)  {
        this.budget+=bedrag;
    }
}
