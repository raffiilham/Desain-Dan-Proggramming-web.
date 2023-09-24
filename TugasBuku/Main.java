package TugasBuku;

import java.util.Scanner;

public class Main {
    static int menu;
    static Scanner input = new Scanner(System.in);

    public static void main(String[] args) {
        Bukutamu bu = new Bukutamu();
        int pilihan;

        System.out.println("\n==================== BUKU TAMU ====================\n");

        do {
            pilihan = Menu();

            switch (pilihan) {
                case 1:
                    System.out.println("\nMasukkan Nama : ");
                    String nama = input.next();
                    System.out.println("Masukkan jenis kelamin");
                    String jk = input.next();
                    System.out.println("Masukkan Email : ");
                    String email = input.next();
                    System.out.println("Masukkan Komentar : ");
                    String komentar = input.next();

                    Komentar ku = new Komentar(nama, jk, email, komentar);
                    bu.add(ku);

                    System.out.println("\nUcapan berhasil disimpan.\n");
                    break;

                case 2:
                    System.out.println("\n================== DAFTAR UCAPAN ==================\n");
                    bu.lihatKomentar();
                    System.out.println("\n===================================================\n");
                    break;
            }
        } while (pilihan < 3);

        System.out.println("\n=================== TERIMAKASIH ===================\n");
    }

    static int Menu() {
        System.out.println("Menu : ");
        System.out.println("1. Tambah Komentar");
        System.out.println("2. Lihat Komentar");
        System.out.println("3. Keluar");
        System.out.print("=> ");
        menu = input.nextInt();
        return menu;
    }
}
