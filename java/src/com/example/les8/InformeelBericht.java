package com.example.les8;

public class InformeelBericht extends Bericht{

    InformeelBericht(String voornaam, String achternaam, String mv, String tekst) {
        super(voornaam, achternaam, mv, tekst);
    }

    @Override
    public void printBericht() {
        System.out.println("Hey " + getVoornaam() + ",");
        System.out.println(getTekst());
        System.out.println("Later!");
    }
}
