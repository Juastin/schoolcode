package com.example.les2;

public class Opgave7 {
    public static void main(String[] args) {
        Auto mijnAuto = new Auto();
        mijnAuto.merk = "Tesla";
        mijnAuto.type = "S";
        mijnAuto.pk = 400;

        Auto jouwAuto = new Auto();
        jouwAuto.merk = "Lelijk eentje";
        jouwAuto.type = "waardeloos";
        jouwAuto.pk = 42;


        Auto onzeAuto;

        if ( false )
        {
            onzeAuto = mijnAuto;
            onzeAuto.pk = mijnAuto.pk + jouwAuto.pk;
            onzeAuto.merk = "Volkswagen";
            onzeAuto.type = mijnAuto.type + " & " + jouwAuto.type;
        }
        else
        {
            onzeAuto = new Auto();
        }

        Auto dezeAuto = mijnAuto;

        dezeAuto.merk +=  " (geweldig)";
        dezeAuto.pk += 100;

        System.out.println();
        System.out.println("==== mijn auto ====");
        System.out.println(" - merk = " + dezeAuto.merk);
        System.out.println(" - type = " + dezeAuto.type);
        System.out.println(" - pk = " + dezeAuto.pk);

        dezeAuto = jouwAuto;   // wat gebeurt hier?

        dezeAuto.merk +=  " (waardeloos)";
        dezeAuto.pk -= 10;

        System.out.println();
        System.out.println("++++ jouw auto ++++");
        System.out.println(" - merk = " + dezeAuto.merk);
        System.out.println(" - type = " + dezeAuto.type);
        System.out.println(" - pk = " + dezeAuto.pk);

        dezeAuto = onzeAuto;

        System.out.println();
        System.out.println("+=+= onze auto +=+=");
        System.out.println(" - merk = " + dezeAuto.merk);
        System.out.println(" - type = " + dezeAuto.type);
        System.out.println(" - pk = " + dezeAuto.pk);

    }
}
