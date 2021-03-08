package com.example.les8;

public class FormeelBericht extends Bericht {

    FormeelBericht(String voornaam, String achternaam, String mv, String tekst) {
        super(voornaam, achternaam, mv, tekst);
    }

    @Override
    public void printBericht() {
        System.out.println("Geachte "+ getMv() == "M" ? "meneer " : "mevrouw " + getAchternaam() + ",");
        System.out.println(getTekst());
        System.out.println("Met vriendelijke groet,");
    }
}
