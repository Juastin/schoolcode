package com.example.les7;

public class Student extends Persoon {
    private int studentnr;

    Student(String naam, int leeftijd, int studentnr) {
        super(naam, leeftijd);
        this.studentnr = studentnr;
    }

    public int getStudentnr() {
        return studentnr;
    }
    public void setStudentnr(int studentnr) {
        this.studentnr = studentnr;
    }

    @Override
    public String toString() {
        return super.toString()+" studentennummer: "+this.studentnr;
    }
}
