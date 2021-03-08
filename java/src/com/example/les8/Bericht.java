package com.example.les8;

public abstract class Bericht {
    private String voornaam;
    private String achternaam;
    private String mv;
    private String tekst;


    Bericht(String voornaam, String achternaam, String mv, String tekst){
        this.voornaam = voornaam;
        this.achternaam = achternaam;
        this.mv = mv;
        this.tekst = tekst;
    }
    public String getMv() {
        return mv;
    }
    public String getAchternaam() {
        return achternaam;
    }
    public String getTekst() {
        return tekst;
    }
    public String getVoornaam() {
        return voornaam;
    }

    public abstract void printBericht();

}
