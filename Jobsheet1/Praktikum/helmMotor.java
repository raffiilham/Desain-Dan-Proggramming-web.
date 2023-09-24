public class helmMotor extends helmSepeda
{
    private String sistemPengunci;

    public void jenisSistemPengunci (String newValue)
    {
        sistemPengunci = newValue;
    }

    public void cetakStatus()
    {
        super.cetakStatus();
        System.out.println("Sistem Pengunci: " + sistemPengunci);
    }
}
