package com.example.les6;

import java.util.ArrayList;

public class BerichtMain {
    public static void main(String[] args) {

        // Opgave 7 a
        String[] berichten = {"Hoi", "Hallo, Hoe gaat het?", "Goed! Met jou ook?", "Prima, maar ik moet wel weer verder", "Oké tot snel!", "Doei!"};

        int aantal = 0;
        for (int i = 0; i < berichten.length; i++) {
            if (berichten[i] != null)
                aantal++;
        }
        System.out.println("Er zijn: "+aantal+" berichten");

        for (int y = 0; y < berichten.length; y++) {
                System.out.println(berichten[y]);
        }
    }
}
