package com.example.les4;

public class WeerberichtMain {
    public static void main(String[] args) {
        // Opgave 9 a
        Weerbericht weerbericht = new Weerbericht(5.7, 7, "NO");
//        System.out.println(weerbericht.getTemperatuur());
//        System.out.println(weerbericht.getWindkracht());
//        System.out.println(weerbericht.getWindrichting());


//        System.out.println(weerbericht);
//        weerbericht.setBewolking(true);
//        System.out.println(weerbericht);
//        weerbericht.setNeerslag(true);
//        System.out.println(weerbericht);

        // Opgave 9 c
//        Weerbericht weerbericht1 = new Weerbericht(12.3, 2, "SE", true, false, true);

        // Opgave 3 b
        System.out.println(weerbericht);
            weerbericht.verhoogDag();
        System.out.println(weerbericht);
            weerbericht.verhoogDag(2);
        System.out.println(weerbericht);

    }
}
