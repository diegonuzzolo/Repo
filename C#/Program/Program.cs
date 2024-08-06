internal class Program
{
    public static void Main(string[] args)
    {
        Dictionary<String, Object> user = new()
        {
            { "name", "Sascha"},
            { "age", 21},
            { "magic", true},
            { "scream",()=>{Console.WriteLine("ahhhhh!"); }}

        };

        var scream = (Dictionary<String, Object> user) =>
        {
            return user["scream"];
        };

        scream(user);
    }
}