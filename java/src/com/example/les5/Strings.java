package com.example.les5;

import java.util.Scanner;

public class Strings
{
    public static void main(String[] args) {
        String teVergelijkenMet = "Java";

        Scanner in = new Scanner(System.in);
        System.out.println(
                "input (te vergelijken met: \"" + teVergelijkenMet + "\" :");

        String gebruikerInput = in.nextLine();
        System.out.println("je input was: \"" + gebruikerInput + "\"");

        String tekst1 = "Java";
        String tekstTwee = "Java";

        if (tekst1 == gebruikerInput) {
            System.out.println("Ze zijn gelijk");
        } else {
            System.out.println("Ze zijn niet gelijk");
        }

    }
}