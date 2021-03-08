package com.example.les7;

public class Persoon {

    private String naam;
    private int leeftijd;

    Persoon(String naam, int leeftijd){
        this.naam = naam;
        this.leeftijd = leeftijd;
    }

    @Override
    public String toString() {
        return "Dit is "+naam+", leeftijd "+leeftijd;
    }

    public String getNaam(){
        return naam;
    }
    public int getLeeftijd(){
        return leeftijd;
    }
    public void jarig(){
        this.leeftijd++;
    }

}
