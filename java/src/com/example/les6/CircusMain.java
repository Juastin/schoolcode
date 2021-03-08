package com.example.les6;
import java.util.ArrayList;

public class CircusMain {
    public static void main(String[] args) {
        Circus circus = new Circus(3);
        circus.printArtiesten();

        ArrayList<Artiest> lijst1 = new ArrayList<Artiest>();
        ArrayList<Artiest> andereLijst = new ArrayList<Artiest>();
// hier de lijsten vullen met objecten
        Artiest bassie = new Artiest("Bassie");
        Artiest klaas = new Artiest("Klaas");
        lijst1.add(klaas);
        andereLijst.add(bassie);
// enz...
        if (lijst1.equals(andereLijst)) {
            System.out.println("De lijsten zijn gelijk");
        } else {
            System.out.println("De lijsten zijn verschillend");
        }

    }

}
