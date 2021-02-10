package com.example.les3;

public class Auto {
    private String merk;
    private String type;
    private int pk;
    private Aanhanger aanhanger = new Aanhanger();
    private boolean opgevoerd;

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

    public String toString() {
        if (opgevoerd == false){
            return getMerk()+" "+getType()+" "+ "("+getPk()+", maximaal op te voeren met "+ berekenOpvoerMogelijkheid() +")";
        }
         return getMerk()+" "+getType()+" "+ "("+getPk()+", is al opgevoerd)";
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
}
