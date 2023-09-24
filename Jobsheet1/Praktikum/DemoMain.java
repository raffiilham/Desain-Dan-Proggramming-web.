import TugasJB1.kardus;
import TugasJB1.sarung;

public class DemoMain {
    
    public static void main(String[] args) 
    {
        //dua buah objek helm
        helmSepeda hlm1 = new helmSepeda();
        helmSepeda hlm2 = new helmSepeda();
        helmMotor hlm3 = new helmMotor();

        sarung srg1 = new sarung();
        kardus kds1 = new kardus();

        
        //panggil meethod didalam objek sepeda
        hlm1.jenisMerek("Limar 555");
        hlm1.pilihWarna("hitam doff");
        hlm1.cetakStatus();

        hlm2.jenisMerek("Rockbross WT207");
        hlm2.pilihWarna("asphalt grey");
        hlm2.cetakStatus();

        hlm3.jenisMerek("Shoei");
        hlm3.pilihWarna("white glossy");
        hlm3.jenisSistemPengunci("Double DD Ring");
        hlm3.cetakStatus();

        srg1.pilihanKualitas("Tebal");
        srg1.cetakStatus();

        kds1.gambarMotif("Racing Flag");
        kds1.cetakStatus();
        
    }
}
