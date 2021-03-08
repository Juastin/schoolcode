package com.example.les6;

import java.util.ArrayList;

public class Act {
    private String naam;
    private int tijdsduur;
    private ArrayList<Artiest> artiestsen;

    public Act(String naam, int tijdsduur, Artiest artiest){
        this.artiestsen = new ArrayList<>();
        this.artiestsen.add(artiest);
        this.naam = naam;
        this.tijdsduur = tijdsduur;
    }
    public void voegArtiestToe(Artiest artiest){
        this.artiestsen.add(artiest);
    }
    public void printAct(){
        System.out.println("Act{" +
                "naam='" + naam + '\'' +
                ", tijdsduur=" + tijdsduur +
                ", artiestsen=" + artiestsen +
                '}');
    }
}
