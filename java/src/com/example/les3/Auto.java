package com.example.les3;

import com.example.les4.Fabriek;


public class Auto {

    private String merk;
    private String type;
    private int pk;
    private Aanhanger aanhanger = new Aanhanger();
    private boolean opgevoerd;
    private Fabriek fabriek;
    private int vinNumber = 0;
    private static int aantalAutos = 0;
    private boolean productiefout = false;

    // Constructor les 4 opgave 1
    public Auto(String merk, String type, int pk) {
        this.merk = merk;
        this.type = type;
        this.pk = pk;
        // Les 5 Opgave d
        this.vinNumber = aantalAutos;
        Auto.aantalAutos++;
    }
    // Constructor les 4 opgave 5
    public Auto(String merk, String type, int pk, Fabriek fabriek){
        this.merk = merk;
        this.type = type;
        this.pk = pk;
        this.fabriek = fabriek;
        // Les 5 Opgave d
        this.vinNumber = aantalAutos;
        Auto.aantalAutos++;
    }
    public void setMerk(String merk) {
        this.merk = merk;
    }
    public void setType(String type) {
        this.type = type;
    }
    public void setPk(int pk) {
        this.pk = pk;
    }
    public void setAanhanger(Aanhanger aanhanger) {
        this.aanhanger = aanhanger;
    }
    public void setFabriek(Fabriek fabriek) {
        this.fabriek = fabriek;
    }
    public String getMerk() {
        return merk;
    }
    public String getType() {
        return type;
    }
    public int getPk() {
        return pk;
    }
    public Aanhanger getAanhanger() {
        return aanhanger;
    }
    public Fabriek getFabriek() {
        return fabriek;
    }
    public String getFabriekName(){
        return fabriek.getNaam();
    }
    public int getVinNumber() {
        return vinNumber;
    }

    public String toString() {
        if (opgevoerd == false){
            return getMerk()+" "+getType()+", "+(getFabriek() != null ? getFabriekName()+" " : "")+"("+getPk()+", maximaal op te voeren met "+ berekenOpvoerMogelijkheid() +")";
        }
         return getMerk()+" "+getType()+", "+(getFabriek() != null ? getFabriekName()+" " : "")+ "("+getPk()+", is al opgevoerd)";
    }
    // Opgave 4
    public void voerOp(int extraPk) {
        // Opgave 9
        if (opgevoerd == false) {
            System.out.println(merk + " opvoeren met " + extraPk + " pk");
            // Opgave 7
            if (extraPk <= this.berekenOpvoerMogelijkheid()) {
                extraPk += pk;
                setPk(extraPk); // hier worden de pk's aangepast
            } else {
                int teveel = extraPk - this.berekenOpvoerMogelijkheid();
                System.out.println("Zoveel pk extra is onmogelijk, probeer " + teveel + " minder");
            }
            System.out.println("resultaat: " + this.toString());
            opgevoerd = true;
        }
        else {
            System.out.println("Deze auto is al een keer opgevoerd.");
        }
    }
    // Opgave 5
    public void vergelijkPk(Auto auto){
        int verschil = auto.getPk() - this.getPk();
        System.out.println("de "+ auto.getMerk() +" heeft meer vermogen dan de  "+ getMerk() +", het verschil is "+ verschil);
    }
    // Opgave 6
    public int berekenOpvoerMogelijkheid() {
        if (opgevoerd == false){
            int pkMogelijk = this.getPk() - 20;
            return pkMogelijk;
        }
        else {
            return 0;
        }

    }
    // Opgave 8
    public void gewoonSnellerZijn(Auto auto, int extraPk) {
        while (auto.getPk() > getPk()) {
            voerOp(extraPk);
            vergelijkPk(auto);
        }
    }

    public void registreerProductieFout() {
        if (!this.productiefout) {
            this.productiefout = true;
            System.out.println("Auto "+this.getVinNumber()+" heeft een productiefout geregistreerd.");
            this.fabriek.aantalProductiefouten++;
            Fabriek.totaalAantalProductieFouten++;
        }
        else {
            System.out.println("Auto "+this.getVinNumber()+ " heeft al een productiefout geregistreerd.");
        }
    }

}

