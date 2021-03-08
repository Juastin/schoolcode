package com.example.les6;

import java.time.LocalDateTime;

public class Bericht {
    Gebruiker afzender;
    String bericht ;
    LocalDateTime datum;

    public LocalDateTime getDatum() {
        return datum;
    }
    public Gebruiker getAfzender() {
        return afzender;
    }
    public String getBericht() {
        return bericht;
    }
    public void setAfzender(Gebruiker afzender) {
        this.afzender = afzender;
    }
    public void setBericht(String bericht) {
        this.bericht = bericht;
    }
    public void setDatum(LocalDateTime datum) {
        this.datum = datum;
    }

    Bericht(Gebruiker afzender, String bericht){
        this.afzender = afzender;
        this.bericht = bericht;
        this.datum = LocalDateTime.now();
    }

    @Override
    public String toString() {
        return afzender +" "+ "("+ datum + "):" + bericht ;
    }
}

