package TugasJB1;

public class kardus 
{
    private String motif;
    
    public void gambarMotif (String newValue)
    {
        motif = newValue;
    }

    public void cetakStatus()
    {
        System.out.println("Motif: " + motif);
    }
}
