// Questo è il mio metodo per la funzione Reverse() di una stringa

static string Reverse(string str)
{
    if (str.Length < 2)
    {

        return str;
    }
    else
    {
        char[] strArray = str.ToCharArray();
        str = "";
        for (int i = strArray.Length - 1; i >= 0; i--)
        {
            str += strArray[i];

        }
    }
    return str;
}