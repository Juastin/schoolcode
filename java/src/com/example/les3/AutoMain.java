package com.example.les3;

public class AutoMain {
    public static void main(String[] args) {

        Auto auto1 = new Auto();
//        System.out.println(auto1);
        auto1.setMerk("Skoda");
        auto1.setType("Fabia");
        auto1.setPk(60);
        System.out.println(auto1);

        int maxOpvoerPks = auto1.berekenOpvoerMogelijkheid();

        Auto auto2 = new Auto();
        auto2.setMerk("Tesla");
        auto2.setType("S");
        auto2.setPk(400);
        System.out.println(auto2);
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
    }
}
