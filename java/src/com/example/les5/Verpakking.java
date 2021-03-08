package com.example.les5;

import java.util.Objects;

public class Verpakking {
    private int lengte;
    private int breedte;
    private int hoogte;
    private boolean vloeistof;

    public Verpakking(int lengte, int breedte, int hoogte, boolean vloeistof){

    }
    // Opgave 5 b
    public boolean equals(Verpakking verpakking) {
        if(vloeistof){
           int inhoud = (verpakking.lengte * verpakking.breedte * verpakking.hoogte);
           int inhoud2 = (this.lengte * this.breedte * this.hoogte);
           if (inhoud == inhoud2) {
               return true;
           }
        }
        if (!vloeistof){
            if (verpakking.lengte == this.lengte && verpakking.breedte == this.breedte && verpakking.hoogte == this.hoogte) {
                return true;
            }
//            if () {
//                return true;
//            }
        }
        return false;
    }
}
