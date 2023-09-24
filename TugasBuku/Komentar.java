package TugasBuku;

public class Komentar {
    private String nama;
    private String email;
    private String komentar;

    public Komentar(String nama, String email, String komentar) {
        this.nama = nama;
        this.email = email;
        this.komentar = komentar;
    }

    public String getNama() {
        return nama;
    }

    public String getEmail() {
        return email;
    }

    public String getKomentar() {
        return komentar;
    }
}
