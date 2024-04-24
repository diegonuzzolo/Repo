// rinominare il nome del file in Program ed aggiungerlo alle dipendenze del progetto console 
using System;
internal class Program
{
    static void Main()
    {
        int[] array1 = Numero.GetMaxFrequenti(array, 3);
        foreach(int elemento in array1){
           Console.WriteLine(elemento);
        }
    }
}

static class Numero
{
    public static int[] GetMaxFrequenti(int[] array, int k)
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


        var sortedFrequenze = frequenze.OrderByDescending(pair => pair.Value).ThenBy(pair => pair.Key);


        var risultato = sortedFrequenze.Take(k).Select(pair => pair.Key).ToArray();

        return risultato;
    }
}