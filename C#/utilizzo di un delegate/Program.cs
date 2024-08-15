internal class Program
{
    delegate void ScreamAction();
    public static void Main(string[] args)
    {
        Dictionary<String, Object> user = new()
        {
            { "name", "Sascha"},
            { "age", 21},
            { "magic", true},
            { "scream",new ScreamAction(()=>{ Console.WriteLine("ahhhhh!"); })}

        };

        user.TryGetValue("scream", out var screamAction);
        var scream = screamAction as ScreamAction;
        scream();
    }
}