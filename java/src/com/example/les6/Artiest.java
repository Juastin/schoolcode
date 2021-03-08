package com.example.les6;

public class Artiest {
    private String naam;

    Artiest(String naam){
        this.naam = naam;
    }

    @Override
    public String toString() {
        return "Artiest{" +
                "naam='" + naam + '\'' +
                '}';
    }

}
