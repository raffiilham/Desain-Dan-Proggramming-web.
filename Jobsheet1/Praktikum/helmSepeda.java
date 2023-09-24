
public class helmSepeda 
{
    private String merk;
    private String warna;

    public void jenisMerek (String newValue)
    {
        merk = newValue;
    }

    public void pilihWarna(String newValue)
    {
        warna = newValue;
    }

    public void cetakStatus()
    {
        System.out.println("Merk: " + merk);
        System.out.println("warna: " + warna);
    }
}
