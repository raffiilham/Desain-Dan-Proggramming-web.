package Jobsheet1;

public class SepedaDemoMain {
    public static void main(String[] args) 
    {
        //Buat dua buah objek sepeda
        sepeda spd1 = new sepeda();
        sepeda spd2 = new sepeda();
        SepedaGunung spd3 = new SepedaGunung();

        //Panggil meethod didalam objek sepeda
        spd1.setMerek("Polygone");
        spd1.tambahKecepatan(10);
        spd1.gantiGear(2);
        spd1.cetakStatus();

        spd2.setMerek("Wim cycle");
        spd2.tambahKecepatan(10);
        spd2.gantiGear(2);
        spd2.tambahKecepatan(10);
        spd2.gantiGear(3);
        spd2.cetakStatus();

        spd3.setMerek("Klinee");
        spd3.tambahKecepatan(5);
        spd3.gantiGear(7);
        spd3.setTipeSuspensi("Gas suspension");
        spd3.cetakStatus();
    }
        
    }

