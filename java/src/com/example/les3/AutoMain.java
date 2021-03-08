package com.example.les3;

import com.example.les4.Fabriek;

public class AutoMain {
    public static void main(String[] args) {

        Auto auto1 = new Auto("Skoda", "Fabia", 60);
//        System.out.println(auto1);
//        auto1.setMerk("Skoda");
//        auto1.setType("Fabia");
//        auto1.setPk(60);
        System.out.println(auto1);

        int maxOpvoerPks = auto1.berekenOpvoerMogelijkheid();

        Auto auto2 = new Auto("Tesla", "S", 400);
//        auto2.setMerk("Tesla");
//        auto2.setType("S");
//        auto2.setPk(400);
        System.out.println(auto2);

        Auto auto3 = new Fabriek().maakAuto();
        System.out.println(auto3);

        Auto auto4 = new Fabriek().maakAuto("Mercedes", "EQC", 400);
        System.out.println(auto4);

        Auto auto5 = new Fabriek().maakAuto("Ferrari", "P80/C", 592);
        System.out.println(auto5);

        // Opgave 3
        if (auto1.getPk() < auto2.getPk()){
            int verschil = auto2.getPk()-auto1.getPk();
            System.out.println("de "+ auto2.getMerk() +" heeft meer vermogen dan de"+ auto1.getMerk() +", het verschil is "+ verschil);
        }

        // Opgave 4
        auto1.voerOp(40);

        // Opgave 8
        //auto1.gewoonSnellerZijn(auto2, 40);
        System.out.println(auto1);
        System.out.println(auto2);

        // Opgave 5
        auto1.vergelijkPk(auto2);

        System.out.println("aantal: " + Fabriek.totaalAantalGemaakteAutos);  // 0
        Fabriek fabriek = new Fabriek();
        Auto a = fabriek.maakAuto();
        Auto bb = fabriek.maakAuto();
        System.out.println("aantal: " + Fabriek.totaalAantalGemaakteAutos);  // 2
        Fabriek fabriekTwee = new Fabriek();
        Auto ccc = fabriekTwee.maakAuto();
        Auto dddd = fabriekTwee.maakAuto();
        Auto eeeee = fabriek.maakAuto();
        System.out.println(a.getVinNumber());
        System.out.println(bb.getVinNumber());
        System.out.println(a.getVinNumber());
        System.out.println("Totaal aantal gemaakte autos: " + Fabriek.totaalAantalGemaakteAutos);  // 5
        // Les 5 Opgave 5 c
        Fabriek.printGemaakteAutos();
        a.registreerProductieFout();
        a.registreerProductieFout(); // Foutief
        bb.registreerProductieFout();
        System.out.println("Productiefouten door fabriek "+fabriek.getNaam()+": "+fabriek.aantalProductiefouten);
        System.out.println("Totaal productiefouten: "+Fabriek.totaalAantalProductieFouten);
        fabriek.printAutosZonderProductiefouten();


    }
}
