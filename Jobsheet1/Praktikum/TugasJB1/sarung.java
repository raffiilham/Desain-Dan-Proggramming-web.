package TugasJB1;

public class sarung 
{
    private String kualitas;

    public void pilihanKualitas (String newValue)
    {
        kualitas = newValue;
    }

    public void cetakStatus()
    {
        System.out.println("Kualitas Sarung: " + kualitas);
    }
}
