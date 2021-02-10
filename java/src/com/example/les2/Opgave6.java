package com.example.les2;

public class Opgave6 {
    public static void main(String[] args)
    {
        int pkVoorSkoda = 60;

        Auto auto1 = new Auto();
        System.out.println(auto1);
        auto1.merk = "Skoda";
        auto1.type = "Fabia";
        auto1.pk = pkVoorSkoda;


        System.out.println(auto1);
        System.out.println(auto1.merk);
        System.out.println(auto1.type);
        System.out.println(auto1.pk);
        System.out.println("===========");

//        System.out.println(auto2);

        String merkVoorAuto2 = "Tesla";

        Auto auto2 = new Auto();
        System.out.println(auto2); // ++
        auto2.pk = 400;
        auto2.merk = merkVoorAuto2 + " (top auto!)";
        auto2.type = "S";
        
    }

}
