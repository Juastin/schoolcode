package com.example.les7;

public class Main {
    public static void main(String[] args) {
        Persoon justin = new Student("justin", 20, 1155615);
        Persoon nerise = new Persoon("nerise", 19);
        Persoon hilde = new Persoon("hilde", 26);
        Persoon klaas = new Werknemer("klaas", 21, 1400.75);
        Persoon ashwin = new Werknemer("ashwin", 31, 75.5);

        System.out.println(hilde);
        System.out.println(klaas);
        System.out.println(ashwin);

        ashwin.jarig();
        klaas.jarig();
        System.out.println(ashwin);
        System.out.println(klaas);
        System.out.println(justin);



    }
}
