package com.example.les4;

public class HemellichaamMain {
    public static void main(String[] args) {
        Hemellichaam hl1 = new Hemellichaam("Mercurius", "planeet");
        // Opgave 8 c
        Hemellichaam hl2 = new Hemellichaam("PSO J318.5-22");
//        System.out.println("naam: " + hl1.getNaam());
//        System.out.println("type: " + hl1.getType());
        System.out.println(hl1);
        System.out.println(hl2);

        Hemellichaam hl3 = new Hemellichaam("Pluto", "planeet");
        System.out.println(hl3);
        // DIT IS ECHT HEEL SNEU !!!
        // Opgave 8 e
        hl3.setType("dwergplaneet");
        System.out.println(hl3);
        // Opgave 8 f
        hl3.setTemperatuur(-35, 63);
        hl3.printTemperatuur();
        // Opgave 8 g
        hl2.setTemperatuur(37);
        hl2.printTemperatuur();
    }
}
