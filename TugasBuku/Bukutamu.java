package TugasBuku;

import java.util.ArrayList;

public class Bukutamu {
    ArrayList<Komentar> komentar;

    public void BukuTamu() {
        komentar = new ArrayList<>();
    }

    public void add(Komentar k) {
        this.komentar.add(k);
    }

    public void lihatKomentar() {
        for (Komentar kom : komentar) {
            System.out.println("Nama : " + kom.getNama());
            System.out.println("Jenis Kelamin : " + kom.getJenisKelamin());
            System.out.println("Email : " + kom.getEmail());
            System.out.println("Komentar : " + kom.getKomentar());
            System.out.println();
        }
    }
}
