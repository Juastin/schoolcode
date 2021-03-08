package com.example.les5;

public class Cirkel {

    private double straal;

    public Cirkel(double straal) {
        this.straal = straal;
    }

    public double berekenOmtrek() {
        return 2 * this.straal * Math.PI;
    }
    public double berekenOppervlakte() {
        return Math.PI * Math.pow(straal, 2);
    }
}
