package com.example.les4;

import java.time.LocalDate;
import java.time.format.DateTimeFormatter;

public class Weerbericht {
    private double temperatuur;
    private int windkracht;
    private String windrichting;
    private boolean bewolking;
    private boolean neerslag;
    private boolean zon;
    private LocalDate datum;
    private DateTimeFormatter datumFormat;


    // Constructor
    public Weerbericht (double temperatuur, int windkracht, String windrichting, boolean bewolking, boolean neerslag, boolean zon){
        setTemperatuur(temperatuur);
        setWindkracht(windkracht);
        setWindrichting(windrichting);
        setBewolking(bewolking);
        setNeerslag(neerslag);
        setZon(zon);
        datum = LocalDate.now(); // vandaag
        datumFormat = DateTimeFormatter.ofPattern("eeee"); // alleen de dag
    }
    // Opgave 9 d
    public Weerbericht (double temperatuur, int windkracht, String windrichting){
        this(temperatuur, windkracht, windrichting, false, false, true);
        datum = LocalDate.now(); // vandaag
        datumFormat = DateTimeFormatter.ofPattern("eeee"); // alleen de dag

    }

    // ToString Opgave 9 b
    @Override
    public String toString() {
        return "Weerbericht "+getDagVanDeWeek()+" - tempratuur: "+this.temperatuur+" wind: "+this.windkracht+" "+this.windrichting+(this.neerslag ? ", neerslag" : "")+(this.bewolking ? ", bewolking" : "")+(this.zon ? ", zon" : "");
    }

    public void setBewolking(boolean bewolking) {
        this.bewolking = bewolking;
    }
    public void setNeerslag(boolean neerslag) {
        this.neerslag = neerslag;
        if (neerslag == true){this.bewolking = true;}
    }
    public void setTemperatuur(double temperatuur) {
        this.temperatuur = temperatuur;
    }
    public void setWindkracht(int windkracht) {
        this.windkracht = windkracht;
    }
    public void setWindrichting(String windrichting) {
        this.windrichting = windrichting;
    }
    public void setZon(boolean zon) {
        this.zon = zon;
        if (zon == true){this.neerslag = false;}
    }
    public double getTemperatuur() {
        return temperatuur;
    }
    public int getWindkracht() {
        return windkracht;
    }
    public String getWindrichting() {
        return windrichting;
    }
    // Les 5 Opgave 3 a
    public String getDagVanDeWeek() {
        return this.datum.format(this.datumFormat);
    }
    // les 5 Opgave 3 b
    public void verhoogDag() {
        this.datum = datum.plusDays(1);
    }
    public void verhoogDag(int dagen) {
        this.datum = datum.plusDays(dagen);
    }

}
