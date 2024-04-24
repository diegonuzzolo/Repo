// rinominare il nome del file in Program ed aggiungerlo alle dipendenze del progetto console 
using System;
internal class Program
{
    static void Main()
    {
        // dichiaro un array con un numero piu frequente (42)
        int[] array = new int[]{55, 42, 88, 42, 88, 42, 67};
        // stampo direttamente il numero piu frequente calcolato tramite la funzione GetMaxFrequente() della classe statica Numero
        Console.WriteLine(Numero.GetMaxFrequente(array));

    }
}

static class Numero
{
    public static int GetMaxFrequente(int[] array)
    {
        Dictionary<int, int> frequenze = new Dictionary<int, int>();

        // Calcolo frequenze
        foreach (int elemento in array)
        {
            if (frequenze.ContainsKey(elemento))
            {
                frequenze[elemento]++;
            }
            else
            {
                frequenze[elemento] = 1;
            }
        }

        // Ricerca del numero più frequente
        int maxFrequenzaElemento = 0;
        int maxFrequenzaCount = 0;

        foreach (var coppia in frequenze)
        {
            if (coppia.Value > maxFrequenzaCount || (coppia.Value == maxFrequenzaCount && coppia.Key < maxFrequenzaElemento))
            {
                maxFrequenzaElemento = coppia.Key;
                maxFrequenzaCount = coppia.Value;
            }
        }

        return maxFrequenzaElemento;
    }

}