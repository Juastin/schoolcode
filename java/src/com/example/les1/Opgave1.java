package com.example.les1;

public class Opgave1 {
    public static void main(String[] args) {
        System.out.println("Hello kaas");

        String p = "42";
        int y = 42;
        String z = "42";

        int x = 42;
        System.out.println(x);
        // nog meer ...

        if (x == 42) {
            System.out.println("x is 42");
            int yy = x + 1;
            System.out.println("het getal erna is: " + yy);

            if (yy == 43) {
                String zzz = "het getal erna is inderdaad " + yy;
                System.out.println(zzz);
            }
            x++;
        }
        else
        {
            System.out.println("huh? x is geen 42 !");
            int yy = x + 1;
            System.out.println("het getal erna is: " + yy);
        }
    }
}