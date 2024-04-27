// rinominare il nome del file in Program ed aggiungerlo alle dipendenze del progetto console 
using System;
internal class Program
{
    static void Main()
    {
        //scelta del numero per la resistenza
        int numero =6788;
        int resistenza = Numero.GetResistenza(numero);
    }
}

static class Numero
{
    public static int GetResistenza(int n)
    {
        int resistenza = 0;

        while (n >= 10)
        {
            string stringaNumero = n.ToString();
            char[] arrayCifreNumero = stringaNumero.ToCharArray();

            if (arrayCifreNumero.Length == 2)
            {
                int cifra1 = Convert.ToInt32(arrayCifreNumero[0].ToString());
                int cifra2 = Convert.ToInt32(arrayCifreNumero[1].ToString());
                n = cifra1 * cifra2;
                resistenza++;
            }
            else
            {
                int prodotto = 1;
                foreach (char cifraChar in arrayCifreNumero)
                {
                    int cifra = Convert.ToInt32(cifraChar.ToString());
                    prodotto *= cifra;
                }

                n = prodotto;
                resistenza++;
            }
        }

        return resistenza;
    }
}