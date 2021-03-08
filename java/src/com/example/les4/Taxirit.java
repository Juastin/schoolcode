package com.example.les4;

public class Taxirit {
    private double prijsPerKm;
    private int aantalPers;
    private int maxAantal;
    private double afstand;
    private double bedragPerPersoon = 2.5;
    private static int aantalRitten = 0;

    // Opgave 10 a
    public Taxirit(double afstand, int aantalPers, int maxAantal, double bedragPerPersoon){
        this.afstand = afstand;
        this.aantalPers = aantalPers;
        this.maxAantal = maxAantal;
        this.bedragPerPersoon = bedragPerPersoon;
        Taxirit.aantalRitten++;
    }
    public Taxirit(double afstand){
        this.afstand = afstand;
        Taxirit.aantalRitten++;
    }
    // Opgave 10 c
    public void voegPersoonToe(int extraPers){
        if (this.aantalPers >= this.maxAantal && this.aantalPers + extraPers > maxAantal){
            System.out.println("Zoveel mensen passen niet in de taxi.");;
        }
        else {
            this.aantalPers += extraPers;
        }
    }
    // Opgave 10 b
    public double berekenPrijsPerPersoon(){
        if (aantalPers == maxAantal){
            this.prijsPerKm *= 0.9;
        }
        this.bedragPerPersoon = (this.prijsPerKm * this.afstand) / this.aantalPers;
        if (!isGroterKleinerDantweevijftig(this.bedragPerPersoon)){
            return this.bedragPerPersoon = 2.5;
        }
        return this.bedragPerPersoon;
    }
    // Opgave 10 d
    public double berekenPrijsPerPersoon(int korting){
        if (aantalPers == maxAantal){
            this.prijsPerKm = this.prijsPerKm / 100 * (100 - korting);
        }
        this.bedragPerPersoon = (this.prijsPerKm * this.afstand) / this.aantalPers;
        if (!isGroterKleinerDantweevijftig(this.bedragPerPersoon)){
            return this.bedragPerPersoon = 2.5;
        }
        return this.bedragPerPersoon;
    }
    public boolean isGroterKleinerDantweevijftig(double prijs){
        if (prijs >= 2.5) {
            return true;
        }
        return false;
    }

    public static int getTotaalAantalRitten() {
        return aantalRitten;
    }
}
