package com.example.les6;

public class Circus {
    private String naam;
    private Artiest[] artiesten;
    private int max;


    public Circus(int max){
        this.naam = "Kaasland";

        this.artiesten = new Artiest[max];
        this.artiesten[0] = new Artiest("bassie");
        this.artiesten[1] = new Artiest("Klaas");
        this.artiesten[2] = new Artiest("monke");
        this.max = max;
    }
    public void setArtiest(int positie, Artiest artiest){
        positie--;
        if (positie <= this.max && positie >= 0){
            this.artiesten[positie] = artiest;
        }
    }
    public void printArtiesten(){
        System.out.println("Circus "+this.naam+" heeft de volgende artiesten:");
        for(Artiest artiest: artiesten){
            System.out.println("* artiest: "+artiest);
        }
    }
}
