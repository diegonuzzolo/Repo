namespace SiansDataCollection
{
    public class SsArray
    {
        private int length;
        private Object[] data;
        public bool style;
        public SsArray(bool with_style)
        {
            this.data = new Object[0];
            Length = this.data.Length;
            style = with_style;
        }
        public Object Get(int index_element)
        {
            try
            {
                return this.data[index_element - 1];
            }
            catch { return 0; }
        }

        public Object[] Data
        {
            get { return data; }
            set { data = value; Length = data.Length; }
        }

        public int Length { get => length; set => length = value; }

        public void Push(Object obj)
        {
            Length++;
            Object[] data;
            data = this.data;
            this.data = new Object[Length];
            for (int i = 0; i < data.Length; i++)
            {
                this.data[i] = data[i];
            }
            this.data[Length - 1] = obj;
        }



        public void Concat(params Array[] args)
        {
            int indice = args.Length;
            foreach (Array array in args)
            {
                foreach (Object obj in array)
                {
                    Push(obj);
                }
            }
        }


        public void Append(params Object[] obj)
        {
            Length += obj.Length;
            Object[] data = this.data;
            this.data = new Object[Length];
            for (int i = 0; i < obj.Length; i++) { this.data[i] = obj[i]; }
            for (int i = obj.Length; i < Length; i++) { this.data[i] = data[i - obj.Length]; }
        }


        public void RemoveN(int n)
        {
            Length -= n;
            Object[] data = this.data;
            this.data = new Object[Length];
            for (int i = 0; i < Length; i++)
            {
                this.data[i] = data[i];
            }
        }


        public void ShiftN(int n)
        {
            if (n != 0)
            {
                Length -= n;
                Object[] data = this.data;
                this.data = new Object[Length];
                for (int i = n; i < data.Length; i++)
                {
                    this.data[i - n] = data[i];
                }
            }
            else { Shift(); }

        }

        public void Shift()
        {
            Length--;
            Object[] data = this.data;
            this.data = new Object[Length];
            for (int i = 1; i < data.Length; i++)
            {
                this.data[i - 1] = data[i];
            }
        }



        public int[] ToIntArray()
        {
            int[] arrayNumeri = new int[Length];
            int i = 0;
            foreach (Object obj in this.data)
            {


                if (obj is int numero)
                {
                    arrayNumeri[i] = numero;
                }
                i++;
            }
            return arrayNumeri;
        }


        public override String ToString()
        {
            String text = "";

            if (style)
            {
                text = "[";
                for (int i = 0; i < Length; i++)
                {
                    text += this.data[i];
                    if (i == Length - 1) break;
                    text += ", ";

                }
                text += "]";
            }
            else
            {
                for (int i = 0; i < Length; i++)
                {
                    text += this.data[i];
                    if (i == Length - 1) break;
                    text += " ";
                }
            }
            return text;
        }


    }

    public static class MergeSort
    {

        private static void Reverse(SsArray a)
        {

            Object[] a1 = new object[a.Length];
            int l = a.Length - 1;
            for (int i = 0; i < a.Length - 1; i++)
            {
                a1[l - i] = a.Data[i];
            }
            a.Data = a1;
        }
        public static int[] Array(int[] a)
        {

            SsArray Sarray = new SsArray(true);
            Sarray.Concat(a);
            try { foreach (int e in Sarray.Data) { }; }
            catch (Exception ex)
            {
                Console.WriteLine("Errore: " + ex.Message.ToString());
                Console.WriteLine("Gli array non contengono solo numeri interi.");
            }
            for (int index = 0; index < 25; index++)
            {
                int l = 1;
                while (true)
                {
                    Object k = Sarray.Get(l);
                    Object m = Sarray.Get(l + 2);
                    if (Convert.ToInt32(k) <= Convert.ToInt32(m))
                    {
                        Sarray.Data[l - 1] = m;
                        Sarray.Data[l + 1] = k;
                    }
                    if (l == Sarray.Length - 2) { break; }
                    l++;
                }
                l = 1;
                while (true)
                {
                    object k = Sarray.Get(l);
                    object m = Sarray.Get(l + 1);
                    if (Convert.ToInt32(k) <= Convert.ToInt32(m))
                    {
                        Sarray.Data[l - 1] = m;
                        Sarray.Data[l] = k;
                    }
                    if (l == Sarray.Length - 1) { break; }
                    l++;
                }
            }
            Reverse(Sarray);
            return Sarray.ToIntArray();
        }

    }


}