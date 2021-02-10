package com.example.les2;

public class Opgave8 {
    public static void main(String[] args) {
        Auto mijnAuto = new Auto();
        mijnAuto.merk = "Tesla";
        mijnAuto.type = "S";
        mijnAuto.pk = 400;
        Auto jouwAuto = new Auto();
        mijnAuto.merk = "Bmw";
        mijnAuto.type = "5 serie";
        mijnAuto.pk = 190;

        Aanhanger eenAanhanger = new Aanhanger();
        eenAanhanger.lengte = 3;
        eenAanhanger.aantalWielen = 4;
        mijnAuto.aanhanger = eenAanhanger;
        jouwAuto.aanhanger = eenAanhanger;

        System.out.println("aanhanger lengte = " + mijnAuto.aanhanger.lengte);
        System.out.println("aanhanger lengte = " + jouwAuto.aanhanger.lengte);

    }
}
