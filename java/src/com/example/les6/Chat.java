package com.example.les6;

import java.util.ArrayList;

public class Chat {
    String naam;
    ArrayList berichten = new ArrayList<Bericht>();

    Chat(String naam){
        this.naam = naam;
    }

    public void voegToe(Bericht bericht){
        this.berichten.add(bericht);
    }

}
