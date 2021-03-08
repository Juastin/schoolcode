package com.example.les10;

public abstract class Persoon {
    private Postcode postcode;
    protected int huisnummer;
    protected String toevoeging;

    public abstract String getNaam();
    public abstract String getGeachte();

    public String getAdres() {
        return postcode.getWoonplaats()+" "+postcode.getStraatnaam()+" "+toevoeging;
    }

    public void setPostcode(Postcode postcode) {
        this.postcode = postcode;
    }
}
